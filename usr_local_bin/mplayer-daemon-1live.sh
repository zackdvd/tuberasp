#! /usr/bin/php

<?php

// loading all available stations
include("/var/www/tubeStations.php");


$file = '/tmp/mplayer.pipe';

// select station, see tubeStations.php
$station="1live";

file_put_contents($file, "loadfile " . $stationData[$station]['statUrl'] . "\n");

?>




