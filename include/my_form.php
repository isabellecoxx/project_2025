<?php

    function getQuestions(){

        $questions = dbQuery("
            SELECT *
            FROM questions
        ")->fetchAll();

        return $questions;
    }
    function getQuestion($questionId){

        $question = dbQuery("
            SELECT *
            FROM questions
            WHERE questionId = $questionId;
        ")->fetch();
    
        return $question;
    
    }

    function insertQuestion($userName, $userComment){
        dbQuery("
        INSERT INTO questions(content, name)
        VALUES(:userComment, :userName)
        ", [
            'userName' => $userName,
            'userComment' => $userComment
        ]);
    }
    