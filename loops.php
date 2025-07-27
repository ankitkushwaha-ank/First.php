<?php include 'base.php'; ?>

<?php


echo "<div class='section'>";
echo "<h2>1. While Loop</h2>";
$whileCode = <<<EOD
\$i = 1;
while (\$i <= 5) {
    echo "Number: \$i<br>";
    \$i++;
}
EOD;
echo "<strong>Code:</strong><pre>$whileCode</pre>";
echo "<div><strong>Output:</strong><br>";
$i = 1;
while ($i <= 5) {
    echo "Number: $i<br>";
    $i++;
}
echo "</div></div>";

echo "<div class='section'>";
echo "<h2>2. Do While Loop</h2>";
$dowhileCode = <<<EOD
\$i = 1;
do {
    echo "Count: \$i<br>";
    \$i++;
} while (\$i <= 5);
EOD;
echo "<strong>Code:</strong><pre>$dowhileCode</pre>";
echo "<div><strong>Output:</strong><br>";
$i = 1;
do {
    echo "Count: $i<br>";
    $i++;
} while ($i <= 5);
echo "</div></div>";

echo "<div class='section'>";
echo "<h2>3. For Loop</h2>";
$forCode = <<<EOD
for (\$i = 1; \$i <= 5; \$i++) {
    echo "Step: \$i<br>";
}
EOD;
echo "<strong>Code:</strong><pre>$forCode</pre>";
echo "<div><strong>Output:</strong><br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Step: $i<br>";
}
echo "</div></div>";

echo "<div class='section'>";
echo "<h2>4. Foreach Loop</h2>";
$foreachCode = <<<EOD
\$colors = ["Red", "Green", "Blue"];
foreach (\$colors as \$color) {
    echo "Color: \$color<br>";
}
EOD;
echo "<strong>Code:</strong><pre>$foreachCode</pre>";
echo "<div><strong>Output:</strong><br>";
$colors = ["Red", "Green", "Blue"];
foreach ($colors as $color) {
    echo "Color: $color<br>";
}
echo "</div></div>";
?>
<?php include 'footer.php'; ?>