<?php

    include("include/init.php");

    $class = getClass($_REQUEST["classId"]);
    //debugOutput($project);
    
    $name = $class['name'];
    $instructor = $class['instructor'];
    $yearTaken = $class['yearTaken'];
    $grade = $class['grade'];

    echo "

        <!DOCTYPE html>

        <head>
            <meta charset='utf-8' name='viewport' content='width=device-width'>
            <link rel='stylesheet' href='mainPageStyle.css'>
        </head>

        <h1 class='titleText'>$name</h1>

        <body style='background-color:pink;'>
            <br>
            <div class='classParagraph'>
                Instructor: $instructor
            </div>
            <br>
            <div class='classParagraph'>
                Year Taken: $yearTaken
            </div>
            <br>
            <div class='classParagraph'>
                Grade: $grade
            </div>
    ";