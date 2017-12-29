<?php 
    session_start();
    require_once("globals.php");      
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");
    require_once($GLOBALS['webroot']."/templates/header.php");
    $_SESSION['curr_page']=$_SERVER['PHP_SELF'];    //for the action of login in 'usr_login_script.php'
?>
<script type="text/javascript">
  function validateForm()
  {
  var a = document.getElementById('pl_me_mob').value;
  if(a=="")
  {
  alert("please Enter the Contact Number");
  document.getElementById('pl_me_mob').focus();
  return false;
  }
  if(isNaN(a))
  {
  alert("Enter the valid Mobile Number(Like : 9566137117)");
  document.getElementById('pl_me_mob').focus();
  return false;
  }
  if((a.length < 10) || (a.length > 10))
  {
  alert(" Your Mobile Number must be 1 to 10 Integers");
  document.getElementById('pl_me_mob').select();
  return false;
  }
  }
</script>
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


  <div class="container">
    <div class="row ">
      <div class="col-md-7 col-sm-12 well"> 
        <form name="me_form" action="paym_gate.php" onsubmit="return validateForm()" method="post">
          <h2>Check the details</h2>
          <div class="form-group">
            <label for="sel1">Sum Insured (select one):</label>
            <select class="form-control" id="sel1" name="sel1" disabled>
              <option>500000</option>
              <option>750000</option>
              <option>1000000</option>
              <option>1500000</option>
            </select>
            <br/>
            <label for="dob">DOB:</label>
            <input type="date" name="dob" disabled>
            <label for="pl_me_mob">  Mobile No.:</label>
            <input type="text" name="mob" id="pl_me_mob" disabled>
            <label for="email">  Email:</label>
            <?php
              if((isset($_SESSION['usr_email']) && $_SESSION['usr_email'] != '')){
                echo "<input type='email' name='email' value='".$_SESSION['usr_email']."' disabled>";
              }else{
                echo "<input type='email' name='email' disabled>";
              }
            ?>
          </div>
          <div class="form-group">
            <!--label for="submit">  Proceed to buy:</label-->
            <input type="submit" name="submit" value="Proceed to buy">
          </div>
        </form>
      </div>
      <div class="col-md-5 col-sm-12 well">
          <h2>Key Features</h2>
          <ul class="">
            <li>No cap on room rent and treatment cost</li>
            <li>Covers medical expenses incurred on Bariatric surgical procedures and its complications</li>
            <li>Cost of health check up for every block of 3 claim free years</li>
            <li>Cover for maternity (normal and caesarean delivery) and New born baby</li>
            <li>Automatic restoration of entire Sum insured by 100%.</li>
            <li>Upto 100% Increase in Sum Insured upon a claim free renewal</li>
            <li>Dental / ophthalmic cover on OPD basis</li>
            <li>Personal accident cover against Death and Permanent total disablement (equal to the Health Insurance cover) at no additional cost.</li>
          </ul>
      </div>
      
    </div>
  </div>
  <br>
  <hr/>

  <div class="jumbotron j2">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12" align="center">
          <h3 align="center">For Myself</h3>
          <ul class="ul1">
            <li>For Individuals aged between 18 to 65 years.</li>
            <li>No cap on room rent and treatment cost</li>
            <li>Hospital cash benefits</li>
            <li>Cover for over 400 day care procedures</li>
          </ul>
          <a href="#">Know more</a>
        </div>
        <div class="col-md-4 col-sm-12" align="center">
          <h3 align="center">For My Family</h3>
          <ul class="ul1">
            <li>Affordable Health Insurance cover on a floater basis</li>
            <li>Covers Dental / ophthalmic treatments on OPD basis</li>
            <li>Upto 100% Increase in Sum Insured upon a claim free renewal</li>
            <li>Benefits include Air ambulance facility and availing Second medical opinion</li>
          </ul>
          <a href="#">Know more</a>
        </div>
        <div class="col-md-4 col-sm-12" align="center">
          <h3 align="center">For Parents</h3>
          <ul class="ul1">
            <li>For Senior citizens aged between 60 to 75 years</li>
            <li>No pre-insurance medical test required</li>
            <li>Covers pre-existing diseases from the second year onwards</li>
            <li>Guaranteed lifetime renewals</li>
          </ul>
          <a href="#">Know more</a>
        </div>
      </div>
    </div>
  </div>
  <hr/>
  
   <script type="text/javascript" src="assets/js/myjs.js" charset="UTF-8"></script>
   
<?php    
    require_once($GLOBALS['webroot']."/templates/footer.php");
?>