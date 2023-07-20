<?php

abstract class TariffAbstract implements TariffInterface
{
    protected $pricePerKm;
    protected $pricePerMin;
    protected $distance;
    protected $minutes;
    /** @var ServiceInterface[] */
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
    }
    public function addService(ServiceInterface $service) : TariffInterface
    {
        array_push($this->services, $service);
        return $this;
    }
    
    public function getDistance($distance) : int
    {
        return $this->distance = $distance;
    }
    
    public function getMinutes($minutes) : int
    {
        return $this->minutes = $minutes;
    }
}
