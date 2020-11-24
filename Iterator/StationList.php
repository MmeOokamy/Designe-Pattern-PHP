<?php


class StationList implements Countable, Iterator
{
    protected $stations = [];
    protected  $counter = 0;

    public function __construct()
    {
    }


    public function addStations(RadioStation $station): array
    {
        $this->stations[] = $station;
    }

    public function removeStation(RadioStation $stationToRemove){
        $stationToRemove
    }
    public function count()
    {
        // TODO: Implement count() method.
    }
}