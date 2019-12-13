<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<?php // Part 1

$fuel = explode("\n", file_get_contents('array.txt'));
	foreach ($fuel as &$value) {
    	$value = floor($value / 3) - 2;
	}

$sum = array_sum($fuel);

echo $sum;

unset($value); 

echo "<br><br>";

?>

<?php
$total_fuel = array();
$modules = explode("\n", file_get_contents('array.txt'));
foreach ($modules as $module) {                
    $module_fuel = floor($module / 3) - 2;                   
    array_push($total_fuel, $module_fuel);
}
$grand_total = array_sum($total_fuel);
echo $grand_total; 
?>