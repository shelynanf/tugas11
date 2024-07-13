<?php
if(isset($_POST['Login'])){
    $user=$_POST[ 'username'];
    $pass=$_POST[ 'password' ];
    if($user=="admin" && $pass=="rahasia"){
        echo("<h2>Login b1erhasil, selamat</h2>");
    }else {
        echo "<h2> Login Gagal, maaf ulang lagi</h2>";
    }
}
?>