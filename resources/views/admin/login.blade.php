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

<body id="center_body">
    <div id="login_container">
        <a href="/option">
            <h1 class="options">dashboard</h1>
        </a>
        <h1 class="options">Login</h1>
        <h1 class="options">Create Account</h1>
    </div>
</body>

</html>