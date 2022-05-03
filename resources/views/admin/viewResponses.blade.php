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

<body class="body_class" id="modify_q_body">
    <a href="/option"><img src="/img/back.jpg" width="200px"> </a>
    <h1 id="response_title">Responses</h1>
    <div class="table_container">
        <table id="responses_table">
            <thead>
                <tr>
                    <th>Questionnaire</th>
                    <th>Question</th>
                    <th>Question Option 1</th>
                    <th>Question Option 2</th>
                    <th>Answer</th>
                </tr>
            </thead>
            <tbody>

                @foreach($questionaires as $questionaire)
                @foreach($questionaire->question as $question)
                @foreach($question->questionOptions as $questionOption)
                @foreach($questionOption->userAnswer as $userAnswer)
                <tr>
                    <td>{{ $questionaire->title}}</td>
                    <td>{{ $question->question_title}}</td>
                    <td>{{ $questionOption->question_option}}</td>
                    <td>{{ $questionOption->question_option2}}</td>
                    @if(is_null($userAnswer))
                    @else
                    <td>{{ $userAnswer->answer}}</td>
                    @endif
                </tr>
                @endforeach

                @endforeach
                @endforeach
                @endforeach



            </tbody>
        </table>
    </div>


</body>

</html>