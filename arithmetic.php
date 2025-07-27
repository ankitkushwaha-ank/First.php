<?php include 'base.php'; ?>

<?php

echo "<div class='section'><h2>1. Arithmetic Operations</h2>";

// Show the code
$code = <<<EOD
\$a = 20; 
\$b = 4;
echo "Values: a = \$a, b = \$b<br>";
echo "\$a + \$b = " . (\$a + \$b) . "<br>";
echo "\$a - \$b = " . (\$a - \$b) . "<br>";
echo "\$a * \$b = " . (\$a * \$b) . "<br>";
echo "\$a / \$b = " . (\$a / \$b) . "<br>";
echo "\$a % \$b = " . (\$a % \$b) . "<br>";
\$c = \$a % \$b;
\$c++;
echo "After increment, c = \$c";
EOD;

echo "<strong>Code:</strong><pre>$code</pre>";

// Show the output
echo "<strong>Output:</strong><br>";
$a = 20; 
$b = 4;
echo "Values: a = $a, b = $b<br>";
echo "$a + $b = " . ($a + $b) . "<br>";
echo "$a - $b = " . ($a - $b) . "<br>";
echo "$a * $b = " . ($a * $b) . "<br>";
echo "$a / $b = " . ($a / $b) . "<br>";
echo "$a % $b = " . ($a % $b) . "<br>";
$c = $a % $b;
$c++;
echo "After increment, c = $c";

echo "</div>";
?>
<?php include 'footer.php'; ?>