<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form method="get">
    N: <input type="text" name="num1" />
    M: <input type="text" name="num2" />
    <input type="submit" />
</form>
<?php
if(isset($_GET['num1']) && isset($_GET['num2'])){
    $number1 = intval($_GET['num1']);
    $number2 = intval($_GET['num2']);
    $result = $number1 * $number2;
    echo $result;
}
?>
</body>
</html>
