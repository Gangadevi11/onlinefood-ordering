
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        .tables {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #4CAF50;
            border-radius: 5px;
        }

        a:hover {
            background-color: #4CAF50;
            color: white;
        }

        a:active {
            background-color: #3e8e41;
            color: white;
        }
    </style>
</head>
<body>
    <?php
    require("connection.php");

    $res = $con->query("SELECT * FROM forms");
    $count = $res->num_rows;
    ?>
    <div class="tables">
        <table>
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($count > 0) {
                    $serial = 1;
                    while ($row = $res->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $serial; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["price"]; ?></td>
                            <td><?php echo $row["quantity"]; ?></td>
                            <td><?php echo $row["description"]; ?></td>
                            <td><img src="<?php echo 'images/' . $row['image']; ?>"height="100px" width="100px"></td>
                            <td>
                                <a href="edit.php?edit=<?php echo $row['id']; ?>">Edit</a><br><br>
                                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php
                        $serial++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
