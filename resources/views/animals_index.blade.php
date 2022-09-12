@extends('layouts.master')
@section('title', 'Animals')
@section('content')
<html>
   <head>
      <link rel="stylesheet" href="{{ URL::asset('app.css'); }}">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   </head>
   <body>
      <br><h2 align = "center">Animals</h2><br>
      <div class="container marketing">
        <div class="row">
          @foreach ($animals as $animal)
            <div class="col-lg-2">
              <h5>{{ $animal['id'] }} {{ $animal['name'] }}</h5>
              <img class="" src=<?php $name = preg_replace("/ /","_",$animal['name']); echo URL::asset("images/$name.jpg");?> alt="Generic placeholder image" width="140" height="140">
              <br>
              <img class="" src=<?php $name = $animal['type']; echo URL::asset("images/$name.jpg");?> alt="Generic placeholder image" width="30" height="30">
              </a>
              ${{ $animal['price'] }}
              <br><br>
            </div>
          @endforeach
        </div>
        <br>
        <form action='/animals' method='GET'>
          <select name="type">
            @foreach (array('dog' => 'Dogs', 'cat' => 'Cats', 'cow' => "Cows") as $key => $type)
                <option value="{{ $key }}" @selected(old('type') == $key)>
                    {{ $key }}
                </option>
            @endforeach
          </select>
          <input type="checkbox"
            name="reverse"
            value=true
            id="reverse"
            @checked(old('reverse', false)) /> Reverse (Not what you select!)<br><br>
          <label for="numberOfAnimals">Number Of Animals </label>
          <input id="numberOfAnimals"
            name="numberOfAnimals"
            type="number"
            class="@error('numberOfAnimals') is-invalid @enderror"><br><br>
          @error('numberOfAnimals')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <button type="submit" @disabled($errors->isNotEmpty())>Select</button>
        </form>
      </div>
   </body>
</html>
@endsection