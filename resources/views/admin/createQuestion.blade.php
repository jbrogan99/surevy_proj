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
    @if ($errors->any())
    <div>
        <ul class="alert alert-danger">
            <!--Adds error message-->
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="surevy_main_container">
        <div class="surevy_title_container">
            <form method="post" action="/question/createQuestion" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div id="container_questionaire1">
                    <label for="question_title">
                        <h2>Enter Question:</h2>
                    </label>
                    <input type="text" class="title_input" id="title_input_id" placeholder="Add Question" name="question_title">
                    <input type="hidden" id="questionaire_id" name="questionaire_id">
                    <!--Hidden filed to store value-->
                    <input type="submit" id="submit_questionaire" value="submit">

            </form>


        </div>

        @if (count($numberOfSavedQuestions) > 0)
        <label for="end_questionaire">End questionnaire
            <a href="/option"> <button>End</button> </a>
        </label>
        @endif
    </div>




    <script type="text/javascript">
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const id = urlParams.get('id');
        var questionaire_id = document.getElementById('questionaire_id');
        questionaire_id.setAttribute('value', id);
        var finish_survey = document.getElementById("finish_survey");
    </script>

</body>

</html>