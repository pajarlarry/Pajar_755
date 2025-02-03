<?php
$servername= "localhost";
$username= "root";
$password= "";
$database= "samplelogin";


//create connetion
$conn = new mysqli($servername, $username, $password, $database);


//connection check
if($conn -> conect_error){
    die("Connection failed" . $conn -> connect_error);
}
?>