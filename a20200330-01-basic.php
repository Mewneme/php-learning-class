<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo 5+9;
        echo "<br>";
        echo 6*9;
        echo PHP_VERSION."<br>";
        echo __DIR__."<br>";//所在資料夾
        echo __FILE__."<br>";
        echo __LINE__."<br>";
        define("MY_CONST",3333);
        echo MY_CONST."<br>";
    ?>
</body>
</html>