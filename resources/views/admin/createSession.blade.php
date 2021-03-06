<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/option.css') }}">
    <!-- Styles -->
    <style>


    </style>
</head>

<body>



    <h2>Log In</h2>

    <form method="POST" action="/login">
        {{ csrf_field() }}
        @if($errors->any())
        <h4>{{$errors->first()}}</h4>
        @endif
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>

    </form>

</body>