
<?php
require("connection.php");

$a = $_REQUEST["productname"];
$b = $_REQUEST["price"];
$c = $_REQUEST["quantity"];
$d = $_REQUEST["description"];
$file = $_FILES["image"]["name"];


$res = $con->query("INSERT INTO forms (name, price, quantity, description, image) VALUES ('$a', '$b', '$c', '$d', '$file')");


move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $file);

echo("
<script>
alert('Details added successfully');
window.location.href='table.php';
</script>
");
