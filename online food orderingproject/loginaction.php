<?php
require("connection.php");

$a=$_REQUEST["Email"];
$b=$_REQUEST["Password"];

$res=$con->query("select * from login where email='$a' AND password='$b'");
$count=$res->num_rows;
 if($count>0)
 {
  
    header("location:index.php");

 }