<?php


$file = '/tmp/mplayer.pipe';

// loading all available stations
include("tubeStations.php");

if($_GET['action']=="changePL"){
  file_put_contents($file, "loadfile " . $stationData[$_GET['station']]['statUrl'] . "\n");
  //file_put_contents($file, "pause\n");
}


?>
