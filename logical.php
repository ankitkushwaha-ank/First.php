<?php include 'base.php'; ?>

<?php
echo "<div class='section'><h2>3. Logical Operations</h2>";

$logicCode = <<<EOD
\$x = true; 
\$y = false;
echo "\$x && \$y : "; var_dump(\$x && \$y); echo "<br>";
echo "\$x || \$y : "; var_dump(\$x || \$y); echo "<br>";
\$result = (2 > 1) ? "Yes" : "No";
echo "2 > 1 ? \\\"Yes\\\" : \\\"No\\\" => \$result<br>";
\$a = 10; 
\$b = 20;
echo "\$a > \$b ? 'Greater' : 'Smaller' => " . ((\$a > \$b) ? "Greater" : "Smaller");
EOD;

echo "<strong>Code:</strong><pre>$logicCode</pre>";
echo "<strong>Output:</strong><br>";

$x = true; $y = false;
echo "\$x && \$y : "; var_dump($x && $y); echo "<br>";
echo "\$x || \$y : "; var_dump($x || $y); echo "<br>";
$result = (2 > 1) ? "Yes" : "No";
echo "2 > 1 ? \"Yes\" : \"No\" => $result<br>";
$a = 10; $b = 20;
echo "\$a > \$b ? 'Greater' : 'Smaller' => " . (($a > $b) ? "Greater" : "Smaller");

echo "</div>";

?>
<?php include 'footer.php'; ?>