<?php
    /** Include the database connection File */
    require_once(__DIR__."/../globals.php");
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");

    $first_name = $_POST['reg_name'];
    $email = $_POST['reg_email'];
    $mob_no1 = $_POST['mob_no1'];
    $mob_no2 = $_POST['mob_no2'];
    $password = $_POST['reg_pwd'];
    $dob = $_POST['reg_dob'];
    $status = $_POST['reg_stat'];
    $addr_str = $_POST['addr_str'];
    $addr_city = $_POST['addr_city'];
    $addr_pin = $_POST['addr_pin'];
    
    $sql = "INSERT INTO client(name,email,pwd,DOB,status,addr_street,addr_city,addr_pin) 
            VALUES ('$first_name','$email','$password','$dob','$status','$addr_str','$addr_city','$addr_pin')";
    $insert = $mysqli->query($sql);
    
    $sql2 = "SELECT clid from client 
            where email='".$email."'";
    $search_id = $mysqli->query($sql2);
    $row = mysqli_fetch_array($search_id);
    $id=$row['clid'];

    $sql3 = "INSERT INTO ph_no(cl_id,ph_no) 
            VALUES ('$id','$mob_no1')";
    $insert2 = $mysqli->query($sql3);
    $sql4 = "INSERT INTO ph_no(cl_id,ph_no) 
            VALUES ('$id','$mob_no2')";
    $insert3 = $mysqli->query($sql4);
    

    if ( $insert && ($insert2 && $insert3) ) 
    {
        echo "Thankyou for registering with us.";
        
    }
    else
    {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }
?>