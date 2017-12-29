  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <img  href="index.php" id="nav_img" src="assets/img/condition_zero.ico" width=32px class="img-rounded">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">HC Insurance</a>

      </div>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="policy.php">Plans</a></li>
        <!--li><a href="#">Employee Benefits</a></li-->
        <li><a href="contact_us.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
        <li><a href="emp_opp.php">Employment Opportunities</a></li>
        <li><a href="about_us.php">About Us</a></li>
        <li><a href="user_reg.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in" ></span> Login
          </a>
          <ul class="dropdown-menu">
            <li><a href="#myModal1" data-toggle="modal" data-target="#myModal1">User Login</a></li>
            <li><a href="#myModal2" data-toggle="modal" data-target="#myModal2">Member Login</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </nav>
  
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">User Log-in</h4>
              </div>
              <div class="modal-body">
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
                       <input type="submit" name="SUBMIT_MESSAGE" value="LOG-IN" class="btn btn-lg btn-success btn-block">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <!--<a href="#" data-dismiss="modal" class="btn">Close</a>-->
                  
                <!--<a href="#" class="btn btn-primary">Log-in</a>-->
              </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Member Log-in</h4>
              </div>
              <div class="modal-body">
                <form method="post" action="db_handlers/mem_login_script.php">
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
                       <input type="submit" name="SUBMIT_MESSAGE" value="LOG-IN" class="btn btn-lg btn-success btn-block">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <!--<a href="#" data-dismiss="modal" class="btn">Close</a>-->
                  
                <!--<a href="#" class="btn btn-primary">Log-in</a>-->
              </div>
      </div>
    </div>
  </div>