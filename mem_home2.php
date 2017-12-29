<?php 
    session_start();
    if(!(isset($_SESSION['mem_email']) && $_SESSION['mem_email'] != ''))
    {
        header ("LOCATION:index.php");    //if not logged in, user should be redirected to index.php
    }
    require_once("globals.php");      
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");
    require_once($GLOBALS['webroot']."/templates/header.php");
    $_SESSION['curr_page']=$_SERVER['PHP_SELF'];    //for the action of login in 'usr_login_script.php'
?>
</head>
<body>
  
<?php
    require_once($GLOBALS['webroot']."/templates/mem_navbar.php");   

  

  $sql1 = "SELECT * from client ";
  $search_cl1 = $mysqli->query($sql1);
  
  //$clid = $row1['clid'];

?>

<div class="container">
  
  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="mem_home.php">Client List</a></li>
    <li class="active"><a data-toggle="tab" href="#menu1">Add Client</a></li>
  </ul>
  <div class="tab-content">
    <div id="menu1" class="tab-pane fade">
      <!--div class="container"-->
    </div>
  </div>
            <h2>Add Client:</h2>
              <form method="post" action="db_handlers/cl_reg_script.php">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label for="reg_name">Name</label>
                      <input type="text" placeholder="Name"  name="reg_name" id="reg_name" class="form-control" required>
                    </div>
                    <div class="col-sm-6 form-group">
                      <label for="reg_email">Email</label>
                      <input type="email" name="reg_email" id="reg_email" placeholder="Email-Id" class="form-control" required>
                    </div>  
                  </div>   
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label for="mob_no1">Mobile No. 1</label>
                      <input type="text" name="mob_no1" id="mob_no1" placeholder="Mobile No. 1" class="form-control" required>
                    </div> 
                    <div class="col-sm-6 form-group">
                      <label for="mob_no2">Mobile No. 2</label>
                      <input type="text" name="mob_no2" id="mob_no2" placeholder="Mobile No. 2" class="form-control" required>
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label for="reg_pwd">Password</label>
                      <input type="password" name="reg_pwd" id="reg_pwd" placeholder="Decide your password...." class="form-control" required>
                    </div>     
                    <div class="col-sm-6 form-group">
                      <label for="reg_cpwd">Confirm Password</label>
                      <input type="password" name="reg_cpwd" id="reg_cpwd" placeholder="Confirm your password...." class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label for="reg_dob">Date of Birth</label>
                      <input type="date" name="reg_dob" id="reg_dob" placeholder="DOB" class="form-control" required>
                    </div>     
                    <div class="col-sm-6 form-group">
                      <label for="reg_stat">Status</label>
                      <select class="form-control" id="reg_stat" name="reg_stat">
                        <option>Employed Full-time</option>
                        <option>Employed Part-time</option>
                        <option>Unemployed</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label for="reg_addr">Address</label>
                      <input type="text" name="addr_str" id="addr_str" placeholder="Address Street" class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <input type="text" name="addr_city" id="city" placeholder="Address City" class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <input type="text" name="addr_pin" id="addr_pin" placeholder="Address Pin" class="form-control" required>
                    </div>
                  </div>
                  <button type="submit" id="reg_btn" class="btn btn-default">Submit</button> 
                </div>

              </form>
          
</div>









