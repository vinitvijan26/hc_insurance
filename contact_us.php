<?php 
    session_start();
    require_once("globals.php");      
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");
    require_once($GLOBALS['webroot']."/templates/header.php");
    $_SESSION['curr_page']=$_SERVER['PHP_SELF'];    //for the action of login in 'usr_login_script.php'
?>
<style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
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
<br/>
<div class="container">
  <div class="row well">
    <h2>Contact Us</h2> 
  </div>
</div>
<div class="container">
  <div class="row well">
    <div class="col-md-5 col-sm-12">
      <h3>Mail In</h3>
      <p>The Manager - Customer Care,</p>
      <p>HC Insurance Co. Ltd,</p>
      <p>666, Upper Indiranagar, Bibwewadi,</p> 
      <p>Pune, Maharashtra, INDIA - 411 037</p>
      <br/>
      <h3>Toll free</h3>
      <p>1800-425-2255 / 1800-102-4477</p>
    </div>
    <div class="col-md-7 col-sm-12">
      <!--h3>My Google Maps Demo</h3-->
      <div id="map">hey</div>
      <script type="text/javascript">
        function initMap() {
          var uluru = {lat: 18.4638922, lng: 73.8657832};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZLJbFWWIZGOrL13COI9T_mDxal4etKx4&callback=initMap">
      </script>
    </div>
  </div>
</div>

<?php    

//AIzaSyDZLJbFWWIZGOrL13COI9T_mDxal4etKx4
    require_once($GLOBALS['webroot']."/templates/footer.php");
?>