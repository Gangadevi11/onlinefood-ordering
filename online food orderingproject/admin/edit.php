
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .a {
            padding: 40px;
            background-color: #6c757d;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 15px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<?php 
require("connection.php");

$id = $_REQUEST["edit"];
$res = $con->query("SELECT * FROM forms WHERE id = $id");

$count = $res->num_rows;

if ($count > 0) {
    $row = $res->fetch_assoc();
}
?>

<div class="a">
    <h4>Registration Form</h4>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
        
        <div class="form-group">
            <label for="product-name">Product Name:</label>
            <input type="text" id="product-name" name="productname" value="<?php echo $row["name"];?>" required>
        </div>
        
        <div class="form-group">
            <label for="price">Price ($):</label>
            <input type="number" id="price" name="price" min="0" step="0.01" value="<?php echo $row["price"];?>" required>
        </div>
        
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="<?php echo $row["quantity"];?>" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required><?php echo $row["description"];?></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image">
            <img src="<?php echo 'images/' . $row['image']; ?>" height="100px" width="100px" alt="Product Image">
        </div>

        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>
