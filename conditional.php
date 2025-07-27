<?php include 'base.php'; ?>

<?php
echo "<div class='section'><h2>5. Conditional Statements</h2>";

$code = <<<EOD
\$age = 25;
echo "Age: \$age<br>";
if(\$age >= 18){ echo "✔️ You can vote<br>"; }
if(\$age >= 18){ echo "✔️ You can vote<br>"; } else { echo "❌ You cannot vote<br>"; }
if(\$age >= 18){ echo "✔️ You can vote<br>"; } elseif(\$age == 17){ echo "Wait 1 more year"; } else { echo "❌ You cannot vote"; }
if (\$age >= 18){
    if(\$age <= 66){ echo "✔️ You can vote<br>"; } 
    else { echo "🔻 Too old to vote<br>"; }
} elseif(\$age == 17){ echo "Wait 1 more year"; }
elseif(\$age == 16){ echo "Wait 2 more years"; }
else { echo "❌ You cannot vote"; }
EOD;

echo "<strong>Code:</strong><pre>$code</pre>";
echo "<strong>Output:</strong><br>";

$age = 25;
echo "Age: $age<br>";
if($age >= 18){ echo "✔️ You can vote<br>"; }
if($age >= 18){ echo "✔️ You can vote<br>"; } else { echo "❌ You cannot vote<br>"; }
if($age >= 18){ echo "✔️ You can vote<br>"; } elseif($age == 17){ echo "Wait 1 more year"; } else { echo "❌ You cannot vote"; }
if ($age >= 18){
    if($age <= 66){ echo "✔️ You can vote<br>"; }
    else { echo "🔻 Too old to vote<br>"; }
} elseif($age == 17){ echo "Wait 1 more year"; }
elseif($age == 16){ echo "Wait 2 more years"; }
else { echo "❌ You cannot vote"; }

echo "</div>";


?>
<?php include 'footer.php'; ?>