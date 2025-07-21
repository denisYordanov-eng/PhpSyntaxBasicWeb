<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
$buttonNum= 0;
for($col = 1; $col <= 9; $col++) {
    for ($row = 1; $row <= 5; $row++) {
        if($col == 1 || $col == 5 || $col == 9 ) {
            $buttonNum = 1;
            echo "<button style='background: blue'>$buttonNum</button>";
        }
        if ($col == 2 || $col == 3 || $col == 4) {
            if($row == 1){
                $buttonNum = 1;
                echo "<button style='background: blue'>$buttonNum</button>";
            }else{
                $buttonNum = 0;
                echo "<button>$buttonNum</button>";
            }
        }
        if ($col == 6 || $col == 7 || $col == 8) {
            if($row == 5){
                $buttonNum = 1;
                echo "<button style='background: blue'>$buttonNum</button>";
            }else{
                $buttonNum = 0;
                echo "<button>$buttonNum</button>";
            }
        }
    }
    echo "<br>";
}
?>
</body>
</html>
