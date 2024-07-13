<html>
<head>
    <title>silakan Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 8px 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            width: calc(50% - 12px);
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #5cb85c;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #4cae4c;
        }

        input[type="reset"] {
            background-color: #d9534f;
        }

        input[type="reset"]:hover {
            background-color: #c9302c;
        }

    </style>
</head>
<body>
    <form action="loginproses.php" method="post" name="input">
    <h2>silakan login ya</h2>
    Username : <input type="text" name="username"/><bir />
    Password : <input type="password" name="password"/> <br />
    <input type="submit" name="Login" value="Login"/>
    <input type="reset" name="reset" value="Reset"/>
</form>
</body>
</html>