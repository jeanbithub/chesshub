<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>radius:</label><br>
        <input type="text" name="x"><br>
        <input type="submit" value="radius:"><br>
    </form>

</body>

</html>


<?php

    $r = $_POST["x"];

    $volume = pi() * pow($r, 2);
    $circumference = pi()*2*$r;
    echo "Volume: {$volume}cm <br>";
    echo "Circumference: {$circumference}cm^2 <br>";
    $volume = pi()*(4/3)*$r;
    echo $volume;
?>
