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
        <h2 id="s_title">{{$questionaire->title}}</h2>

        {!! Form::open(['method' => 'POST', 'route' => ['createUserAnswer']]) !!}


        <h3>{{$question->question_title}}</h3>

        <h4>{{$questionOption->question_option}}</h4>
        {!! Form::radio('answer', '1'); !!}
        <h4>{{$questionOption->question_option2}}</h4>
        <input type="hidden" name="questionaire_id" value={{$questionaire->id}} />
        <input type="hidden" name="question_id" value={{$question->id}} />
        <input type="hidden" name="question_option_id" value={{$questionOption->id}} />
        {!! Form::radio('answer', '2'); !!}

        {!! Form::submit('Submit', ['class' => 'btn']) !!}
        {!! Form::close() !!}






    </div>


</body>

</html>