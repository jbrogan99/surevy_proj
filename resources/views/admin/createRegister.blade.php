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

    <h2>Register</h2>
    <form method="POST" action="/register">
        {{ csrf_field() }}

        <label for="name">Name:</label>
        <input type="text" class="form-register" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" class="form-register" id="email" name="email">
        <label for="password">Password:</label>
        <input type="password" class="form-register" id="password" name="password">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>


    </form>

</body>