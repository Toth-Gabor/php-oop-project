<?php


class CsvHandler extends DataHandler
{

    function createHandler(): DataService
    {
        return new CsvService();
    }

    public function exportData(string $fileName, TableDoc $doc)
    {
        parent::exportData($fileName, $doc);
    }
}