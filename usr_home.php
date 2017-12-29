<?php 
    session_start();
    if(!(isset($_SESSION['usr_email']) && $_SESSION['usr_email'] != ''))
    {
        header ("LOCATION:index.php");    //if not logged in, user should be redirected to index.php
    }
    require_once("globals.php");      
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");
    require_once($GLOBALS['webroot']."/templates/header.php");
?>
</head>
<body>
  
<?php
    require_once($GLOBALS['webroot']."/templates/usr_navbar.php");   
?>


  <section class="jumbotron">
    <div class="container" >
      <div class="col-md-6" >
        <!--Some image -->
        <img src="assets/img/family.jpg" style="height: 400px;
        width: 100%">
      </div>
      <div class="col-md-6">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1>HC Insurance</h1>
        <p class="center">We provide better...</p>
        <p class="center">...some tagline</p>
        <br>
        <br>
      </div>
    </div>
  </section>
  
  <h2 align="center" class="">Choose from the Leaders</h2>
  <div class="container ">
    <center>
      <div class="col-md-4">
        <img src="assets/img/index_awards1.png" align="center" data-toggle="modal" data-target="#myModal2" style="width:50%" alt="index_awards1.png" class="img-medium w3-circle w3-hover-opacity"/>
        <div id="myModal2" class="modal fade" role="dialog" style="display: none;">
          <div class="modal-dialog">

            <!--Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                      <!--h4 class="modal-title">Modal Header</h4-->
                  </div>
              <div class="modal-body">
                <div class="w3-teal">
                <br><br>
                <img src="assets/img/index_awards1.png" align="center" style="width:35%" class="w3-circle"><br><br>
                <p class="w3-xlarge">Award</p>
                </div>
                <br>
                  <p align="justify">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>
                <br>
              </div>
              <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="assets/img/index_awards1.png" align="center" style="width:50%" alt="index_awards1.png" class="img-medium w3-circle w3-hover-opacity"/>
      </div>
      <div class="col-md-4">
        <img src="assets/img/index_awards1.png" align="center" style="width:50%" alt="index_awards1.png" class="img-medium w3-circle w3-hover-opacity"/>
      </div>
    </center>
  </div>
  <br>
  <hr/>

  <div class="jumbotron j2">
    <div class="container">
      <div class="col-md-4" align="center">
        <h3 align="center">For Myself</h3>
        <ul class="ul1">
          <li>For Individuals aged between 18 to 65 years.</li>
          <li>No cap on room rent and treatment cost</li>
          <li>Hospital cash benefits</li>
          <li>Cover for over 400 day care procedures</li>
        </ul>
        <a href="pl_me.php">Know more</a>
      </div>
      <div class="col-md-4"" align="center">
        <h3 align="center">For My Family</h3>
        <ul class="ul1">
          <li>Affordable Health Insurance cover on a floater basis</li>
          <li>Covers Dental / ophthalmic treatments on OPD basis</li>
          <li>Upto 100% Increase in Sum Insured upon a claim free renewal</li>
          <li>Benefits include Air ambulance facility and availing Second medical opinion</li>
        </ul>
        <a href="#">Know more</a>
      </div>
      <div class="col-md-4"" align="center">
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
  <hr/>
  

<?php    
    require_once($GLOBALS['webroot']."/templates/footer.php");
?>