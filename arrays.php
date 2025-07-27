<?php include 'base.php'; ?>

<?php

echo "<div class='section'><h2>6. Index & Associative Arrays</h2>";

$arrayCode = <<<EOD
\$arr1 = ["apple", "banana", "cherry"];
\$arr1[] = "mango";
print_r(\$arr1);

\$arr2 = [
    "name" => "Ankit",
    "age" => 19,
    "country" => "India",
    "city" => "Bettiah"
];
print_r(\$arr2);

foreach (\$arr1 as \$value) { echo "\$value<br>"; }

foreach (\$arr2 as \$key => \$value) { echo "\$key: \$value<br>"; }

foreach (\$arr2 as \$value) { echo "\$value<br>"; }
EOD;

echo "<strong>Code:</strong><pre>$arrayCode</pre>";
echo "<strong>Output:</strong><br>";

$arr1 = ["apple", "banana", "cherry"];
$arr1[] = "mango";
echo "<strong>Index Array:</strong><pre>"; print_r($arr1); echo "</pre>";

$arr2 = [
    "name" => "Ankit",
    "age" => 19,
    "country" => "India",
    "city" => "Bettiah"
];
echo "<strong>Associative Array:</strong><pre>"; print_r($arr2); echo "</pre>";

echo "<strong>Looping Index Array:</strong><br>";
foreach ($arr1 as $value) { echo "$value<br>"; }

echo "<strong>Looping Associative Array:</strong><br>";
foreach ($arr2 as $key => $value) { echo "$key: $value<br>"; }

echo "<strong>Looping Values Only:</strong><br>";
foreach ($arr2 as $value) { echo "$value<br>"; }

echo "</div>";

echo "<div class='section'><h2>7. PHP Array Functions</h2>";

$code = <<<EOD
// array_slice
\$arr = [1, 2, 3, 4, 5];
\$slice = array_slice(\$arr, 1, 3);
print_r(\$slice);

// array_search
\$arr = ["a" => "apple", "b" => "banana"];
\$key = array_search("banana", \$arr);
echo "Key = \$key";

// array_pop
\$arr = [1, 2, 3];
\$last = array_pop(\$arr);
print_r(\$arr);

// array_merge
\$a = [1, 2]; \$b = [3, 4];
\$merged = array_merge(\$a, \$b);
print_r(\$merged);

// array_count_values
\$arr = [1, 1, 2, 2, 2, 3];
print_r(array_count_values(\$arr));

// array_keys
\$arr = ["name" => "John", "age" => 25];
print_r(array_keys(\$arr));

// print_r
\$arr = ["x" => 10, "y" => 20];
print_r(\$arr);

// array_chunk
\$arr = [1, 2, 3, 4, 5];
print_r(array_chunk(\$arr, 2));

// array_key_exists
\$arr = ["name" => "John"];
if (array_key_exists("name", \$arr)) {
    echo "Key 'name' exists";
}

// array_push
\$arr = [1, 2];
array_push(\$arr, 3, 4);
print_r(\$arr);

// count
\$arr = [1, 2, 3];
echo count(\$arr);

// is_array
\$data = [1, 2, 3];
if (is_array(\$data)) {
    echo "Yes, it's an array.";
}
EOD;

echo "<strong>Code:</strong><pre>$code</pre>";
echo "<strong>Output:</strong><br>";

// array_slice
$arr = [1, 2, 3, 4, 5];
$slice = array_slice($arr, 1, 3);
echo "<strong>array_slice:</strong><pre>"; print_r($slice); echo "</pre>";

// array_search
$arr = ["a" => "apple", "b" => "banana"];
$key = array_search("banana", $arr);
echo "<strong>array_search:</strong> Key = $key<br>";

// array_pop
$arr = [1, 2, 3];
$last = array_pop($arr);
echo "<strong>array_pop:</strong> Popped = $last<pre>"; print_r($arr); echo "</pre>";

// array_merge
$a = [1, 2]; $b = [3, 4];
$merged = array_merge($a, $b);
echo "<strong>array_merge:</strong><pre>"; print_r($merged); echo "</pre>";

// array_count_values
$arr = [1, 1, 2, 2, 2, 3];
echo "<strong>array_count_values:</strong><pre>"; print_r(array_count_values($arr)); echo "</pre>";

// array_keys
$arr = ["name" => "John", "age" => 25];
echo "<strong>array_keys:</strong><pre>"; print_r(array_keys($arr)); echo "</pre>";

// print_r
$arr = ["x" => 10, "y" => 20];
echo "<strong>print_r:</strong><pre>"; print_r($arr); echo "</pre>";

// array_chunk
$arr = [1, 2, 3, 4, 5];
echo "<strong>array_chunk:</strong><pre>"; print_r(array_chunk($arr, 2)); echo "</pre>";

// array_key_exists
$arr = ["name" => "John"];
if (array_key_exists("name", $arr)) {
    echo "<strong>array_key_exists:</strong> Key 'name' exists<br>";
}

// array_push
$arr = [1, 2];
array_push($arr, 3, 4);
echo "<strong>array_push:</strong><pre>"; print_r($arr); echo "</pre>";

// count
$arr = [1, 2, 3];
echo "<strong>count:</strong> " . count($arr) . "<br>";

// is_array
$data = [1, 2, 3];
if (is_array($data)) {
    echo "<strong>is_array:</strong> Yes, it's an array.";
}

echo "</div>";
?>
<?php include 'footer.php'; ?>