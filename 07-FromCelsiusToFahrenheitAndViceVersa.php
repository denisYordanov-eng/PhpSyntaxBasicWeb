<form method="get">
    Celsius: <input type="text" name="celsiusDeg" />
    <input type="submit" value="Convert" name="submitBtn1" />
</form>

<form method="get">
    Fahrenheit: <input type="text" name="fahrenheitDeg">
    <input type="submit"  value="Convert" name="submitBtn2">
</form>
<?php
 if(isset($_GET['submitBtn1'])){
     $celsius = floatval($_GET['celsiusDeg']);
     $celsius = round($celsius ,2);
     echo "$celsius &degC = ". ConvertDegToFahrenheit($celsius) . ' F&deg';
 }else if(isset($_GET['submitBtn2'])){
     $fahrenheit = floatval($_GET['fahrenheitDeg']);
     $fahrenheit = round($fahrenheit,2);
     echo "$fahrenheit F&deg = " .ConvertFahrenheitToCelsius($fahrenheit) . ' C&deg';
 }
?>

<?php
function ConvertDegToFahrenheit($celsius) : float
{
    $far = ($celsius * 1.8) + 32;
   return  round($far,2);
}
?>

<?php
function  ConvertFahrenheitToCelsius($fahrenheit) : float
{
    $cel = ($fahrenheit - 32) / (1.8);
    return round($cel,2);
}
?>
