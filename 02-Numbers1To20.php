<ul>
    <?php
    for ($x = 1; $x <= 20; $x++) {
        if ($x % 2 == 0){
            echo "<li><span style='color: green'>$x</span</li>";
        }else{
            echo "<li><span style='color: blue'>$x</span></li>";
        }
    }
    ?>
</ul>