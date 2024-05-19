<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset = "UTF = 8">
    <title>lab5</title>
</head>

<body>
<?php
    $addDataQuery = 'INSERT INTO ad (email, title, description, category) VALUES("email.com", "smth", "desc", "info")';
    $selectAllFromAD = 'SELECT * FROM ad ORDER BY created DESC';
    $mySQL = new mysqli('db','root','helloworld','web');
    if(mysqli_connect_errno()){
        echo "Connect to server MySql unavailable. Code error: " . mysqli_connect_error();
    }

    $addDataQuery = "INSERT INTO ad (email, title, description, category) VALUES('new@gmail3.com',' smth3', 'description', 'car')";
    $mySQL->query($addDataQuery);

    $allDataFromDB = $mySQL->query($selectAllFromAD);
    if (null != $allDataFromDB) {
        while ($row = $allDataFromDB->fetch_assoc()) {
            echo $row['email'] . " - " . $row['title'] . " - " . $row['description'] . " - " .$row['category'] . "<br>";
        }
        $allDataFromDB->close();
    } else {
        echo 'null' . '<br>';
    }

    $selectALLFromAD = 'SELECT * FROM ad ORDER BY created DESC';
    $result = $mySQL -> query($selectALLFromAD);

    /*$deleteDataQuery = "DELETE FROM ad WHERE email='new@gmail.com'";
    $mySQL->query($deleteDataQuery);*/
?>
</body>
</html>
