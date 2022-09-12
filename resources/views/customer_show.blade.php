@extends('layouts.master')
@section('title', 'Customer Information')

@section('content')
<html>
   <body>
      <br><h2 align = "center">Show Customer Form</h2><br>
      <div class = "container">
         <tr>
            <td>ID: </td>
            <td>{{ $customer->id }}</td>
         </tr><br>
         <tr>
            <td>Name: </td>
            <td>{{ $customer->name }}</td>
         </tr><br>
         <tr>
            <td>Fund: </td>
            <td>{{ $customer->fund }}</td>
         </tr><br>
         <tr>
            <td>Creation Date: </td>
            <td>{{ $customer->created_at }}</td>
         </tr><br>
         <tr>
            <td>Update Date: </td>
            <td>{{ $customer->updated_at }}</td>
         </tr><br><br>
         <tr>
            <td>
               <form action="/customer/{{ $customer->id }}/edit" method='GET'>
                  @csrf
                  <button type="submit" @disabled($errors->isNotEmpty())>Edit</button>
               </form>
            </td>
            <td>
               <form action="/customer/{{ $customer->id }}" method='POST'>
                  @csrf
                  @method('DELETE')
                  <button type="submit" @disabled($errors->isNotEmpty())>Delete</button>
               </form>
            </td>
            <td>
               <form action="/customers" method='GET'>
                  <button type="submit" @disabled($errors->isNotEmpty())>Go Back</button>
               </form>
            </td>
         </tr>
      </div>
   </body>
</html>
@endsection