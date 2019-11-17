<?php

abstract class DataHandler
{
    abstract function createHandler(): DataService;

    public function exportData(string $fileName, TableDoc $doc)
    {
        $fileHandler = $this->createHandler();

        $fileHandler->write($fileName, $doc);
    }

    public function importData()
    {

    }

}