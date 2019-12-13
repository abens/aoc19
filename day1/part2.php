<?php
$total_fuel = array();
$modules = explode("\n", file_get_contents('array.txt'));
foreach ($modules as $module) {                
    $module_fuel = floor($module / 3) - 2;                   
    $module_fuel_mass = $module_fuel;          
    while (1) {                                              
        $module_fuel_mass = floor($module_fuel_mass / 3) - 2;
        if ($module_fuel_mass > 0) {           
            $module_fuel += $module_fuel_mass;
        }
        else {
            break;
        }
    }                                           
    array_push($total_fuel, $module_fuel);
}
$grand_total = array_sum($total_fuel);
echo $grand_total; 
?>

