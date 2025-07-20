<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form method="get">
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<?php
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    $firstNum = 1;
    $secondNum = 1;
    $thirdNum = 2;
    for ($i = 1; $i <= $num; $i++) {
        echo $firstNum . "<br>";
        $nextNum = $firstNum + $secondNum + $thirdNum;
        $firstNum = $secondNum;
        $secondNum = $thirdNum;
        $thirdNum = $nextNum;
    }
}
?>
</body>
</html>
