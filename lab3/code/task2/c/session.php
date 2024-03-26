<?php
    if (false === isset($_POST["name"], $_POST["age"],$_POST["salary"],$_POST["animal"])){
        header('Location: /');
        exit();
    }
    session_start();

    $_SESSION["name"] = $_POST["name"];
    $_SESSION["age"] = $_POST["age"];
    $_SESSION["salary"] = $_POST["salary"];
    $_SESSION["animal"] = $_POST["animal"];

    foreach ($_SESSION as $key => $value){
        echo $key, " - ", $value, "<br>";
    }
?>