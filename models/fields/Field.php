<?php

class Field
{
    /**
     * @var int
     */
    protected $xCoord;

    /**
     * @var int
     */
    protected $yCoord;

    /**
     * @var
     */
    protected $value;

    /**
     * Field constructor.
     * @param int $xCoord
     * @param int $yCoord
     * @param $value
     */
    public function __construct(int $xCoord, int $yCoord, $value)
    {
        $this->xCoord = $xCoord;
        $this->yCoord = $yCoord;
        $this->value = $value;
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

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    public function __toString()
    {
        $value = (is_a($this->getValue(), 'DateTimeImmutable')) ? $this->getValue()->format('Y-m-d'): $this->getValue();
        $type = (is_a($this->getValue(), 'DateTimeImmutable')) ? get_class($this->getValue()): gettype($this->getValue());

        return '    Value: ' . $value .
            PHP_EOL . '    Type: ' . $type .
            PHP_EOL . '    X coordinate: ' . $this->getXCoord() .
            PHP_EOL . '    Y coordinate: ' . $this->getYCoord() . PHP_EOL;
    }

}