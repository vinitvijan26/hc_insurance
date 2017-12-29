<?php 
    session_start();
    require_once("globals.php");      
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");
    require_once($GLOBALS['webroot']."/templates/header.php");
    $_SESSION['curr_page']=$_SERVER['PHP_SELF'];    //for the action of login in 'usr_login_script.php'
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
?>
<div class="container" style="margin-top:30px">
    <h1 class="well">Work With Us</h1>
  <div class="col-lg-12 well">
  <div class="row">
        <form action="db_handlers/usr_reg_script.php" method="post" role="form">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label for="reg_fname">First Name</label>
                <input type="text" placeholder="First Name"  name="reg_fname" id="freg_name" class="form-control" required>
              </div>
              <div class="col-sm-6 form-group">
                <label for="reg_lname">Last Name</label>
                <input type="text" placeholder="Last Name" name="reg_lname" id="reg_lname" class="form-control" required>
              </div>
            </div>    
            <div class="row">
              <div class="col-sm-6 form-group">
                <label for="reg_email">Email</label>
                <input type="email" name="reg_email" id="reg_email" placeholder="Email-Id" class="form-control" required>
              </div>      
              <div class="col-sm-6 form-group">
                <label for="mob_no">Mobile No.</label>
                <input type="text" name="mob_no" id="mob_no" placeholder="Mobile No." class="form-control" required>
              </div> 
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <label for="sel2">Job Branch</label>
                <select class="form-control" id="sel2" name="sel2">
                  <option>Marketing</option>
                  <option>Marketing</option>
                  <option>Marketing</option>
                  <option>Marketing</option>
                </select>
              </div>      
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <label for="city1">City</label>
                <input type="text" name="city1" id="city1" placeholder="City" class="form-control" required>
              </div>      
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <label for="addr1">Address</label>
                <input type="text" name="addr1" id="addr1" placeholder="Address" class="form-control" >  <!--optional, use php for others - required-->
              </div>      
            </div>
            <!--div class="row">
              <div class="col-sm-6 form-group">
                <label for="file_up1">Attach Resume</label>
              </div>      
            </div-->
            <button type="submit" class="btn btn-default">Submit</button> 
          </div>
        </form> 
        </div>
  </div>
</div>
<div class="container" style="margin-top:30px">
  Advices on process ahead.
</div>
<br/>
<?php    
    require_once($GLOBALS['webroot']."/templates/footer.php");
?>