<?php

abstract class TariffAbstract implements TariffInterface
{
    protected $pricePerKm;
    protected $pricePerMin;
    protected $distance;
    protected $minutes;
    protected $services = [];

    public function __construct(int $distance, int $minutes) {
        $this->distance = $distance;
        $this->minutes = $minutes;
    }

    public function countTripPrice() : int
    {
        $price = $this->distance*$this->pricePerKm + $this->minutes*$this->pricePerMin;
        
        if ($this->services) {
            foreach ($this->services as $service) {
                $service->apply($this, &$price);
            }
        }
        return $price;
    }
    
    public function addService(ServiceInterface $service) : TariffInterface
    {
        array_push($this->services, $service);
        return $this;
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
