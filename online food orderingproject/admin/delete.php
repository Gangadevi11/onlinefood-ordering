<?php
session_start();
require("connection.php");

$id = $_REQUEST["id"];

$res = $con->query("DELETE FROM forms WHERE id='$id'");

$count = mysqli_affected_rows($con);


if ($count > 0) {
    echo ("<script>
    alert('Record deleted successfully');
    window.location.href='table.php';
    </script>");
} else {
    echo ("<script>
    alert('Error record');
    window.location.href='table.php';
    </script>");
}
?>
