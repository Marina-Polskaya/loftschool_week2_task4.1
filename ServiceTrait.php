<?php

trait ServiceTrait
{
    public function apply(TariffInterface $tariff, &$price)
    {
        $hours = ceil($tariff->getMinutes()/60);
        $price += $this->pricePerHour * $hours;
    }
}