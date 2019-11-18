<?php


class IntegerField extends Field
{
    /**
     * @var int
     */
    protected $value;

    /**
     * IntegerField constructor.
     * @param int $xCoord
     * @param int $yCoord
     * @param int $value
     */
    public function __construct(int $xCoord, int $yCoord, int $value)
    {
        parent::__construct($xCoord, $yCoord, $value, 'IntegerField');
    }
}