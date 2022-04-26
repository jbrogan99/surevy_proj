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
                    <th>Questionnaire ID</th>
                    <th>Question ID</th>
                    <th>Question Option ID</th>
                    <th>Answer (1 or 2)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userAnswer as $inst)
                <tr>
                    <!--extracts each property from userAnswers model-->
                    <td>{{ $inst->questionaire_id}}</td>
                    <td>{{ $inst->question_id}} </td>
                    <td>{{ $inst->question_option_id}} </td>
                    <td>{{ $inst->answer}} </td>
                </tr>
                @endforeach



            </tbody>
        </table>
    </div>


</body>

</html>