<?php

class Field
{
    const TYPE_INT = 'integer';
    const TYPE_DATE = 'date';
    const TYPE_STRING = 'string';
    const TYPE_MIXED = 'mixed';
    const TYPE_FLOAT = 'double';

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
    public function __construct(int $xCoord, int $yCoord, $value, string $type = self::TYPE_MIXED)
    {
        $this->xCoord = $xCoord;
        $this->yCoord = $yCoord;
        $this->value = $value;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getValueType(): string
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

    public static function getTypes(): array
    {
        return [
            self::TYPE_INT,
            self::TYPE_FLOAT,
            self::TYPE_DATE,
            self::TYPE_MIXED,
            self::TYPE_STRING,
        ];
    }

    public function __toString()
    {


        return '    Value: ' . $this->getValue() .
            PHP_EOL . '    Type: ' . $this->getValueType() .
            PHP_EOL . '    X coordinate: ' . $this->getXCoord() .
            PHP_EOL . '    Y coordinate: ' . $this->getYCoord() . PHP_EOL;
    }

}