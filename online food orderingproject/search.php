
<?php
require('connection.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Search Results</title>
    <style>
    
    .course {
    border: 1px solid #ddd;
    padding: 15px;
    margin-bottom: 15px;
    border-radius: 5px;
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
}

.course h6 {
    font-size: 1.2em;
    color: #333;
    margin-bottom: 10px;
}

.course .price {
    color: #27ae60;
    font-weight: bold;
}

.course img {
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
    width: 100px;
    height: 100px;
}

.clearfix::after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>

<?php
if (isset($_POST['search'])) { 
  $search = $_POST['search'];
  $res = $con->query("SELECT * FROM forms WHERE name LIKE '%$search%'");

  if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
?>
  <center>  <div class="course">
        <h6><?php echo $row["name"]; ?></h6>
        <p class="price">$<?php echo $row["price"]; ?></p>
        <p>Available quantity: <?php echo $row["quantity"]; ?></p>
        <p><?php echo $row["description"]; ?></p>
        <img src="<?php echo 'admin/images/' . $row['image']; ?>" alt="<?php echo $row['name']; ?>">
        <br><br>
        <div class="clearfix"></div></center>
    </div>
<?php 
    }
  } else {
    echo "No search item available: " . htmlspecialchars($search);
  }
} else {

    echo "Please enter a search term.";
}
?>

</body>
</html>
