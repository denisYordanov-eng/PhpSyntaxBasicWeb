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
<ul>
    <?php
    if(isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 =intval($_GET['num1']);
        $num2 = ($_GET['num2']);

        echo "<ul>\n";
        for($i =1; $i <= $num1; $i++) {
            echo "\t<li>List $i\n";
            echo "<ul>\n";

            for ($j = 1; $j <= $num2; $j++) {
                echo "\t\t\t<li>Element $i.$j</li>\n";
            }
            echo "\t\t</ul>\n";
            echo "\t</li>\n";
        }
        echo "</ul>";
    }
    ?>

</body>
</html>