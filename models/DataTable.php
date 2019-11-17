<?php


class DataTable
{
    private $name;
    private $dataFields;

    public function __construct($name)
    {
        $this->name = $name . ':' . uniqid() . time();
        $this->dataFields = array();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Field[]
     */
    public function getDataFields(): array
    {
        return $this->dataFields;
    }

    public function setValue(int $x, int $y, $value, $type)
    {
        if ($this->isValidCoord($x, $y)) {
            $this->dataFields[$x . ':' . $y] = AddField::setField($x, $y, $value, $type);
        } else {
            throw new InvalidCoordinatesException();
        }
    }

    public function readValue(int $x, int $y)
    {
        if ($this->isValidCoord($x, $y)) {
            if (isset($this->dataFields[$x . ':' . $y])) {
                return $this->dataFields[$x . ':' . $y]->getvalue();
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

    public function __toString()
    {
        $count = 1;
        $table = ' Table name: ' . $this->name . PHP_EOL;
        foreach ($this->dataFields as $key => $value) {
            $table .= '   Field ' . $count .  PHP_EOL . $value;
            $count++;
        }
        return $table;

    }


}