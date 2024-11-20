
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-image: url("admin/images/pexels-photo-1267320.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }


        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            height: 100vh;
            padding: 20px;
            box-sizing: border-box;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            background-color: #444;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #555;
        }

        .topbar {
            width: calc(100% - 250px);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 15px;
            box-sizing: border-box;
            position: absolute;
            right: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

    
        .search-bar input[type="text"] {
            padding: 8px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .search-bar input[type="submit"] {
            padding: 8px 12px;
            border: none;
            background-color: #333;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-bar input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="view.php">View Product</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>

    
    <div class="topbar">
        <h1>Foods</h1>
        <div class="search-bar">
            
        <form method="POST" action="search.php">
    <input type="text" id="products" name="search" placeholder="Search">
    <button type="submit">Search</button>
</form>




</div>
</div>


</body>
</html>