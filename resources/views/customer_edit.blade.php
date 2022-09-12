@extends('layouts.master')
@section('title', 'Alter Customer')

@section('content')
<html>
   <body>
      <br><h2 align = "center">Edit Customer</h2><br>
      <div class = "container">
            <form action="/customer/{{ $customer->id }}" method='POST'>
               @csrf
               @method('PUT')
               <label for="name">Customer name:</label>
               <input id="name" name="name" value="{{ $customer->name }}">
               <label for="fund">Fund:</label>
               <input id="fund" name="fund" value="{{ $customer->fund }}">
               <button type="submit" @disabled($errors->isNotEmpty())>Update</button>
            </form>
            <form action="/customer/{{ $customer->id }}" method='GET'>
               <button type="submit" @disabled($errors->isNotEmpty())>Cancel</button>
            </form>
      </div>
   </body>
</html>
@endsection