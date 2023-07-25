<?php
class HourlyTariff extends TariffAbstract
{
    protected string $name = 'Почасовой';
    protected $pricePerKm = 0;
    protected $pricePerMin = 200/60;
    
    public function __construct(int $distance, int $minutes) 
    {
        parent::__construct($distance, $minutes);
        $rest = $this->minutes % 60;
        if ($this->minutes < 60) {
            $this->minutes = 60;
        } elseif ($rest > 0) {
            $this->minutes = $this->minutes - $rest + 60;
        }
    }
}