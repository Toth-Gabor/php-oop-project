<?php


class DataField extends Coordinates
{
    private $dataField;
    private $xCoord;
    private $yCoord;

    public function __construct($dataField, $xCoord, $yCoord)
    {
        $this->dataField = $dataField;
        $this->xCoord = $xCoord;
        $this->yCoord = $yCoord;
    }
}