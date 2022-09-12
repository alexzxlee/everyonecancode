@extends('layouts.master')
@section('title', 'Customers')

@section('content')
<html>
   <head>
      <link rel="stylesheet" href="{{ URL::asset('app.css'); }}">
   </head>
   <body>
      <br><h2 align = "center">Manage Customers</h2><br>
      <table class = "container">
         <div>
            <tr>
               <th>ID</td>
               <th>Customer Name</td>
               <th>Fund</td>
               <th></th>
               <th></th>
            </tr>
         </div>
         @foreach ($customers as $customer)
         <div>
            <tr>
               <td>{{ $customer->id }}</td>
               <td>{{ $customer->name }}</td>
               <td>{{ $customer->fund }}</td>
               <td>
                  <form action="/customer/{{ $customer->id }}" method='GET'>
                     <button type="submit" @disabled($errors->isNotEmpty())>Show</button>
                  </form>
               </td>
               <td>
                  <form method='POST' action="/customer/{{ $customer->id }}">
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
               <form action="/customer/create" method='GET'>
                  <button type="submit" @disabled($errors->isNotEmpty())>Add Customer</button>
               </form>
            </td>
         </tr>
      </div>
   </body>
</html>
@endsection