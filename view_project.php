<?php

    include("include/init.php");

    //debugOutput($_REQUEST);
    
    $project = getProject($_REQUEST["projectId"]);
    //debugOutput($project);
    
    $title = $project['title'];
    $href = $project['href'];
    $content = $project['content'];

    $img1 = $project['img1'];
    $img2 = $project['img2'];

    //debugOutput($title);

    echo "

        <!DOCTYPE html>

        <head>
            <meta charset='utf-8' name='viewport' content='width=device-width'>
            <title>$title</title>
            <link rel='stylesheet' href='mainPageStyle.css'>
        </head>

        <body style='background-color:pink;'>
            <h1 class='titleText'>$title</h1>
            <br>
            <br>
            <div class='introParagraph'>
                $content
            </div>
            <br>
            <br>
            <div class='row'>
                <img src=$img1 alt='polar bear game' width='450' height='300' class='matchingImg'>
                <img src=$img2 alt='vs game' width='450' height='300' class='matchingImg'>
            </div>
        </body>
    ";