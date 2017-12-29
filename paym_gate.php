<?php 
    session_start();
    require_once("globals.php");      
    if(!(isset($_SESSION['usr_email']) && $_SESSION['usr_email'] != ''))
    {
        header ("LOCATION:index.php");    //if not logged in, user should be redirected to index.php
    }
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");
    require_once($GLOBALS['webroot']."/templates/header.php");		//write for - if not logged in, redirect to index.php
?>
</head>
<body>
  
<?php
  if((isset($_SESSION['usr_email']) && $_SESSION['usr_email'] != ''))
      {
          require_once($GLOBALS['webroot']."/templates/usr_navbar.php");
      }
  else{
      require_once($GLOBALS['webroot']."/templates/navbar.php");  
  }     
  $sum = $_SESSION['int_sum'];
?>

<div class="container">
	<div class="row">
		<center>
			<h2>Payment Gateway</h2>
			<form action="db_handlers/intermediate2.php" method="post">
				<p>Amount: <?php echo $sum ?></p>
				<input type="button" name="btn" value="Make Payment">
				<br/><br/>
				<input type="submit" name="submit" value="Payment Success">
			</form>
		</center>
	</div>
</div>

  <script type="text/javascript" src="assets/js/myjs.js" charset="UTF-8"></script>
</body>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php    
    require_once($GLOBALS['webroot']."/templates/footer.php");
?>