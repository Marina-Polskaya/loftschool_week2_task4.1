<?php

interface TariffInterface
{
    public function countTripPrice() : int;
    public function printOrderInfo() : void;
    public function addService(ServiceInterface $service) : void;
    public function getName() : string;
    public function getMinutes() : int;
    public function getDistance() : int;
}