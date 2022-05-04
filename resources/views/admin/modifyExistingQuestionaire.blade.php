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
    <h1 id="modify_title">Modify Questionnaire</h1>
    <div class="table_container">
        <table id="modify_questionaire_table">
            <thead>
                <tr>
                    <th>Questionnaire Title</th>
                    <th>Delete Questionnaire</th>
                </tr>
            </thead>
            <tbody>
                @foreach($questionaire as $inst)
                <!--loops round all questionaires-->
                <tr>
                    <td>{{ $inst->title }}</td>
                    <!--accessing title and add it dynamically -->
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['deleteQuestionaire', $inst->id]]) !!}
                        <!--deletes questionaire targeting the id of the questionaire -->
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach



            </tbody>
        </table>
    </div>

</body>

</html>