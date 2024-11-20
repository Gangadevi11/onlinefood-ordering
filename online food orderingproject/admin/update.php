<?php
session_start();
require("connection.php");

$id=$_POST["id"];
$a=$_REQUEST["productname"];
$b=$_REQUEST["price"];
$c=$_REQUEST["quantity"];
$d=$_REQUEST["description"];

$file=$_FILES["image"]["name"];
if(empty($_FILES["image"]["name"]))
{
$res=$con->query("update forms set `name`='$a',`price`='$b',`quantity`='$c',
`description`='$d' where id='$id'");

$count=mysqli_affected_rows($con);
}
else{
    $file=$_FILES["image"]["name"];
    $res=$con->query("update forms set `name`='$a',`price`='$b',`quantity`='$c',
    `description`='$d',`image`='$file' where id='$id'");
    move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$file);
}
echo  ("<script>
alert('updated successfully');
window.location.href='table.php';
</script>");
?>