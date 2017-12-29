<?php 
    session_start();
    if(!(isset($_SESSION['mem_email']) && $_SESSION['mem_email'] != ''))
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
    require_once($GLOBALS['webroot']."/templates/mem_navbar.php");   

  

  $sql1 = "SELECT * from client ";
  $search_cl1 = $mysqli->query($sql1);
  
  //$clid = $row1['clid'];

?>

<div class="container">
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Client List</a></li>
    <li><a data-toggle="tab" href="mem_home2.php">Add Client</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="container">
        <div class="row">
          <center>
            <h2>Client List:</h2>
            <div class="table-responsive">
                      <table class="table table-hover">
                      <thead>
                      <tr>            
                          <th>Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>D.O.B.</th>
                          <th>Status</th>
                          <th>Address Street</th>
                          <th>Address City</th>
                          <th>Address Pin</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                      while($row = mysqli_fetch_array($search_cl1))
                      {
                          
                              echo '
                              <tr>
                                  <td>'.$row['clid'].'</td>
                                  <td>'.$row['name'].'</td>
                                  <td>'.$row['email'].'</td>
                                  <td>'.$row['DOB'].'</td>
                                  <td>'.$row['status'].'</td>
                                  <td>'.$row['addr_street'].'</td>
                                  <td>'.$row['addr_city'].'</td>
                                  <td>'.$row['addr_pin'].'</td>
                              </tr>
                              ';
                          
                      }
                      ?>        
                      </tbody>   
                      </table>  
                  </div>


          </center>
        </div>
      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="container">
        <div class="row">
          <center>
            <h2>Add Client:</h2>
              <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


              </form>
          </center>
        </div>
      </div>


    </div>
    
  </div>
</div>









