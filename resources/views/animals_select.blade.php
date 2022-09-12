@extends('layouts.master')
@section('title', 'Selected Animals')
@section('content')
<html>
   <head>
      <link rel="stylesheet" href="{{ URL::asset('app.css'); }}">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   </head>
   <body>
      <br><h2 align = "center">Selected Animals</h2><br>
      <div class="container marketing">
        <div class="row">
          @foreach ($data as $animal)
            <div class="col-lg-3">
              <h2>{{ $animal['id'] }} {{ $animal['name'] }}</h2>
              <img class="" src=<?php $name = preg_replace("/ /","_",$animal['name']); echo URL::asset("images/$name.jpg");?> alt="Generic placeholder image" width="140" height="140">
              <br>
              <img class="" src=<?php $name = $animal['type']; echo URL::asset("images/$name.jpg");?> alt="Generic placeholder image" width="30" height="30">
              </a>
              ${{ $animal['price'] }} x {{ $animal['quantity'] }}
              <br><br>
            </div>
          @endforeach
        </div>
        <div>
          <form action='/animals/index' method='GET'>
            <button type="submit" @disabled($errors->isNotEmpty())>Re-select</button>
          </form><br><br>
        </div>

        @foreach ($transactions as $type => $transaction)
          <form action='/buy' method='post'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label for="customerID">Customer: </label>
            <select name="customer_id" id="customerID">
              @foreach ($customers as $customer)
              <option value="{{ $customer->id }}" >{{ $customer->name }}</option>
              @endforeach
            </select>
            <label for="numberOfAnimals">{{ $transaction[0] }} {{ $type }}(s)</label>
            <input type="hidden" id="numberOfAnimals" name="number_of_animals" value={{$transaction[0]}}>
            <input type="hidden" id="type" name="type" value={{$type}}>
            <label for="totalPrice">${{$transaction[1]}} CAD</label>
            <input type="hidden" id="totalPrice" name="total_price" value={{$transaction[1]}}>
            <input type="submit" value="Buy">
          </form>
        @endforeach

      </div>
   </body>
</html>
@endsection