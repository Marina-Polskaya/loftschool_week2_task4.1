<?php

require_once 'TariffInterface.php';
require_once 'TariffAbstract.php';
require_once 'BasicTariff.php';
require_once 'HourlyTariff.php';
require_once 'StudentTariff.php';
require_once 'ServiceGPS.php';
require_once 'AddDriver.php';

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_NOTICE);

$tariff = new BasicTariff(5, 60);
$gps = new ServiceGPS();
$serviceName = $tariff->addService($gps);
$addDriver = new AddDriver();
$tariff->addService($addDriver);
$tariff->printOrderInfo();
echo '<br />';

$studentTariff = new StudentTariff(25, 45);
$studentTariff->addService(new ServiceGPS());
$studentTariff->printOrderInfo();
echo '<br />';

$hourlyTariff = new HourlyTariff(25, 95);
$hourlyTariff->addService(new AddDriver());
$hourlyTariff->printOrderInfo();

