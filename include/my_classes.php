<?php

    function getClasses(){

    $classes = dbQuery("
        SELECT *
        FROM classes
    ")->fetchAll();

    return $classes;
    }

    function getClass($classId){

    $class = dbQuery("
        SELECT *
        FROM classes
        WHERE classId = $classId;
    ")->fetch();

    return $class;

    }