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
    <div class="surevy_main_container">
        <div class="surevy_title_container">
            <form method="post" action="/questionOptions/createOption" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div id="container_questionaire1">
                    <h4>Enter Answer:</h4>
                    <div id="container_answers">
                        <label for="question_option" name="question_option"> Answer 1:
                            <input type="text" id="question_option" class="answer_options" placeholder="Add Answer" name="question_option">
                        </label><br>
                        <label for="question_option2"> Answer 2:
                            <input type="text" id="question_option2" class="answer_options" placeholder="Add Answer" name="question_option2">
                        </label><br>

                        <input type="hidden" id="question_id" name="question_id">
                        <input type="hidden" id="questionaire_id" name="questionaire_id">
                        <input type="submit" id="submit_answer" onvalue="submit">
            </form>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        var queryString = window.location.search; //
        var urlParams = new URLSearchParams(queryString);
        var id = urlParams.get('id');

        // ^^ gets query string parameters
        var questionaire_id = urlParams.get('questionaire_id'); // gets questionaire id of query string 
        var question_id = document.getElementById('question_id'); // gets question id of query string 
        question_id.setAttribute('value', id); // sets the value of id to value variable 
        var questionaire_id_element = document.getElementById('questionaire_id'); // gets questionaire id (just element)
        questionaire_id_element.setAttribute('value', questionaire_id); // sets the value of questionaire_id to value varible 

        var submit = document.getElementById("submit_answer");
    </script>

</body>

</html>