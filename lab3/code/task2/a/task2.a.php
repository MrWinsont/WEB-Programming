<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset = "UTF = 8">
    <title>task2</title>
</head>
<body>
    <form method = "post">
        <textarea rows = "10" name = "textArea"></textarea>
        <input type = "submit" name = "text" value = "accept">
    </form>
    <?php
        if (true === isset($_POST['textArea'])){
            $str = $_POST['textArea'];
            echo "num of chars:",strlen($str),'<br>';
            echo "num of words",str_word_count($str);
        }

    ?>

</body>
</html>