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
    <h1>Survey Title</h1>

    <table id="survey_title_table">
        <thead>
            <tr>
                <th>Questionnaire Title</th>
                <th>Delete Questionnaire</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questionaire as $inst)
            <tr>
                <td>{{ $inst->title }}</td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['deleteQuestionaire', $inst->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach



        </tbody>
    </table>
    <label for="main_menu">Main Menu
        <a href="/option"> <button>End</button> </a>
    </label>
</body>

</html>