<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset = "UTF = 8">
    <title>task3</title>
</head>
<body>
    <div id = "form">
        <form action = "save.php" method = "post">
            <label for = "email">Email</label>
            <input type = "email" name = "email" required>

            <label for = "category">Category</label>
            <select name = "category" required>

                <?php
                    $directories = scandir("./categories");
                    for($i = 2; $i < count($directories); $i++){
                        echo "<option value = $directories[$i]> $directories[$i]</option>";
                    }
                ?>
            </select>

            <label for = "title">Title</label>
            <input type = "text" name = "title" required>

            <label for = "title">Description</label>
            <textarea rows = "3" name = "description"></textarea>


            <input type = "submit" value = "Done!">
        </form>
    </div>

    <div id = "table">
        <table>
            <thead>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
            </thead>
            <tbody>

                    <?php
                    $directories = scandir("./categories");
                    for($i = 2; $i < count($directories); $i++){
                        $titles = scandir("./categories/$directories[$i]");
                        for($j = 2; $j < count($titles); $j++){
                            $fileArray = file("./categories/$directories[$i]/$titles[$j]");

                            echo "<tr>";
                            echo "<td>$directories[$i]</td>";
                            echo "<td>$titles[$j]</td>";
                            echo "<td>$fileArray[0]</td>";
                            echo "</tr>";
                        }


                    }
                    ?>


            </tbody>
        </table>
    </div>

</body>
</html>