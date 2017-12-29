<?php 
    session_start();
    require_once(__DIR__."/../globals.php");     
    if(!(isset($_SESSION['usr_email']) && $_SESSION['usr_email'] != ''))
    {
        header ("LOCATION:index.php");    //if not logged in, user should be redirected to index.php
    }
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");
    require_once($GLOBALS['webroot']."/templates/header.php");		//write for - if not logged in, redirect to index.php
    $sql1 = "SELECT clid from client where email = '" . $_SESSION['usr_email'] . "'";
    $search_cl1 = $mysqli->query($sql1);
    $row1 = mysqli_fetch_array($search_cl1);

    $clid = $row1['clid'];
    $int_pid = $_SESSION['int_pid'];
    //date_default_timezone_set('India/Kolkata');
    $date = date('Y-m-d');
    $sql = "INSERT INTO claims (clid,pid,st_date,status,amt_issued) 
            VALUES ('$clid','$int_pid','$date','Claim Intimation','0')";
    $ins_claim = $mysqli->query($sql);
    if ( $ins_claim ) 
    {	
    	$redirected_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/../usr_home.php';
    	//echo $redirected_url;
        header('Location: ' . $redirected_url);
    }
    else
    {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }
    $php_self='http://' . $_SERVER['PHP_SELF'];
?>
<meta http-equiv="refresh" content="3; url=http://<?php echo $php_self ?> ">
</head>