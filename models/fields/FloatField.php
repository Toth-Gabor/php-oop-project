<?php


class FloatField extends Field
{
    /**
     * @var float
     */
    protected $value;

    /**
     * FloatField constructor.
     * @param int $xCoord
     * @param int $yCoord
     * @param float $value
     */
    public function __construct(int $xCoord, int $yCoord, float $value)
    {
        parent::__construct($xCoord, $yCoord, $value);
    }
}