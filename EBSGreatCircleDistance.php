<?php

$lat1 = 39.9333635;
$lon1 = 32.8597419;
$lat2 = 43.9333635;
$lon2 = 32.8597419;

$dLat = deg2rad($lat2 - $lat1);
$dLon = deg2rad($lon2 - $lon1);
$lat1 = deg2rad($lat1);
$lat2 = deg2rad($lat2);

$a = sin($dLat / 2) * sin($dLat / 2) +
    sin($dLon / 2) * sin($dLon / 2) * cos($lat1) * cos($lat2);
$c = 2 * atan2(sqrt($a), sqrt(1 - $a));
$distance = 6371 * $c;

echo "The great circle distance is " . $distance . " km.";

function deg2rad($degrees)
{
    return $degrees * M_PI / 180;
}

?>
