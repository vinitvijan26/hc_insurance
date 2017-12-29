<?php 
    session_start();
    $int_pid = $_POST['int_pid'];
    $int_sum = $_POST['int_sum'];
    $_SESSION['int_pid'] = $int_pid;
    $_SESSION['int_sum'] = $int_sum;
    
    if((isset($_SESSION['usr_email']) && $_SESSION['usr_email'] != ''))
    {
        header ("LOCATION:verify.php");			//("LOCATION:paym_gate.php");
    }
    require_once("globals.php");      
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");
    require_once($GLOBALS['webroot']."/templates/header.php");
    $for_next_url= dirname($_SERVER['PHP_SELF']) . '/verify.php';		//'/paym_gate.php';
    $_SESSION['curr_page']=$for_next_url;		//for the action of login in 'usr_login_script.php'
?>
</head>
<body>
		<div class="container">
			<div class="col-lg-12 well">
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-4">
						<h3 style="text-align: center">Please Log-in OR Sign-Up</h3>
						<form method="post" action="db_handlers/usr_login_script.php">
		                  <div class="form-group">
		                    <label for="login_email">Email address</label>
		                    <input class="form-control" name="login_email" id="login_email" placeholder="Enter email" type="email" required>
		                  </div>
		                  <div class="form-group">
		                    <label for="login_pwd">Password</label>
		                    <input class="form-control" id="login_pwd" name="login_pwd" placeholder="Password" type="password" required>
		                  </div>
		                  <p class="text-right"><a href="#">Forgot password?</a></p>
		                  <div class="col-xs-6 col-sm-6 col-md-6">
		                       <center>
		                       	<input type="submit" name="SUBMIT_MESSAGE" value="LOG-IN" class="btn btn-lg btn-success btn-block">
		                       </center>
		                  </div>
		                </form>
		                <br/>
		                <br/>
		                <br/>
		                <h2 style="text-align: center;">OR</h2>
						<br/>
						<a type="button" class="btn btn-default btn-block" href="user_reg.php">Sign Up</a>
					</div>
					<div class="col-sm-4">
					</div>

				</div>
			</div>
		</div>

		
	</body>
</html>