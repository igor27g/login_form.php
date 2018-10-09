<?php
  
$connection = mysqli_connect('localhost', 'root', '', 'myloginapp');
    if(!$connection) {
        die("Database connection is failed");
    } 
?>