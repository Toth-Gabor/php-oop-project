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

    public function __construct($name)
    {
        $this->name = $name;
        $this->dataFields = array();
    }

    public function setValue(int $x, int $y, $value, $type)
    {
        if ($this->isValidCoord($x, $y)) {
            if (in_array($type, $this->typeList)) {
                $this->dataFields[$x . ':' . $y] = new DataField($x, $y, settype($value, $type));
            } else {
                $this->dataFields[$x . ':' . $y] = new DataField($x, $y, $value);
            }
        } else {
            throw new InvalidCoordinatesException();
        }
    }

    public function readValue(int $x, int $y)
    {
        if ($this->isValidCoord($x, $y)) {
            if (isset($this->dataFields[$x . ':' . $y])) {
                return $this->dataFields[$x . ':' . $y];
            } else {
                throw new NoValueOnThisCoordinatesException();
            }
        } else {
            throw new InvalidCoordinatesException();
        }
    }

    public function copyTable(DataTable $table)
    {
        return clone $table;
    }

    public function removeValue(int $x, int $y)
    {
        if ($this->isValidCoord($x, $y)) {
            unset($this->dataFields[$x . ':' . $y]);
        } else {
            throw new InvalidCoordinatesException();
        }
    }

    private function isValidCoord(int $x, int $y): bool
    {
        if ($x <= 0 || $y <= 0) {
            return false;
        }
        return true;
    }


}