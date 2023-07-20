<?php

require_once 'TariffInterface.php';
require_once 'ServiceInterface.php';
require_once 'TariffAbstract.php';
require_once 'BasicTariff.php';
require_once 'HourlyTariff.php';
require_once 'StudentTariff.php';
require_once 'ServiceGPS.php';

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_NOTICE);

$tariff = new BasicTariff(5, 60);
$tariff->addService(new ServiceGPS(15));
echo $tariff->countTripPrice() . '<br />';

$studentTariff = new StudentTariff(25, 45);
$studentTariff->addService(new ServiceGPS(15));
echo $studentTariff->countTripPrice() . '<br />';

$hourlyTariff = new HourlyTariff(25, 95);
echo $hourlyTariff->countTripPrice();

