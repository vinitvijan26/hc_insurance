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

  

  $sql1 = "SELECT client.name as cname, hospital.name as hname, cl_hosp_bill.bid, cl_hosp_bill.admit_date, cl_hosp_bill.issue, cl_hosp_bill.discharge_date, cl_hosp_bill.bill_amt from client inner join cl_hosp_bill on cid=clid inner join hospital on h_id=id ";
  $search_cl1 = $mysqli->query($sql1);
  
  //$clid = $row1['clid'];

?>

<div class="container">
  <div class="row">
    <center>
      <div class="table-responsive">
                <table class="table table-hover">
                <thead>
                <tr>            
                    <th>Bill Id</th>
                    <th>Client</th>
                    <th>Hospital</th>
                    <th>Admit date</th>
                    <th>Discharge date</th>
                    <th>Issue</th>
                    <th>Bill Amount</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($row = mysqli_fetch_array($search_cl1))
                {
                    
                        echo '
                        <tr>
                            <td>'.$row['bid'].'</td>
                            <td>'.$row['cname'].'</td>
                            <td>'.$row['hname'].'</td>
                            <td>'.$row['admit_date'].'</td>
                            <td>'.$row['discharge_date'].'</td>
                            <td>'.$row['issue'].'</td>
                            <td>'.$row['bill_amt'].'</td>
                            
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




