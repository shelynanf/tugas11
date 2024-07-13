<html>
<head>
    <title>Pilih Departemen Himpunan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="radio"] {
            margin: 10px 0;
        }

        input[type="submit"], input[type="reset"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #0056b3;
        }

        input[type="reset"] {
            background-color: #dc3545;
        }

        input[type="reset"]:hover {
            background-color: #c82333;
        }
</style>
</head>
<body>
    <form action="radioproses.php" method="post" name="input">
        <h2>Pilih Departemen Himpunan</h2>
        <input type="radio" name="hm" value="kader" checked/> kader <br />
        <input type="radio" name="hm" value="akastrat"/> akastrat <br />
        <input type="radio" name="hm" value="jalsos"/> jalsos <br />
        <input type="radio" name="hm" value="iptek"/> iptek <br />
        <input type="radio" name="hm" value="kwu"/> kwu <br />
        <input type="radio" name="hm" value="sosma"/> sosma <br />
        <input type="radio" name="hm" value="mikat"/> mikat <br />
        <input type="radio" name="hm" value="kominfo"/> kominfo <br />
        <input type="submit" name="Pilih" value="Pilih"/>
        <input type="reset" name="reset" value="Reset"/>
    </form>
</body>
</html>