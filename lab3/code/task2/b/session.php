<?php
    if (false === isset($_POST["surname"], $_POST["name"], $_POST["age"])){
        header('Location: /');
        exit();
    }
    session_start();

    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["age"] = $_POST["age"];

    echo "Your surname is ", $_SESSION["surname"],"<br>";
    echo "Your name is ", $_SESSION["name"],"<br>";
    echo "Your age is ", $_SESSION["age"],"<br>";
?>