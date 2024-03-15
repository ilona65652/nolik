<?php
// Определение массива с городами и населением
$cities = array(
    "New York" => 8537673,
    "Tokyo" => 9273000,
    "Shanghai" => 24256800,
    "Mumbai" => 18410000
);

// Нахождение города с самым большим населением
$max_population = 0;
$city_with_max_population = "";

foreach ($cities as $city => $population) {
    if ($population > $max_population) {
        $max_population = $population;
        $city_with_max_population = $city;
    }
}

echo "Город с самым большим населением: $city_with_max_population с населением $max_population";
?>
