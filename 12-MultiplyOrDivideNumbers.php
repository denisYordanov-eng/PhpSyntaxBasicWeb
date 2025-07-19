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
    $num1 = floatval($_GET['num1']);
    $num2 = floatval($_GET['num2']);
    $result1 = 0;
    if($num1 > $num2){
        $result = $num1 / $num2;
        $result = round($result,2);
        echo "<p>$result</p>";
    }
    else{
        $result = $num1 * $num2;
        echo "<p>$result</p>";
    }
}
?>
</body>
</html>