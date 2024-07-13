<html>
<head>
    <title>Lagu Black Pink favori Saudara</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
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
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #ff69b4;
        }

        input[type="checkbox"] {
            margin-right: 10px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #ff1493;
        }

    </style>
</head>
<body>
<form action="checkboxproses.php" method="post" name="input">
    <h2>Pilih Lagu Black Pink yang menjadi favorit saudara</h2>
    <input type="checkbox" name="lagu1" value="pink vanom" checked> pink vanom <br>
    <input type="checkbox" name="lagu2" value="ready for love"> ready for love <br>
    <input type="checkbox" name="lagu3" value="hard to love"> hard to love<br>
    <input type="checkbox" name="lagu4" value="typa girl"> typa girl<br>
    <input type="submit" name="Pilih" value="Pilih"/>
    <input type="reset" name="reset" value="Reset"/>
</form>
</body>
</html> 