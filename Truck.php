<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    protected int $maxCapacity = 500;
    protected int $loadTruck = 0;

    public function __construct(int $maxCapacity, string $color, int $nbSeats, string $energy)
    {
      parent::__construct($color, $nbSeats);
      $this->energy = $energy;
      $this->maxCapacity = $maxCapacity;
    }

    public function getMaxCapacity(): int 
    {
        return $this->maxCapacity;
    }

    public function getLoadTruck(): int
    {
        return $this->loadTruck;
        
    }
    public function setLoadTruck(int $loadTruck): void
    {
        $this->loadTruck = $loadTruck;
        
    }
    

    public function fill(Truck $loading) 
    {
      $charging = 10;
      $newMaxCapacity = $loading->getLoadTruck() + $charging; 
      $loading->setLoadTruck($newMaxCapacity);

      return $loading;  
    }

    public function filled()
    {
            return $this->getMaxCapacity();
    }

 


}