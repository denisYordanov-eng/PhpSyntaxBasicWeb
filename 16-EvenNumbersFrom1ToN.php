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
    $arr = array();
    for ($i = 1; $i <= $num; $i++) {
        if ($i % 2 == 0) {
            $arr[] = $i;
        }
    }
    echo join(" ", $arr);
}
?>
</body>
</html>
