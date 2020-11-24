<?php

include_once 'RadioStation.php';
include_once 'StationList.php';


$stationList = new StationList();

$station1 = new  StationList(100);

$stationList->addStations($station1);
$stationList->addStations(new RadioStation(150.2));
$stationList->addStations(new RadioStation(120.2));
$stationList->addStations(new RadioStation(101.2));
$stationList->addStations(new RadioStation(99.2));

echo $stationList->current()->getFrequency() . PHP_EOL;
$stationList->next();
echo $stationList->key() . PHP_EOL;
echo $stationList->current()->getFrequency() . PHP_EOL;

foreach ($stationList as $station) {
    echo $station->getFrequency() . PHP_EOL;
}