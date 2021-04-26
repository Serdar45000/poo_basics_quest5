<?php

require_once 'Vehicle';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() > 10) {
        return true;
        }
        return false;
    }

    public function switchOff(): bool
    {
        return false;
    }
}