<?php
$num1 = isset($_POST['num1']) ? (float) $_POST['num1'] : 0;
$num2 = isset($_POST['num2']) ? (float) $_POST['num2'] : 0;
$operation = isset($_POST['operation']) ? $_POST['operation'] : 'add';
$result = '';


switch($operation) {
    case 'add':
        $result = $num1 + $num2;
        break;
    case 'subtract':
        $result = $num1 - $num2;
        break;
    case 'multiply':
        $result = $num1 * $num2;
        break;
    case 'divide':
        if ($num2 == 0) {
            $result = 'Error: Division by zero';
        } else {
            $result = $num1 / $num2;
        }
        break;
    case 'power':
        $result = pow($num1, $num2);
        break;
    case 'percentage':
        $result = ($num1 * $num2) / 100;
        break;
    case 'sqrt':
        if ($num1 < 0) {
            $result = 'Error: Square root of a negative number is not a real number';
        } else {
            $result = sqrt($num1);
        }
        break;
    case 'log':
        if ($num1 > 0) {
            $result = log($num1);
        } else {
            $result = 'Error: Logarithm for non-positive numbers is undefined';
        }
        break;
    default:
        $result = 'Invalid operation selected';
}


echo "<h2>Result: $result</h2>";
echo "<a href='index.html'>Go back</a>";
?>
