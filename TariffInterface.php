<?php


interface TariffInterface
{
    public function countTripPrice() : int;
    public function addService(ServiceInterface $service) : self;
    public function getMinutes() : int;
    public function getDistance() : int;
}