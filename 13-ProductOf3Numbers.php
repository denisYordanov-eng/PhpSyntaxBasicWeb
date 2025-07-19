<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form method="get">
    X: <input type="text" name="num1" />
    Y: <input type="text" name="num2" />
    Z: <input type="text" name="num3" />
    <input type="submit" />
</form>
<?php
if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])){
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $num3 = intval($_GET['num3']);
    $arr = [$num1, $num2, $num3];

    $negativeCount = 0;
    for ($i=0; $i<count($arr); $i++){
        if($arr[$i] == 0){
            echo "<p>Positive</p>";
            return;
        }
        if ($arr[$i] < 0){
            $negativeCount++;
        }
    }
    if($negativeCount % 2 == 0){
        echo "<p>Positive</p>";
    }else{
        echo "<p>Negative</p>";
    }
}
?>
</body>
</html>
