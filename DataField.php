<?php


class DataField extends BaseField
{
    private $value;

    public function __construct(int $xCoord, int $yCoord, $value)
    {
        $this->value = $value;

        parent::__construct($xCoord, $yCoord);
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
        return 'Value: ' . $this->value .
            PHP_EOL . 'X coordinate: ' . parent::getXCoord() .
            PHP_EOL . 'Y coordinate: ' . parent::getYCoord();
    }
}
