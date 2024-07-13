<?php
if(isset($_POST['Pilih'])){
    echo "Lagu Black Pink favori Saudara adalah : <br>";
    if(isset($_POST['lagu1'])){
        echo "+ ". $_POST['lagu1'] . "<br>";
    }
    if(isset($_POST['lagu2'])){
        echo "+ ". $_POST['lagu2'] . "<br>";
    }
    if(isset($_POST['lagu3'])){
        echo "+ ". $_POST['lagu3'] . "<br>";
    }
    if(isset($_POST['lagu4'])){
        echo "+ ". $_POST['lagu4'] . "<br>";
    }
}
