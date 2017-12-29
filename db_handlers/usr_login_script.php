<?php
    /** Include the database connection File */
    require_once(__DIR__."/../globals.php");    
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");

    $login_email = $_POST['login_email'];
    $login_pwd = $_POST['login_pwd'];

    $sql = "SELECT * from client 
            where email='".$login_email."'and pwd='".$login_pwd."'";   
   
    $search_user = $mysqli->query($sql);    //table was returned after executing the query, which would have one row
    $row_cnt = $search_user->num_rows;
    if($row_cnt>0)
    {
        session_start();
        while($row = mysqli_fetch_array($search_user))      //extracting row from the returned table, no need of while in this case
        {
            $_SESSION['usr_email'] = $row['email'];         //extracting attributes from the row, assigning in session
            $_SESSION['usr_name'] = $row['name'];
            echo $_SESSION['usr_email'];
        }

        $redirected_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SESSION['curr_page'];
        header('Location: ' . $redirected_url);        
    }
?>