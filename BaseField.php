<?php

abstract class BaseField
{
    private $xCoord;
    private $yCoord;

    public function __construct($xCoord, $yCoord)
    {
        $this->xCoord = $xCoord;
        $this->yCoord = $yCoord;
    }

    /**
     * @return int
     */
    public function getXCoord(): int
    {
        return $this->xCoord;
    }

    /**
     * @return int
     */
    public function getYCoord(): int
    {
        return $this->yCoord;
    }


}