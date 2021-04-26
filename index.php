<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

$bike = new Bicycle('blue', 1);
$bike->setColor = 'blue';
$bike->setCurrentSpeed = 0;

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('blue', 1);
$rockrider->setColor = 'yellow';
$rockrider->setCurrentSpeed = 30;

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('blue', 1);
$tornado->setColor = 'black';
$tornado->setCurrentSpeed = 50;

echo $rockrider->forward();
echo '<br> Vitesse du vélo de couleur ' . $rockrider->setColor .' : ' . $rockrider->setCurrentSpeed . ' km/h' . '<br>';
echo $rockrider->brake();

echo $tornado->forward();
echo '<br> Vitesse du vélo de couleur  ' . $tornado->setColor .' : ' . $tornado->setCurrentSpeed . ' km/h' . '<br>';
echo $tornado->brake();

// CAR
$car = new Car('', 5, 'fuel');
$car->setColor= "white";
$car->setCurrentSpeed = 90;


$k2000 = new Car('', 2, 'electric');
$k2000->setCurrentSpeed = 300;

echo $car->forward();
echo '<br><br> Vitesse de la voiture de couleur ' . $car->setColor .' : ' . $car->setCurrentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo '<br><br><br>';

echo $k2000->forward();
echo '<br> Vitesse de k2000 : ' . $k2000->setCurrentSpeed . ' km/h' . '<br>';
echo $car->forward();
echo $car->forward();
echo $car->forward();
echo $car->forward();

//TRUCK
$truck = new Truck(100, 'white', 4, 'fuel');
$truck->setCurrentSpeed = 50;
$truck->setColor= "white";

echo '<br><br><br>';
echo $truck->forward() . ' my beautiful ' . $truck->setColor . ' truck !!<br>';


while ($truck->getMaxCapacity() > $truck->getLoadTruck()){
    echo '<br>' ;
    $truck->fill($truck);
    echo $truck->getLoadTruck() . ' kg already loaded ! <br>';
    echo $truck->forward();
    echo $truck->brake();

}

$truck->filled();
echo  '<br> I\'m stuffed !!!!';

echo  '<br><br>';

$motorWay = new MotorWay();
$motorWay->addVehicle($bike);
$motorWay->addVehicle($car);
$motorWay->addVehicle($truck);
echo var_dump($motorWay);


$residentialWay = new ResidentialWay();
$residentialWay->addVehicle($bike);
$residentialWay->addVehicle($car);
$residentialWay->addVehicle($truck);
echo var_dump($residentialWay);

$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($bike);
$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($truck);
echo var_dump($pedestrianWay);

