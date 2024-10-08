<?php
    $id="";
    $pass="";
    $gender="";
    $name="";
    $hobby="";
    if (isset($_GET["id"]))
        $id = $_GET["id"];
    if(isset($_GET["ps"]))
        $pass = $_GET["ps"];
    if(isset($_GET["gender"]))
        $pass = $_GET["gender"];
    if(isset($_GET["hobby"]))
        $pass = $_GET["hobby"];


    echo "ID: $id <br>";
    echo "PASS: $pass <br>";
    echo "성별: $gender <br>";
    echo "취미: $hobby <br>";


    if(isset($_GET["hobby"])) {
        $hobby = $_GET["hobby"];
        for ($i = 0; $i < count($hobby);$i++) {
            echo "$hobby[$i]";
        }
    }
?>