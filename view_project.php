<?php

    include("include/init.php");

    debugOutput($_REQUEST);
    
    $project = getProject($_REQUEST["projectId"]);
    debugOutput($project);
    
    $title = $project['title'];
    $href = $project['href'];

    debugOutput($title);

    echo "

        <!DOCTYPE html>

        <head>
            <meta charset='utf-8' name='viewport' content='width=device-width'>
            <title>$title</title>
            <link rel='stylesheet' href='mainPageStyle.css'>
        </head>

        <body style='background-color:pink;'>
            <h1 class='titleText'>$title</h1>
            <div class='introParagraph'>
                Insert description here depending on project id...
            </div>
        </body>
    ";