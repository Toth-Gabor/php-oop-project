<?php


class DataTable
{
    private $name;
    private $dataFields;
    private const DATE_TIME = 'date';
    private const INTEGER = 'integer';
    private const STRING = 'string';
    private const FRACTION = 'double';
    private $typeList = array(self::DATE_TIME, self::STRING, self::INTEGER, self::FRACTION);

    public function __construct($name, $size)
    {
        $this->name = $name;
        $this->dataFields = new SplFixedArray($size);
    }
}