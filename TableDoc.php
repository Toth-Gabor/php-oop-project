<?php


class TableDoc
{
    private $name;
    private $dataTables;

    public function __construct($name)
    {
        $this->name = $name;
        $this->dataTables = array();
    }


}