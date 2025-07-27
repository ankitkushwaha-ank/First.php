<?php include 'base.php'; ?>

<?php

echo "<div class='section'><h2>1. Basic Function</h2>";
$code1 = <<<EOD
function greet() {
    echo "Hello, welcome to PHP!";
}
greet();
EOD;
echo "<strong>Code:</strong><pre>$code1</pre>";
echo "<strong>Output:</strong><br>";
function greet() {
    echo "Hello, welcome to PHP!";
}
greet();
echo "</div>";

echo "<div class='section'><h2>2. Function with Parameters</h2>";
$code2 = <<<EOD
function greetUser(\$name) {
    echo "Hello, \$name!";
}
greetUser("Ankit");
EOD;
echo "<strong>Code:</strong><pre>$code2</pre>";
echo "<strong>Output:</strong><br>";
function greetUser($name) {
    echo "Hello, $name!";
}
greetUser("Ankit");
echo "</div>";

echo "<div class='section'><h2>3. Function with Return Value</h2>";
$code3 = <<<EOD
function add(\$a, \$b) {
    return \$a + \$b;
}
\$sum = add(10, 20);
echo "Sum of 10 and 20 is: \$sum";
EOD;
echo "<strong>Code:</strong><pre>$code3</pre>";
echo "<strong>Output:</strong><br>";
function add($a, $b) {
    return $a + $b;
}
$sum = add(10, 20);
echo "Sum of 10 and 20 is: $sum";
echo "</div>";

echo "<div class='section'><h2>4. Function with Default Parameters</h2>";
$code4 = <<<EOD
function welcome(\$name = "Guest") {
    echo "Welcome, \$name!";
}
welcome();
echo "<br>";
welcome("Ankit");
EOD;
echo "<strong>Code:</strong><pre>$code4</pre>";
echo "<strong>Output:</strong><br>";
function welcome($name = "Guest") {
    echo "Welcome, $name!";
}
welcome();
echo "<br>";
welcome("Ankit");
echo "</div>";

echo "<div class='section'><h2>5. Function with Type Declarations</h2>";
$code5 = <<<EOD
function multiply(int \$x, int \$y): int {
    return \$x * \$y;
}
echo "Multiplication of 4 and 5: " . multiply(4, 5);
EOD;
echo "<strong>Code:</strong><pre>$code5</pre>";
echo "<strong>Output:</strong><br>";
function multiply(int $x, int $y): int {
    return $x * $y;
}
echo "Multiplication of 4 and 5: " . multiply(4, 5);
echo "</div>";

echo "<div class='section'><h2>6. Using Global Variables</h2>";
$code6 = <<<EOD
\$x = 50;
\$y = 70;
function total() {
    global \$x, \$y;
    \$z = \$x + \$y;
    echo "Total using global: \$z";
}
total();
EOD;
echo "<strong>Code:</strong><pre>$code6</pre>";
echo "<strong>Output:</strong><br>";
$x = 50;
$y = 70;
function total() {
    global $x, $y;
    $z = $x + $y;
    echo "Total using global: $z";
}
total();
echo "</div>";

?>
<?php include 'footer.php'; ?>