<!--<form method="get">-->
<!--    Name: <input type="text" name="person" />-->
<!--    <input type="submit" />-->
<!--</form>-->

<?php
if(isset($_GET['person'])) {
    $person = htmlspecialchars($_GET['person']);
 echo "<p>Hello, $person!</p>";
} else{
?>
<form method="get">
    Name: <input type="text" name="person" />
    <input type="submit" />
</form>
<?php } ?>