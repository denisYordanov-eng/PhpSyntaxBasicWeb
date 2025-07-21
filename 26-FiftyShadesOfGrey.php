<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
<?php
$color= 0;
for ($row = 0; $row < 5; $row++) {
    $color = 51* $row;
    for ($cow = 0; $cow < 10; $cow++) {
        echo "<div style='background: rgb($color ,$color, $color);'></div>";
    }
    $color += 5;
    echo "<br>";
}

 ?>
</body>
</html>
