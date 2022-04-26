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
    <div class="surevy_main_container">
        <div class="surevy_title_container">
            <h1 id="answer_page_questionaire_title">{{$questionaire->title}}</h1>

            {!! Form::open(['method' => 'POST', 'route' => ['createUserAnswer']]) !!}
            <h2 id="answer_page_question_title">{{$question->question_title}}:</h2>
            <div class="block">
                <p id="answer_page_answer1">{{$questionOption->question_option}}</p>
                {!! Form::radio('answer', '1'); !!}
                <!--radio button for single selection -->
            </div>

            <div class="block">
                <p id="answer_page_answer2">{{$questionOption->question_option2}}</p>
                <input type="hidden" name="questionaire_id" value={{$questionaire->id}} <input type="hidden" name="question_id" value={{$question->id}} />
                <input type="hidden" name="question_option_id" value={{$questionOption->id}} />

                {!! Form::radio('answer', '2'); !!}
            </div>

            {!! Form::submit('Submit', ['class' => 'btn']) !!}
            {!! Form::close() !!}

        </div>
        <!--hidden fields to store the values of the id's-->




    </div>


</body>

</html>