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

<body id="add_q_body">
    <div id="add_question_container">

        <h2> Would you like to add another question ?</h2>
        <div id="button_container">
            <a href="/surveyCreationPage/createQuestionaire"><button id="button_yes">yes</button> </a>
            <a href="/option"><button id="button_no">no</button></a>
        </div>

    </div>

</body>
<script type="text/javascript">
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('id');
</script>

</html>