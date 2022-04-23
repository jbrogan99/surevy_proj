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
    <div id="surevy_title_container">
        <h2 id="s_title">Survey Title</h2>
        <form method="post" action="/questionaireTitle/create" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="text" id="title_input" placeholder="Add title here" name="title">
            <button type="submit" value="submit">submit </button>
        </form>

    </div>


</body>

</html>