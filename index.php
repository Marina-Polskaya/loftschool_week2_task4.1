<?php

//require_once 'TariffInterface.php';
//require_once 'ServiceInterface.php';
//require_once 'TariffAbstract.php';
require_once 'BasicTariff.php';
//require_once 'HourlyTariff.php';
//require_once 'StudentTariff.php';
//require_once 'ServiceGPS.php';

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_NOTICE);

$tariff = new BasicTariff;
$tariff->addService(new ServiceGPS(15));
echo $tariff->countTripPrice(5, 1);

