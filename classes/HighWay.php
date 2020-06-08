<?php


abstract class HighWay
{
    /**
     * @var array
     */
    private $currentVehicles = [];

    /**
     * @var int
     */
    private $nbLane;

    /**
     * @var int
     */
    private $maxSpeed;


    abstract public function addVehicule(Vehicle $vehicule) : self;

    /**
     * @return array
     */
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * @param array $currentVehicles
     */
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;
    }

    /**
     * @return int
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }



}