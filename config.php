<?php
/*
This file contains database configuration assuming you are running mysql using user "root" ; password "" 
; database name "Credit Management".
make sure that mysql is runing on port no "3307"
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'Credit Management');
define('DB_port', '3307');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_port);

//Check the connection
if($conn == true){
   // echo "Connection Establish";
}
else{
    dir('Error: Cannot connect');
}

?>