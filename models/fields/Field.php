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

    protected $type;

    /**
     * Field constructor.
     * @param int $xCoord
     * @param int $yCoord
     * @param $value
     * @param string $type
     */
    public function __construct(int $xCoord, int $yCoord, $value, string $type = 'Field')
    {
        $this->xCoord = $xCoord;
        $this->yCoord = $yCoord;
        $this->value = $value;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getTypeOfClass(): string
    {
        return $this->type;
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
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString()
    {


        return '    Value: ' . $this->getValue() .
            PHP_EOL . '    Type: ' . $this->getTypeOfClass() .
            PHP_EOL . '    X coordinate: ' . $this->getXCoord() .
            PHP_EOL . '    Y coordinate: ' . $this->getYCoord() . PHP_EOL;
    }

}