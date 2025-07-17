<?php
function sumTwoNumbers($a, $b): int{
  return $a + $b;
}
?>
<form method="get">
    <div>First number:</div>
    <input type="number" name="num1">
    <div>Second number:</div>
    <input type="number" name="num2">
    <div><input type="submit" name="sumbtn"></div>
</form>

<?php
if (isset($_GET["sumbtn"])) {
    $a = intval($_GET["num1"]);
    $b = intval($_GET["num2"]);
    echo "$a + $b = ".sumTwoNumbers($a, $b);
}
?>



