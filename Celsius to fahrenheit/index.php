<?php
function celsiusToFahrenheit($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}

$celsius = 32;
$fahrenheit = celsiusToFahrenheit($celsius);
echo "$celsius degrees Celsius is equal to $fahrenheit degrees Fahrenheit.";
?>
