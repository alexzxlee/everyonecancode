@extends('layouts.master')
@section('title', 'Transactions')

@section('content')
<html>
   <head>
      <link rel="stylesheet" href="{{ URL::asset('app.css'); }}">
   </head>
   <body>
      <br><h2 align = "center">Transactions History</h2><br>
      <table class = "container">
         <div>
            <tr>
               <th>ID</th>
               <th>Customer ID</th>
               <th>Animal Type</th>
               <th>Number of Animals</th>
               <th>Total Price</th>
               <th>Created Date</th>
               <th></th>
            </tr>
         </div>
         @foreach ($transactions as $transaction)
         <div>
            <tr>
               <td>{{ $transaction->id }}</td>
               <td>{{ $transaction->customer_id }}</td>
               <td>{{ $transaction->type }}</td>
               <td>{{ $transaction->number_of_animals }}</td>
               <td>{{ $transaction->total_price }}</td>
               <td>{{ $transaction->created_at }}</td>
               <td>
                  <form action="/transaction/{{ $transaction->id }}" method='POST'>
                     @csrf
                     @method('DELETE')
                     <button type="submit" @disabled($errors->isNotEmpty())>Delete</button>
                  </form>
               </td>
            </tr>
         </div>
         @endforeach
      </table>
      <br>
      <div align = "center">
         <tr>
            <td>
               <form action="/animals/index" method='GET'>
                  <button type="submit" @disabled($errors->isNotEmpty())>Add Transaction</button>
               </form>
            </td>
         </tr>
      </div>
   </body>
</html>
@endsection