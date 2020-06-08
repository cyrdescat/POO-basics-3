<?php

require_once "classes/loadClasses.php";

$bike = new Bike("red", 1);
$skateboard = new Skateboard("grey", 1);
$car = new Car("blue", 5, "fuel");
$truck = new Truck("red", 3, "fuel", 500);

$motorWay = new MotorWay();
$residentialWay = new ResidentialWay();
$pedestrianWay = new PedestrianWay();

echo "<h3>MotorWay</h3>";
echo "On essaie d'ajouter une voiture";
$motorWay->addVehicule($car);
var_dump($motorWay->getCurrentVehicles());
echo "On essaie d'ajouter une skateboard, mais addVehicule n'accepte pas car ce n'est pas une voiture";
$motorWay->addVehicule($skateboard);
var_dump($motorWay->getCurrentVehicles());


echo "<h3>ResidentialWay</h3>";
echo "On essaie d'ajouter des vehicules, ils fonctionnent tous";
$residentialWay->addVehicule($bike);
$residentialWay->addVehicule($skateboard);
$residentialWay->addVehicule($car);
$residentialWay->addVehicule($truck);
var_dump($residentialWay->getCurrentVehicles());

echo "<h3>PedestrianWay</h3>";
echo "On peut ajouter un skateboard et un bike";
$pedestrianWay->addVehicule($bike);
$pedestrianWay->addVehicule($skateboard);
var_dump($pedestrianWay->getCurrentVehicles());
echo "On ne peut rien ajouter d'autre";
$pedestrianWay->addVehicule($car);
$pedestrianWay->addVehicule($truck);
var_dump($pedestrianWay->getCurrentVehicles());