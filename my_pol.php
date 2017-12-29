<?php 
    session_start();
    require_once("globals.php");      
    if(!(isset($_SESSION['usr_email']) && $_SESSION['usr_email'] != ''))
    {
        header ("LOCATION:index.php");    //if not logged in, user should be redirected to index.php
    }
    require_once($GLOBALS['webroot']."/db_handlers/connect.php");
    require_once($GLOBALS['webroot']."/templates/header.php");		//write for - if not logged in, redirect to index.php
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
  $sql1 = "SELECT clid from client where email = '" . $_SESSION['usr_email'] . "'";
  $search_cl1 = $mysqli->query($sql1);
  $row1 = mysqli_fetch_array($search_cl1);

  $clid = $row1['clid'];

  $sql="SELECT * from claims inner join policy on claims.pid = policy.p_id where clid = '" . $clid . "'";
  $search_cl2 = $mysqli->query($sql);

?>

<div class="container">
	<div class="row">
		<center>
			<div class="table-responsive">
                <table class="table table-hover">
                <thead>
                <tr>            
                    <th>Policy Name</th>
                    <th>Sum Insured</th>
                    <th>Start Date</th>
                    <th>Settled Date</th>
                    <th>Agent</th>
                    <th>Status</th>
                    <th>Amount Issued</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($row = mysqli_fetch_array($search_cl2))
                {
                    
                        echo '
                        <tr>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['sum_insured'].'</td>
                            <td>'.$row['st_date'].'</td>
                            <td>'.$row['settled_date'].'</td>
                            <td>'.$row['agent'].'</td>
                            <td>'.$row['status'].'</td>
                            <td>'.$row['amt_issued'].'</td>
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
