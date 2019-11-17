<?php


class DateField extends Field
{
    /**
     * @var DateTimeImmutable
     */
    protected $value;

    /**
     * DateField constructor.
     * @param int $xCoord
     * @param int $yCoord
     * @param DateTimeImmutable $value
     */
    public function __construct(int $xCoord, int $yCoord, DateTimeImmutable $value)
    {
        parent::__construct($xCoord, $yCoord, $value);
    }
}