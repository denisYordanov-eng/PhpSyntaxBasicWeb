

<?php
$sortedLines = "";
if(isset($_GET['lines'])){
    $lines = explode(",",$_GET['lines']);
    $lines = array_map('trim',$lines);
    sort($lines,SORT_STRING);
    $sortedLines = implode("\n",$lines);
}
?>

<form>
    <textarea rows="10" name="lines"><?= htmlspecialchars($sortedLines)?></textarea> <br>
    <input type="submit" value="Sort">
</form>

