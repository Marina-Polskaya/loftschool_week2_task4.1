<?php

require_once 'TariffInterface.php';

class BasicTariff implements TariffInterface
{
    protected $pricePerKm;
    protected $pricePerMin;
    protected $distance;
    protected $minutes;
    
    public function __construct($distance, $minutes) {
        $this->pricePerKm = 10;
        $this->pricePerMin = 3;
        $this->distance = $distance;
        $this->minutes = $minutes;
    }
    
    public function countTripPrice() : int
    {
        $tripPrice = $this->pricePerKm * $this->distance + $this->pricePerMin * $this->minutes;
        return $tripPrice;
    }
    
    public function getDistance() : int
    {
        return $this->distance;
    }
    
    public function getMinutes() : int
    {
        return $this->minutes;
    }
}