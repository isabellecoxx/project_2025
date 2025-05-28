<?php
    $posts = [
        1 => [
            "postId" => 1,
            "title" => "Past Classes",
            "href" => "classes.php"
        ],
        2 => [
            "postId" => 2,
            "title" => "Past Projects",
            "href" => "projects.php"
        ],
        3 => [
            "postId" => 3,
            "title" => "More Information",
            "href" => "me.php"
        ]
    ];

    function getPosts(){
        $posts = [
            1 => [
                "postId" => 1,
                "title" => "Past Classes",
                "href" => "classes.php"
            ],
            2 => [
                "postId" => 2,
                "title" => "Past Projects",
                "href" => "my_projects.php"
            ],
            3 => [
                "postId" => 3,
                "title" => "More Information",
                "href" => "me.php"
            ]
        ];
        return $posts;
    }

    function getPost($postId){
        $allPosts = getPosts();

        return $allPosts[$postId];
    }