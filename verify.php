<?php 
    session_start();
    require_once("globals.php");      
    if(!(isset($_SESSION['usr_email']) && $_SESSION['usr_email'] != ''))
    {
        header ("LOCATION:index.php");    //if not logged in, user should be redirected to index.php
    }
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

  

  $sql1 = "SELECT clid from client where email = '" . $_SESSION['usr_email'] . "'";
  $search_cl1 = $mysqli->query($sql1);
  $row1 = mysqli_fetch_array($search_cl1);

  $clid = $row1['clid'];
  $int_pid = $_SESSION['int_pid'];
  
  //for policy details, keep 5 options from the policy_sum_ins in drop down, so that one can be selected

  //for client details
  $sql2 = "SELECT * from client where clid='".$clid."'";
  $search_cl2 = $mysqli->query($sql2);
  $row2 = mysqli_fetch_array($search_cl2);
  $ver_date = $row2['DOB'];       //got dob
  $ver_name = $row2['name'];

  $sql3 = "SELECT * from ph_no where cl_id='".$clid."' LIMIT 1";
  $search_ph3 = $mysqli->query($sql3);
  $row3 = mysqli_fetch_array($search_ph3);
  $ver_mob = $row3['ph_no'];      //got the ph no., had the email
//  echo $ver_mob;
?>


  <div class="container">
    <div class="row ">
      <div class="col-md-7 col-sm-12 well"> 
        <form name="me_form" action="paym_gate.php" onsubmit="return validateForm()" method="post">
          <h2>Check the details</h2>
          <div class="form-group">
            <label for="sel1">Sum Insured:</label>
            <?php
                echo "<input type='text' name='sum' id='pl_me_sum' value='".$_SESSION['int_sum']."' disabled>";
            ?>
            <br/>
            <!--select class="form-control" id="sel1" name="sel1" disabled>
              <option>500000</option>
              <option>750000</option>
              <option>1000000</option>
              <option>1500000</option>
            </select-->
            <br/>
            <label for="dob">DOB:</label>
            <?php
                echo "<input type='date' name='dob' value='".$ver_date."' disabled>";
            ?>
            <!--input type="date" name="dob" disabled-->
            <label for="pl_me_name">  Name:</label>
            <?php
                echo "<input type='text' name='name' id='pl_me_name' value='".$ver_name."' disabled>";
            ?>
            <!--input type="text" name="mob" id="pl_me_mob" disabled-->
            <label for="email">  Email:</label>
            <?php
                echo "<input type='email' name='email' value='".$_SESSION['usr_email']."' disabled>";
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