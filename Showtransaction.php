<?php include_once("config.php"); ?>
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
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: rgb(255, 255, 255);">Search</button>
          </form>
          </div>
      </nav>
<div class="overflow-auto" id="#exampleModalLong">
<div class="panel panel-default container">

<div class="panel-heading">
    <h1 style="text-align: center;padding: 50px;">Transaction</h1>
</div>
<form method="post">
<div  class="plain body">

<a class="btn btn-primary" href="Index.php" role="button" style="width:150px; float:middle ;padding: 10px;
    margin: 9px;">Back</a>


 <table class="table">
  
   <thead>
   
      <tr>
        <th>Transaction Id</th>
        <th>Sender Id</th>
        <th>Sender Name</th>
        <th>Receiver ID</th>
        <th>Receiver Name</th>
        <th>Amount</th>
        <th>Date & Time</th>        
      </tr>  
  </thead>

  <tbody>
  <?php
    
    
    $query="select * from transfer";
    $result=$conn->query($query);
    while($show=$result->fetch_assoc()) {   
  ?>

  <tr>

        <td><?php echo $show['transferid']  ?></td>
        <td><?php echo $show['Senderid']  ?></td>
        <td><?php echo $show['SenderName']  ?></td>
        <td><?php echo $show['Receiverid']  ?></td>
        <td><?php echo $show['ReceiverName']  ?></td>
        <td><?php echo $show['CREDIT']  ?></td>
        <td><?php echo $show['Transferdate']  ?></td>
        
        
        
  </tr>
           
<?php }  ?>
</tbody>



</table>

</form> 
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>



