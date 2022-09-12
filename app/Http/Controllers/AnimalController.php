<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;

class AnimalController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() 
    {
        $animals = self::allAnimals();
        return view('animals_index', ['animals' => $animals]);
    }

    public function selectAnimals(Request $request)
    {
        $type = $request->input('type');
        $reverse = $request->input('reverse');
        $numberOfAnimals = $request->input('numberOfAnimals');

        return redirect("/$type/$numberOfAnimals/$reverse");
    }

    public function animals(Request $request, $type = null, $numberOfAnimals = 0, $reverse = false)
    {
        $data = [];
        $split = [];
        $animals = self::allAnimals();
        $totalPrice = 0;

        $IDs = array_keys(array_column(self::allAnimals(), 'type'), $type); // ex: [3, 4, 5, 6]
        
        if ($reverse) {
            $IDs = array_values(array_diff(array_keys(self::allAnimals()), $IDs));
        }

        for ($i=0; $i<$numberOfAnimals; $i++) {
            if (!isset($split[$IDs[$i%count($IDs)]])) {
                $split[$IDs[$i%count($IDs)]] = 1;
            } else {
                $split[$IDs[$i%count($IDs)]]++;
            }
        }

        foreach ($split as $id => $quantity) {
            array_push($data, [
                "id" => $animals[$id]['id'], // split
                "price" => $animals[$id]['price'],
                "type" => $animals[$id]['type'],
                'name' => $animals[$id]['name'],
                'quantity' => $quantity // split
            ]);

            $totalPrice += $animals[$id]['price'] * $quantity;
        }

        $transactions = []; // eg. ['dog' => 65, 'cat' => 300]

        foreach ($data as $item) {
            $subTotal = $item['price']*$item['quantity'];
            if (count($transactions) == 0) {
                $transactions = [$item['type'] => [$item['quantity'], $subTotal]];
            } else {
                // if type is new to $transactions
                if (!array_key_exists($item['type'], $transactions)) {
                    $transactions[$item['type']][0] = $item['quantity'];
                    $transactions[$item['type']][1] = $subTotal;
                } else { 
                    $transactions[$item['type']][0] += $item['quantity'];
                    $transactions[$item['type']][1] += $subTotal;
                }
            }
        }

        $customers = DB::table('customers')->get();

        return view('animals_select', [
            'data' => $data, 
            'transactions' => $transactions,
            'customers' => $customers
        ]);
    }

    public function buy(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required',
            'type' => 'required',
            'number_of_animals' => 'required',
            'total_price' => 'required',
        ]);

        Transaction::create(request([
            'customer_id', 
            'type', 
            'number_of_animals', 
            'total_price', 
            'created_at', 
            'updated_at',
        ]));

        return redirect('/transactions');
    }

    private function allAnimals() : array
    {
        return [
            [
                "id"   => 1,
                "price" => 5,
                "type" => 'dog',
                'name' => 'bulldog'
            ],
            [
                "id"   => 2,
                "price" => 10,
                "type" => 'dog',
                'name' => 'poodle'
            ],
            [
                "id"   => 3,
                "price" => 15,
                "type" => 'dog',
                'name' => 'beagle'
            ],
            [
                "id"   => 4,
                "price" => 5,
                "type" => 'cat',
                'name' => 'persian'
            ],
            [
                "id"   => 5,
                "price" => 100,
                "type" => 'cat',
                'name' => 'russian blue'
            ],
            [
                "id"   => 6,
                "price" => 10,
                "type" => 'cat',
                'name' => 'scottish fold'
            ],
            [
                "id"   => 7,
                "price" => 15,
                "type" => 'cat',
                'name' => 'siamese'
            ],
            [
                "id"   => 8,
                "price" => 100,
                "type" => 'cow',
                'name' => 'angus'
            ],
            [
                "id"   => 9,
                "price" => 200,
                "type" => 'cow',
                'name' => 'hereford'
            ],
            [
                "id"   => 10,
                "price" => 1000,
                "type" => 'cow',
                'name' => 'guernsey'
            ]
        ];

    }
}
