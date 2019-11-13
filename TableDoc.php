<?php


class TableDoc
{
    private string $name;
    private $dataTables;

    public function __construct($name)
    {
        $this->name = $name;
        $this->dataTables = array();
    }


}