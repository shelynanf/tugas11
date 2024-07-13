<!DOCTYPE html>
<html>
<head>
    <title>Pengolahan Form cara #1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 20px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        textarea {
            height: 150px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 4px;
        }
        .result b {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pengolahan Form cara #1</h2>
        <form action="" method="post" name="input">
            <label for="nama">Nama Anda :</label>
            <input type="text" name="nama" id="nama" required><br>
            
            <label for="email">Email Anda :</label>
            <input type="email" name="email" id="email" required><br>
            
            <label for="pesan">Pesan Anda :</label>
            <textarea name="pesan" id="pesan" required></textarea><br>
            
            <input type="submit" name="Input" value="Kirim"/>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $pesan = $_POST['pesan'];
            
            echo '<div class="result">
                        <p>Nama Anda : <b>' . $nama . '</b></p>
                        <p>Email Anda : <b>' . $email . '</b></p>
                        <p>Pesan Anda : <b>' . $pesan . '</b></p>
                    </div>';
            
        }
        ?>
    </div>
</body>
</html>
