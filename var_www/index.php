<!DOCTYPE html>
<html>
  <head>
    <title>TubeRasp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <link rel="stylesheet" href="app.min.css">

    <style>
   </style>

<script>
</script>

  </head>

  <body>
   <script src="zepto.min.js"></script>
   <script src="app.min.js"></script>
   <script src="tuberasp.js"></script>

    <div class="app-page" data-page="home">
      <div class="app-topbar">
        <div class="app-title">TubeRasp</div>
      </div>
      <div class="app-content">
        <div class="app-section">
          <div class="app-button" data-target="pageMplayer">Radiosender</div>
          <div class="app-button" data-target="pageSystem">System</div>
        </div>
      </div>
    </div>

    <div class="app-page" data-page="pageSystem">
      <div class="app-topbar">
        <div class="app-button left" data-back data-autotitle></div>
        <div class="app-title">System</div>
      </div>

      <div class="app-content">
	<ul class="app-list">
          <li class="app-button" onclick="systemCmd('halt')">Runterfahren</li>
          <li class="app-button" onclick="systemCmd('reboot')">Neustart</li>
        </ul>

      </div>
    </div>

    <div class="app-page" data-page="pageMplayer">
      <div class="app-topbar">
        <div class="app-button left" data-back data-autotitle></div>
        <div class="app-title">Radiosender</div>
      </div>
      <div class="app-content">
        <ul class="app-list">
<?php

include("tubeStations.php");



foreach ($stationData as $statID => $station) {
    echo "\t\t<li class=\"app-button\" onclick=\"changeRadio('$statID')\">$station[statName]</li>\n";
}


?>

	<ul>
      </div>
    </div>

    <script src="zepto.js"></script>
    <script src="app.min.js"></script>
    <script>
      App.controller('home', function (page) {
        // put stuff here
      });

      App.controller('page2', function (page) {
        // put stuff here
      });

      try {
        App.restore();
      } catch (err) {
        App.load('home');
      }
    </script>
  </body>
</html>
