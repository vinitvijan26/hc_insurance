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
    //$sql2 = "SELECT count(id) from policy";   later
      
    $sql = new SplFixedArray(5);
    $search_pol = new SplFixedArray(5);
    $row = new SplFixedArray(5);
    $arrlength = count($sql);

    for($x = 0; $x < $arrlength; $x++) {
      $sql[$x] = "SELECT * from policy where p_id='".($x+1)."'";
      $search_pol[$x] = $mysqli->query($sql[$x]);
      $row[$x] = mysqli_fetch_array($search_pol[$x]);
    }
?>
<div class="container">   <!--TODO: make this dynamic-->
  <center>
    <div class="row">
      <div class="col-md-3 col-sm-12 well">
        <!--h3><?php echo $row[1]['name'];?></h3-->
        <form method="post" action="intermediate.php">
          <input type='hidden' name='int_pid' value='1'>
          <input type='hidden' name='int_sum' value='<?php echo $row[1]['sum_insured']; ?>'>
          <?php
            echo "<h3>".$row[1]['name']."</h3>
                  <p>Sum Insured: ".$row[1]['sum_insured']."</p>
                  <p>Type: ".$row[1]['type']."</p>
                  <p>Premium: ".$row[1]['premium']."</p>
                  ";
          ?><br/>
          <input type='submit' name='submit' value='Proceed to buy'>
          <!--input type="submit" name="submit" value="Proceed to buy"-->
        </form>
      </div><div class="col-md-1 col-sm-12 ">
      </div>
      <div class="col-md-3 col-sm-12 well">
        <form method="post" action="intermediate.php">
          <input type='hidden' name='int_pid' value='2'>
          <input type='hidden' name='int_sum' value='<?php echo $row[2]['sum_insured']; ?>'>
          <?php
            echo "<h3>".$row[2]['name']."</h3>
                  <p>Sum Insured: ".$row[2]['sum_insured']."</p>
                  <p>Type: ".$row[2]['type']."</p>
                  <p>Premium: ".$row[2]['premium']."</p>
                  ";
          ?><br/>
          <input type='submit' name='submit' value='Proceed to buy'>
          <!--input type="submit" name="submit" value="Proceed to buy"-->
        </form>
      </div><div class="col-md-1 col-sm-12 ">
      </div>
      <div class="col-md-3 col-sm-12 well">
        <form method="post" action="intermediate.php">
          <input type='hidden' name='int_pid' value='3'>
          <input type='hidden' name='int_sum' value='<?php echo $row[3]['sum_insured']; ?>'>
          <?php
            echo "<h3>".$row[3]['name']."</h3>
                  <p>Sum Insured: ".$row[3]['sum_insured']."</p>
                  <p>Type: ".$row[3]['type']."</p>
                  <p>Premium: ".$row[3]['premium']."</p>
                  ";
          ?><br/>
          <input type='submit' name='submit' value='Proceed to buy'>
          <!--input type="submit" name="submit" value="Proceed to buy"-->
        </form>
      </div><div class="col-md-1 col-sm-12 ">
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 col-sm-12 ">
      </div>
      <div class="col-md-3 col-sm-12 well">
        <form method="post" action="intermediate.php">
          <input type='hidden' name='int_pid' value='4'>
          <input type='hidden' name='int_sum' value='<?php echo $row[4]['sum_insured']; ?>'>
          <?php
            echo "<h3>".$row[4]['name']."</h3>
                  <p>Sum Insured: ".$row[4]['sum_insured']."</p>
                  <p>Type: ".$row[4]['type']."</p>
                  <p>Premium: ".$row[4]['premium']."</p>
                  ";
          ?><br/>
          <input type='submit' name='submit' value='Proceed to buy'>
          <!--input type="submit" name="submit" value="Proceed to buy"-->
        </form>
      </div>
      <div class="col-md-1 col-sm-12 ">
      </div>
      <div class="col-md-3 col-sm-12 well">
        <form method="post" action="intermediate.php">
          <input type='hidden' name='int_sum' value='<?php echo $row[0]['sum_insured']; ?>'>
          <input type='hidden' name='int_pid' value='5'>
          <?php
            echo "<h3>".$row[0]['name']."</h3>
                  <p>Sum Insured: ".$row[0]['sum_insured']."</p>
                  <p>Type: ".$row[0]['type']."</p>
                  <p>Premium: ".$row[0]['premium']."</p>
                  ";
          ?><br/>
          <input type='submit' name='submit' value='Proceed to buy'>
          <!--input type="submit" name="submit" value="Proceed to buy"-->
        </form>
      </div>
      <div class="col-md-3 col-sm-12 ">

      </div>
    </div>
  </center>
</div>


<?php    
    require_once($GLOBALS['webroot']."/templates/footer.php");
?>