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
  else if((isset($_SESSION['mem_email']) && $_SESSION['mem_email'] != ''))
  {
      require_once($GLOBALS['webroot']."/templates/mem_navbar.php");  
  }
  else
  {
      require_once($GLOBALS['webroot']."/templates/navbar.php");  
  }
?>

<div class="container">
  <h2>About Us</h2>
  <p></p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Organization</a></li>
    <li><a data-toggle="tab" href="#menu1">Vision</a></li>
    <li><a data-toggle="tab" href="#menu2">Mission</a></li>
    <li><a data-toggle="tab" href="#menu3">Core Values</a></li>
    <li><a data-toggle="tab" href="#menu4">Quality Policy</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Organization</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Vision</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Mission</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Core Values</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3>Quality Policy</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
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