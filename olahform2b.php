<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    
    echo '<p>Nama Anda : <b>' . $nama . '</b></p>
            <p>Email Anda : <b>' . $email . '</b></p>
            <p>Pesan Anda : <b>' . $pesan . '</b></p>';
    
}