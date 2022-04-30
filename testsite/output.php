<?php

    //create a db connection
    $link = mysqli_connect("localhost", "root", "");
    if(!$link){
        error_log("Failed to connect to MySQL: " . mysqli_error($link));
        die('Internal server error');
    }

    //select a db to use (testsite)
    $db_selected = mysqli_select_db($link, "testsite");
    if(!$db_selected){
        error_log("Database selection failed: " . mysqli_error($link));
        die('Internal server error');
    }

    // step 1 : formulate query
    $query1 = "INSERT INTO users ".
    "(name,email, password) "."VALUES ".
    "('$name','$email','$password')";

    // step 2: perform query
    $result = mysqli_query($link, $query1);




?>