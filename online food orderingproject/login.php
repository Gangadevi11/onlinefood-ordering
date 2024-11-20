<html>
    <head>
        <title>Login</title>
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

            .form {
                padding: 40px;
                background-color: #6c757d;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                width: 300px;
            }

            label {
                display: block;
                margin-bottom: 10px;
                font-weight: bold;
                color: white;
            }

            input[type="text"], input[type="password"] {
                width: 100%;
                padding: 8px;
                margin-bottom: 20px;
                border: none;
                border-radius: 4px;
            }

            input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #007bff;
                border: none;
                color: white;
                font-weight: bold;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #0056b3;
            }

            a {
                color: #ffffff;
                text-decoration: none;
            }

            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="form">
            <form action="loginaction.php" method="POST">
            <center> <h3>Login</h3></center>
                <label>Email
                    <input type="text" name="Email" required>
                </label>
                <label>Password
                    <input type="password" name="Password" required>
                </label>
                <input type="submit" value="Sign In">
                <br><br>
                
            </form>
        </div>
    </body>
</html>


