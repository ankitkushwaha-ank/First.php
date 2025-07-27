<?php include 'base.php'; ?>

<?php
echo "<div class='section'><h2>4. Assignment Operators</h2>";

$assignCode = <<<EOD
\$a = 10; 
\$b = 5;
\$c = \$a; echo "\$c = \$a : \$c<br>";
\$c = \$a; \$c += \$b; echo "\$a += \$b : \$c<br>";
\$c = \$a; \$c -= \$b; echo "\$a -= \$b : \$c<br>";
\$c = \$a; \$c *= \$b; echo "\$a *= \$b : \$c<br>";
\$c = \$a; \$c /= \$b; echo "\$a /= \$b : \$c<br>";
\$c = \$a; \$c %= \$b; echo "\$a %= \$b : \$c<br>";
EOD;

echo "<strong>Code:</strong><pre>$assignCode</pre>";
echo "<strong>Output:</strong><br>";

$a = 10; $b = 5;
$c = $a; echo "\$c = \$a : $c<br>";
$c = $a; $c += $b; echo "\$a += \$b : $c<br>";
$c = $a; $c -= $b; echo "\$a -= \$b : $c<br>";
$c = $a; $c *= $b; echo "\$a *= \$b : $c<br>";
$c = $a; $c /= $b; echo "\$a /= \$b : $c<br>";
$c = $a; $c %= $b; echo "\$a %= \$b : $c<br>";

echo "</div>";
?>
<?php include 'footer.php'; ?>