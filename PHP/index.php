<?php
require_once("car.php");
require_once("UberX.php");
require_once("UberPool.php");
require_once("account.php");
require_once("archivo.php");

$uberX = new UberX("CVB21434", new Account("Alejandro Dh", "AlJ0595"), "Chevrolet", "Chevrolet");
$uberX->printDataCar();

$uberPool = new UberPool("AGT341", new Account("Lía QH", "LQH2453"), "Nissan", "centra");
$uberPool->printDataCar();

$UberVan = new UberVan("OJL343", new Account("Karijen 03", "ANP342"), "BMW", "E30");
$UberVan->setPassenger(6);
$UberVan->printCar();

?>