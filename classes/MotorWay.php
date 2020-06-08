<?php

require_once "HighWay.php";

final class MotorWay extends HighWay
{
    /**
     * @var int
     */
    private $nbLane = 4;

    /**
     * @var int
     */
    private $maxSpeed = 130;


    /**
     * @param $vehicule
     * @return $this
     */
    public function addVehicule(Vehicle $vehicule) : MotorWay
    {
        $vehicles = $this->getCurrentVehicles();

        if ($vehicule instanceof Car) {
            array_push($vehicles, $vehicule);
            $this->setCurrentVehicles($vehicles);
        }
        return $this;
    }
}