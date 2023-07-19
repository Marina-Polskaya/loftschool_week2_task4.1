<?php

interface TariffInterface
{
    public function countTripPrice();
    public function addService(ServiceInterface $service);
    public function getMinutes();
    public function getDistance();
}