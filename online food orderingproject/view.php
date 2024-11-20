
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .course-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }
        .course {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .course img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .course h6 {
            font-size: 22px;
            margin-bottom: 10px;
        }
        .course .price {
            color: green;
            font-size: 20px;
            font-weight: bold;
        }
        .clearfix {
            clear: both;
        }
    </style>
</head>
<body>

<div class="course-container">

<?php
require("connection.php"); 

$res = $con->query("SELECT * FROM forms");
$count = $res->num_rows;

if ($count > 0) {
    // Loop through each course
    while ($row = $res->fetch_assoc()) {
?>
    <div class="course">
        <h6><?php echo $row["name"]; ?></h6>
        <p class="price">$<?php echo $row["price"]; ?></p>
        <p>Available quantity: <?php echo $row["quantity"]; ?></p>
        <p><?php echo $row["description"]; ?></p>
        

        <img src="<?php echo 'admin/images/' . $row['image']; ?>" alt="<?php echo $row['name']; ?>" height="100%" width="100%">
        <br><br>
        
        <div class="clearfix"></div>
    </div>
<?php 
    }
}
?>

</div>
</body>
</html>
