<?php
    /** Include the database connection File */
    require_once(__DIR__."/../globals.php");
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");

    $email = $_POST['reg_email'];
    $password = $_POST['reg_pwd'];
    
    $sql = "INSERT INTO member(email,pwd) 
            VALUES ('$email','$password')";
    $insert = $mysqli->query($sql);
    echo 0;
    $redirected_url = 'http://' . $_SERVER['HTTP_HOST'] . '/projects/hc_insurance/mem_newm.php';
         echo $redirected_url;
    if ($insert)
    {
        header('Location: ' . $redirected_url);  
        echo 1;
    }

    else
    {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }
?>