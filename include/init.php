<?php
    date_default_timezone_set('America/Chicago');
    session_start();

    include('connect.php');
		
    // This should happen right after connect.php (config)
    // so other functions have access to the database
    include('db_query.php');
    include('common_components.php');
    include('posts.php');
    include('projects.php');
    include('my_classes.php');
    include('my_form.php');
    include('helper_functions.php');