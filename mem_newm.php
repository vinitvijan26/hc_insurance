<?php 
    session_start();
    if(!(isset($_SESSION['mem_email']) && $_SESSION['mem_email'] != ''))
    {
        header ("LOCATION:index.php");    //if not logged in, user should be redirected to index.php
    }
    require_once("globals.php");      
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");
    require_once($GLOBALS['webroot']."/templates/header.php");
    $_SESSION['curr_page']=$_SERVER['PHP_SELF'];    //for the action of register in 'mem_reg_script.php'
?>
</head>
<body>
  
<?php
    require_once($GLOBALS['webroot']."/templates/mem_navbar.php");   

  

  $sql1 = "SELECT * from hospital ";
  $search_cl1 = $mysqli->query($sql1);
  
  //$clid = $row1['clid'];

?>

<div class="container">
    <div class="row">
        <form action="db_handlers/mem_reg_script.php" onsubmit="return validateForm()" method="post" role="form">
          <div class="col-sm-12">
            <div class="row">
              <h2>Add new member:</h2>
              <div class="col-sm-6 form-group">
                <label for="reg_email">Email</label>
                <input type="email" name="reg_email" id="reg_email" placeholder="Email-Id" class="form-control" required>
              </div>  
            </div>   
            <div class="row">
              
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
            
            
            <button type="submit" id="reg_btn" class="btn btn-default">Submit</button> 
          </div>
        </form> 
    </div>
</div>

<script type="text/javascript" src="assets/js/myjs.js" charset="UTF-8"></script>



