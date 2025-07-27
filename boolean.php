<?php include 'base.php'; ?>

<?php
echo "<div class='section'><h2>2. Boolean Operations</h2>";

// Show the code
$code = <<<EOD
\$x = 5; 
\$y = 10;
echo "\$x == \$y : "; var_dump(\$x == \$y); echo "<br>";
echo "\$x != \$y : "; var_dump(\$x != \$y); echo "<br>";
echo "\$x <  \$y : "; var_dump(\$x < \$y); echo "<br>";
echo "\$x >  \$y : "; var_dump(\$x > \$y); echo "<br>";
echo "\$x <= \$y : "; var_dump(\$x <= \$y); echo "<br>";
echo "\$x >= \$y : "; var_dump(\$x >= \$y); echo "<br>";
echo "\$x === \$y: "; var_dump(\$x === \$y); echo "<br>";
echo "\$x !== \$y: "; var_dump(\$x !== \$y); echo "<br>";
echo "\$x <=> \$y: "; var_dump(\$x <=> \$y); echo "<br>";
echo "\$x and \$y: "; var_dump(\$x and \$y);
EOD;

echo "<strong>Code:</strong><pre>$code</pre>";

// Output
echo "<strong>Output:</strong><br>";
$x = 5; 
$y = 10;
echo "$x == $y : "; var_dump($x == $y); echo "<br>";
echo "$x != $y : "; var_dump($x != $y); echo "<br>";
echo "$x <  $y : "; var_dump($x < $y);  echo "<br>";
echo "$x >  $y : "; var_dump($x > $y);  echo "<br>";
echo "$x <= $y : "; var_dump($x <= $y); echo "<br>";
echo "$x >= $y : "; var_dump($x >= $y); echo "<br>";
echo "$x === $y: "; var_dump($x === $y); echo "<br>";
echo "$x !== $y: "; var_dump($x !== $y); echo "<br>";
echo "$x <=> $y: "; var_dump($x <=> $y); echo "<br>";
echo "$x and $y: "; var_dump($x and $y);

echo "</div>";
?>
<?php include 'footer.php'; ?>