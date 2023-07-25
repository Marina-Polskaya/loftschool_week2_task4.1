<?php

abstract class TariffAbstract implements TariffInterface
{
    protected $pricePerKm;
    protected $pricePerMin;
    protected int $distance;
    protected int $minutes;
    protected array $services = [];
    protected $servicesNames = [];

    public function __construct(int $distance, int $minutes) {
        $this->distance = $distance;
        $this->minutes = $minutes;
    }

    public function countTripPrice() : int
    {
        $price = $this->distance*$this->pricePerKm + $this->minutes*$this->pricePerMin;
        
        if ($this->services) {
            foreach ($this->services as $service) {
                $service->apply($this, $price);
            }
        }
        return $price;
    }
    
    public function printOrderInfo() : void
    {
        echo 'Тариф ' . $this->getName() . ' (' . $this->distance . ' км, ' . $this->minutes . ' мин.).<br />';
        if ($this->servicesNames) {
            foreach ($this->servicesNames as $serviceName) {
                echo 'Добавлена услуга ' . $serviceName . '.<br />';
            }
        }
        echo 'К оплате ' . $this->countTripPrice() . ' руб.<br />';
    }
    
    public function addService(ServiceInterface $service) : void
    {
        array_push($this->services, $service);
        array_push ($this->servicesNames, $service->getName());
    }
    
    public function getDistance() : int
    {
        return $this->distance;
    }
    
    public function getMinutes() : int
    {
        return $this->minutes;
    }
    
    public function getName() : string
    {
        return $this->name;
    }
}
