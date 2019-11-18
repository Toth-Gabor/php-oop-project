<?php


class DateField extends Field
{
    /**
     * @var DateTime
     */
    protected $value;

    /**
     * DateField constructor.
     * @param int $xCoord
     * @param int $yCoord
     * @param DateTime $value
     */
    public function __construct(int $xCoord, int $yCoord, DateTime $value)
    {
        parent::__construct($xCoord, $yCoord, $value, 'DateField');
    }

    public function getValue(): string
    {
        return $this->value->format('Y-m-d');
    }


}