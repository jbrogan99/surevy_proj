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
    <div id="option_container">
        <a href="/questionaireTitle/create">
            <h1 id="create_survey" class="options">Create Questionnaire</h1>
        </a>
        <a href="/modifyQuestionaire">
            <h1 id="modify_survey" class="options">Modify Existing Questionnaire</h1>
        </a>
        <a href="/viewResponses">
            <h1 id="responses" class="options">View Responses</h1>
        </a>
    </div>


</body>

</html>