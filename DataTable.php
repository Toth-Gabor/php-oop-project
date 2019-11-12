<?php


class DataTable
{
    private $name;
    private $dataFields;

    public function __construct($name, $size)
    {
        $this->name = $name;
        $this->dataFields = new SplFixedArray($size);
    }
}