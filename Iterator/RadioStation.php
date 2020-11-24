<?php


class RadioStation
{
    protected $frequency;


    public function __Construct( $frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * @return mixed
     */
    public function getFrequency()
    {
        return $this->frequency;
    }
}