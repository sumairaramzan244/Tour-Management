<?php
$servername="localhost";
$username="root";
$password="";
$database="royalmanagementsystem";

$connect=mysqli_connect($servername,$username,$password,$database)
or die("cannot connect to my database".mysqli_connect_error());



// echo"CONNECTED"."<br>";



?>