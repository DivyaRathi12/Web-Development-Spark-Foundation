<?php include_once("config.php"); ?>
<?php
 session_start();
 $Credittransfer=$clintid=$Credituser=$userid=$username= $clintname= $clintcredit="";
if (empty($_POST['transferCredit'])==false){
   $Credittransfer = $_POST['transferCredit'];
   $clintid = $_POST['action1'];
   $usercredit=$_SESSION['credituser'];
   $userid= $_SESSION['id'];
   $username=  $_SESSION['name'];

   $query="select * from users where id = $clintid ";
        $result=$conn->query($query);
        
        while($show=$result->fetch_assoc()) {   
            
            $clintname=$show['Name'] ;
            $clintcredit = $show['Credit'];
        
        }
        
        $sql = "INSERT INTO `transfer`(`Senderid`, `SenderName`, `Receiverid`, `ReceiverName`, `CREDIT`) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt)
        {
            mysqli_stmt_bind_param($stmt, "sssss", $param_Senderid, $param_SenderName, $param_Receiverid, $param_ReceiverName, $param_CREDIT);
      
            // Set these parameters
            $param_Senderid = $userid;
            $param_SenderName = $username;
            $param_Receiverid = $clintid;
            $param_ReceiverName = $clintname;
            $param_CREDIT = $Credittransfer;
            
      
            // Try to execute the query
            if (mysqli_stmt_execute($stmt))
            {
            
            }
            else{
                echo "Something went wrong... cannot redirect!";
            }
            mysqli_stmt_close($stmt); 
        }
        
        
        $t1=$t2="";
        $t1 = $clintcredit + $Credittransfer;
        $t2 = $usercredit - $Credittransfer;
        


        $sql="UPDATE `users` SET `Credit`= $t1  WHERE id = $clintid";
        $stmt = mysqli_prepare($conn, $sql);
        if (mysqli_stmt_execute($stmt))
        {
        
        }

        $sql="UPDATE `users` SET `Credit`= $t2  WHERE id = $userid";
        $stmt = mysqli_prepare($conn, $sql);
        if (mysqli_stmt_execute($stmt))
        {
        
        }

 ?>     



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="#" style="color: rgb(255, 255, 255);">Credit Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="Index.php" style="color: rgb(255, 255, 255);">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: rgb(255, 255, 255);">Link</a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: rgb(0, 0, 0);">Search</button>
          </form>
          </div>
      </nav>


    <div class="container">
        
        <h1>Thank You </h1>
       <h3 >Your Credit is transfered sucessfully</h3>";
       <?php
         
       
      ?>
      <?php    
      if($i = true){
        set_time_limit(5);
         sleep(4);
          echo '<div>
                <a class="btn btn-primary" href="Index.php" role="button" style="width: 150px;
           float: middle;
           padding: 10px;
           margin: 9px;
           margin-left: 0px;
           margin-top: 19px;">Back to Homepage</a></div>';
         }


        ?>   
    </div>
        

    <?php
    }
    else{
      echo "<h1>Something went wrong</h1>";
    } 
    mysqli_close($conn);
    ?>
    

    <style>
.container {
    text-align: center;
    width: fit-content;
  border: 3px solid green;
  padding: 30px;
  margin-top: 200px;
    width: 50%;
    margin-left: 330px;
}

    </style>
    
</body>

</html>
<!-- color: black;
           border: 3px solid black;
           width: max-content;
           margin-left: 622px;
           background: blanchedalmond;" -->