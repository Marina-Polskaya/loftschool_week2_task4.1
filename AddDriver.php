<?php

require_once 'ServiceTrait.php';
require_once 'ServiceInterface.php';

class AddDriver implements ServiceInterface
{
    use ServiceTrait;
    
    private string $name = '"Дополнительный водитель"';
    protected int $oncePrice;
    protected int $pricePerHour;
    use ServiceTrait;
    
    public function __construct() {
        $this->oncePrice = 100;
        $this->pricePerHour = 0;
    }
    
    public function apply(TariffInterface $tariff, &$price)
    {
        $price += $this->oncePrice;
        
    }
}