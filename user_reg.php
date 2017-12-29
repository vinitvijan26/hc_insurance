<?php
    require_once("globals.php");      
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");
    require_once($GLOBALS['webroot']."/templates/header.php");
    require_once($GLOBALS['webroot']."/templates/navbar.php");   
?>


<div class="container" style="margin-top:30px">
    <h1 class="well">Register With Us</h1>
  <div class="col-lg-12 well">
  <div class="row">
        <form action="db_handlers/usr_reg_script.php" onsubmit="return validateForm()" method="post" role="form">
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
  </div>
</div>

<br/>
<br/>
<br/>

<script type="text/javascript" src="assets/js/myjs.js" charset="UTF-8"></script>
<!--script type="text/javascript">
  $(function () {
        $("#reg_btn").click(function () {
            var password = $("#reg_pwd").val();
            var confirmPassword = $("#reg_cpwd").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script-->
<?php    
    require_once($GLOBALS['webroot']."/templates/footer.php");
?>