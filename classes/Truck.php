<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = ["fuel", "electric"];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var int
     */
    private $storage = 0;

    /**
     * @var int
     */
    private $max_storage;

    public function __construct(string $color, int $nbSeats, string $energy, int $max_storage)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->max_storage = $max_storage;
    }

    /**
     * @return string
     */
    public function isFull() : string
    {
        if ($this->storage >= $this->max_storage) {
            return ("full");
        } else {
            return ("in filling");
        }
    }

    /**
     * @return string
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     * @return $this|Car
     */
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * @return int
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * @param int $storage
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;
    }

    /**
     * @return int
     */
    public function getMaxStorage()
    {
        return $this->max_storage;
    }

    /**
     * @param int $max_storage
     */
    public function setMaxStorage($max_storage)
    {
        $this->max_storage = $max_storage;
    }



}