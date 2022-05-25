<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "my_edoardomirandola01";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:');
        }
?>       