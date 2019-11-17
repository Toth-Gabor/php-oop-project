<?php


class XmlHandler extends DataHandler
{

    function createHandler(): DataService
    {
        return new XmlService();
    }

    public function exportData(string $fileName, TableDoc $doc)
    {
        parent::exportData($fileName, $doc);
    }
}