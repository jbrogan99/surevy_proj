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
    <a href="/option"><img src="/img/back.jpg" id="back_img_title_page" width="200px"> </a>
    @if ($errors->any())
    <div>
        <ul class="alert alert-danger">
            <!--error message -->
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="surevy_main_container">
        <div class="surevy_title_container">
            <h2 id="s_title">Add Questionaire Title:</h2>

            <form method="post" action="/questionaireTitle/create" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="title">
                    <input type="text" class="title_input" placeholder="Add title here" name="title">
                </label>
                <button type="submit" value="submit">submit </button>
            </form>

        </div>
    </div>


</body>

</html>