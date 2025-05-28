<?php
    /*function getProjects(){
        $projects = [
            1 => [
                "projectId" => 1,
                "title" => "Matching Games",
                "href" => "classes.php"
            ],
            2 => [
                "projectId" => 2,
                "title" => "Personal Games",
                "href" => "projects.php"
            ]
        ];
        return $projects;
    }

    function getProject($projectId){
        $allProjects = getProjects();

        return $allProjects[$projectId];
    }*/

    function getProjects(){

        $projects = dbQuery("
            SELECT *
            FROM posts
        ")->fetchAll();

        return $projects;
    }

    function getProject($projectId){

        $project = dbQuery("
            SELECT *
            FROM projects
            WHERE projectId = $projectId;
        ")->fetch();

        return $project;

    }