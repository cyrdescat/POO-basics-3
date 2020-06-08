<?php

require_once "HighWay.php";

final class ResidentialWay extends HighWay
{
    /**
     * @var int
     */
    private $nbLane = 2;

    /**
     * @var int
     */
    private $maxSpeed = 50;


    /**
     * @param $vehicule
     * @return $this
     */
    public function addVehicule(Vehicle $vehicule) : ResidentialWay
    {
        $vehicles = $this->getCurrentVehicles();

        if ($vehicule instanceof Vehicle) {
            array_push($vehicles, $vehicule);
            $this->setCurrentVehicles($vehicles);
        }
        return $this;
    }
}