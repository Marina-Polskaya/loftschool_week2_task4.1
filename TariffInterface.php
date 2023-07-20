<?php

interface TariffInterface
{
    public function countTripPrice() : int;
    public function addService(ServiceInterface $service);
    public function getMinutes() : int;
    public function getDistance() : int;
}