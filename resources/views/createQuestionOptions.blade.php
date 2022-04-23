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

<body id="create_q_body">
    <div id="surevy_creation_container1">

        <form method="post" action="/questionOptions/createOption" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div id="container_questionaire1">
                <h4>Enter Answer:</h4>
                <label for="question_option2" name="question_option"> Answer 1:
                    <input type="text" id="question_option" placeholder="Add Question" name="question_option">
                </label>
                <label for="question_option2"> Answer 2:
                    <input type="text" id="question_option2" placeholder="Add Question" name="question_option2">
                </label>
                <input type="hidden" id="question_id" name="question_id">
                <input type="hidden" id="questionaire_id" name="questionaire_id">
                <input type="submit" id="submit_answer" value="submit">
        </form>
    </div>
    <script type="text/javascript">
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const id = urlParams.get('id');
        const questionaire_id = urlParams.get('questionaire_id');
        var question_id = document.getElementById('question_id');
        question_id.setAttribute('value', id);
        var questionaire_id_element = document.getElementById('questionaire_id');
        questionaire_id_element.setAttribute('value', questionaire_id);
    </script>

</body>

</html>