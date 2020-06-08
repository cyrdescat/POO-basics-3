<?php

require_once "HighWay.php";

final class PedestrianWay extends HighWay
{
    /**
     * @var int
     */
    private $nbLane = 1;

    /**
     * @var int
     */
    private $maxSpeed = 10;


    /**
     * @param $vehicule
     * @return $this
     */
    public function addVehicule(Vehicle $vehicule) : PedestrianWay
    {
        $vehicles = $this->getCurrentVehicles();

        if ($vehicule instanceof Skateboard || $vehicule instanceof Bike) {
            array_push($vehicles, $vehicule);
            $this->setCurrentVehicles($vehicles);
        }
        return $this;
    }

}