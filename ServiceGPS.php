<?php

require_once 'ServiceTrait.php';
require_once 'ServiceInterface.php';

class ServiceGPS implements ServiceInterface
{  
    private string $name = '"GPS"';
    protected int $pricePerHour;
    use ServiceTrait;
    
    public function __construct() {
        $this->pricePerHour = 15;
    }
}
