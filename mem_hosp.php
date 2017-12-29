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

  

  $sql1 = "SELECT * from hospital ";
  $search_cl1 = $mysqli->query($sql1);
  
  //$clid = $row1['clid'];

?>

<div class="container">
  <div class="row">
    <h2>Hospital List:</h2>
    <center>
      <div class="table-responsive">
                <table class="table table-hover">
                <thead>
                <tr>            
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address Street</th>
                    <th>Address City</th>
                    <th>Address Pin</th>
                    <th>Is Networked</th>
                    <th>Ph.no.1</th>
                    <th>Ph.no.2</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($row = mysqli_fetch_array($search_cl1))
                {
                    
                        echo '
                        <tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['addr_street'].'</td>
                            <td>'.$row['addr_city'].'</td>
                            <td>'.$row['addr_pin'].'</td>
                            <td>'.$row['is_networked'].'</td>
                            <td>'.$row['phone_no1'].'</td>
                            <td>'.$row['phone_no2'].'</td>
                            <td>'.$row['email'].'</td>
                            
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




