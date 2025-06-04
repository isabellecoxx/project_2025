<?php 
    include("include/init.php");

    $questions = getQuestions();

    echo "

        <!DOCTYPE html>

        <head>
            <meta charset='utf-8' name='viewport' content='width=device-width'>
            <link rel='stylesheet' href='mainPageStyle.css'>
        </head>

        <h1 class='titleText'>Previously Asked Questions</h1>
    ";

    foreach($questions as $question){

        $name = $question['name'];
        $q = $question['content'];

        echo "

        <!DOCTYPE html>

        <head>
            <meta charset='utf-8' name='viewport' content='width=device-width'>
            <link rel='stylesheet' href='mainPageStyle.css'>
        </head>

        <body style='background-color:pink;'>
            <br>
            <div class='classParagraph'>
                ".htmlspecialchars($name)." asked:
            </div>
            <br>
            <div class='classParagraph'>
                ".htmlspecialchars($q)."
            </div>
            <br>
        ";

    }

    // $questions = getQuestion("questionId");

    // $name = $questions['name'];
    // $question = $questions['content'];

    
    // echo "

    //     <!DOCTYPE html>

    //     <head>
    //         <meta charset='utf-8' name='viewport' content='width=device-width'>
    //         <link rel='stylesheet' href='mainPageStyle.css'>
    //     </head>

    //     <h1 class='titleText'>Previously Asked Questions</h1>

    //     <body style='background-color:pink;'>
    //         <br>
    //         <div class='classParagraph'>
    //             $name asked:
    //         </div>
    //         <br>
    //         <div class='classParagraph'>
    //             $question
    //         </div>
    //         <br>
    // ";