<?php

class ServiceGPS implements ServiceInterface
{    
    public $pricePerHour;
    //use ServiceTrait;

    public function apply(TariffInterface $tariff, &$price)
    {
        $hours = ceil($tariff->getMinutes()/60);
        $price += $this->pricePerHour * $hours;
    }
}
