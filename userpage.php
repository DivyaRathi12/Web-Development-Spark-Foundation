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
          <form method="post" action="clintpage.php">
          <h1 style="text-align: center;padding: 50px;">Select User</h1>
            <div class="container">
 <table class="table">
  
   <thead>
   
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Credit</th>
      </tr>  
  </thead>

  <tbody>
  <?php
        
    $query="select * from users";
    $result=$conn->query($query);
    while($show=$result->fetch_assoc()) {   
  ?>

  <tr>

        <td><?php echo $show['id']  ?></td>
        <td><?php echo $show['Name']  ?></td>
        <td><?php echo $show['Email']  ?></td>
        <td><?php echo $show['Credit']  ?></td>
        <td><button type="submit" name='action' value="<?php echo $show['id'];?>">Select</button>
        </td>
        
  </tr>
  
           
<?php } ?>

</tbody>



</table>
            </div>
</form> 

        
</body>
</html>