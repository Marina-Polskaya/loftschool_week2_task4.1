<?php

interface ServiceInterface
{
    public function apply(TariffInterface $tariff, &$price);
    //public function addService(ServiceInterface $service);
    //public function getDistance() : int;
    //public function getMinutes() : int;
}