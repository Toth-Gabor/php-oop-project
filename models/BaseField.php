<?php

abstract class BaseField
{
    /**
     * @var int
     */
    protected $xCoord;

    /**
     * @var int
     */
    protected $yCoord;

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