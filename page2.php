<?php include_once("config.php"); ?>
<?php
 session_start();

 $san= $name=$email=$san1="";
 $san = $_SESSION['id'];
 $san1 = $_POST['action1'];

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
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: rgb(255, 255, 255);">Search</button>
          </form>
          </div>
      </nav>



<div class="centre">
<?php
        
        
        $query="select * from users where id= $san";
        $result=$conn->query($query);
        while($show=$result->fetch_assoc()) {   
            $_SESSION['id']=$show['id'] ;
            $_SESSION['name']=$show['Name'] ;
            $_SESSION['email']=$show['Email'];
            $_SESSION['credituser']=$show['Credit'];
        }
        
    ?>
<form method="POST" class="container" >
    <h1 style="text-align: center;">Your information</h1>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label" style="margin-top: 25px;">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" style="margin-top: 25px;" value="<?php echo $_SESSION['id'] ;?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName" value="<?php echo $_SESSION['name']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" value="<?php echo $_SESSION['email']; ?>">
    </div>
  </div>


</form>

<div class="container">
  <?php
  
  $query="select * from users where id = $san1 ";
  $result=$conn->query($query);
  
  while($show=$result->fetch_assoc()) {   
      $_SESSION['id1']=$show['id'] ;
      $_SESSION['name1']=$show['Name'] ;
      $_SESSION['email1']=$show['Email'];
      $_SESSION['Credit1'] = $show['Credit'];

  }
?>
<form method="POST" action="transation.php" >
<h1 style="text-align: center;">Clint information</h1>
<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="attributename" id="inputName" value="<?php echo $_SESSION['id1'] ?>" alt="Submit">
    </div>
  </div>
    
<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName" value="<?php echo $_SESSION['name1'] ?> " alt="Submit">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" value="<?php echo $_SESSION['email1']  ?>" alt="Submit">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputCridit" class="col-sm-2 col-form-label">Amount</label>
    <div class="col-sm-10">
      <input required type="number" class="form-control" id="inputCredit" name="transferCredit" value="">
    </div>
  </div>
  <button type="submit" name='action1' value="<?php echo $_SESSION['id1'];?>">Transfer Credit</button>
      
</form>

</div>



<style>
.container {
    margin-left: 73px;
    width: fit-content;
  border: 3px solid green;
  padding: 30px;
  margin-top: 98px;
  display: table-cell;
}
.centre{
    margin: auto;
  width: 60%;
  padding: 10px;
  margin-top: 50px;
}


</style>
</body>
</html>