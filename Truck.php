<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private string $energy;

    private int $energyLevel;

    private int $storageCapacity;

    private int $load = 0;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }

    public function fillOrFull(): string
    {
        if ($this->load < $this->storageCapacity) {
            return 'in filling';
        } elseif ($this->load == $this->storageCapacity) {
            return 'full';
        }
    }

    /**
     * Get the value of storageCapacity.
     */
    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }

    /**
     * Set the value of storageCapacity.
     *
     * @return self
     */
    public function setStorageCapacity($storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;

        return $this;
    }

    /**
     * Get the value of energyLevel.
     */
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    /**
     * Set the value of energyLevel.
     *
     * @return self
     */
    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;

        return $this;
    }

    /**
     * Get the value of energy.
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Set the value of energy.
     *
     * @return self
     */
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }

        return $this;
    }

    /**
     * Get the value of load.
     */
    public function getLoad()
    {
        return $this->load;
    }

    /**
     * Set the value of load.
     *
     * @return self
     */
    public function setLoad($load)
    {
        $this->load = $load;

        return $this;
    }
}
