<?php
echo "Here is first code In PHP and 1st repository in git";
?>
<?php
function add($a, $b)
{
    return $a + $b;
};
function subtract($a, $b)
{
    return $a - $b;
}
function multiply($a, $b)
{
    return $a * $b;
}
function divide($a, $b)
{
    if ($b == 0) {
        return "Division by zero is not allowed.";
    }
    return $a / $b;
}
function modulus($a, $b)
{
    return $a % $b;
}
function power($a, $b)
{
    return pow($a, $b);
}
function squareRoot($a)
{
    if ($a < 0) {
        return "Square root of negative number is not allowed.";
    }
    return sqrt($a);
}
function factorial($n)
{
    if ($n < 0) {
        return "Factorial of negative number is not defined.";
    }
    if ($n == 0 || $n == 1) {
        return 1;
    }
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
};
function gcd($a, $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
};
function lcm($a, $b)
{
    return abs($a * $b) / gcd($a, $b);
};
?>