<?php


class XmlService implements DataService
{
    public function read()
    {
        // TODO: Implement read() method.
    }

    /**
     * @param string $name
     * @param TableDoc $tableDoc
     */
    public function write(string $name, TableDoc $tableDoc)
    {
        $xmlDoc = $this->convertToXml($tableDoc);
        //save xml file
        $file_name = str_replace(' ', '_', $name) . '_' . time() . '.xml';
        $xmlDoc->save($file_name);
    }

    /**
     * @param TableDoc $doc
     * @return DOMDocument
     */
    private function convertToXml(TableDoc $doc): DOMDocument
    {
        $xmlDoc = new DOMDocument();

        $root = $xmlDoc->appendChild($xmlDoc->createElement($doc->getName()));
        $tables = $root->appendChild($xmlDoc->createElement('tables'));
        foreach ($doc->getDataTables() as $dataTable) {
            $table = $tables->appendChild($xmlDoc->createElement('table', $dataTable->getName()));
            foreach ($dataTable->getDataFields() as $dataField) {
                $fields = $table->appendChild($xmlDoc->createElement('fields'));
                $fields->appendChild($xmlDoc->createElement('xCoord', $dataField->getXCoord()));
                $fields->appendChild($xmlDoc->createElement('yCoord', $dataField->getYCoord()));
                $fields->appendChild($xmlDoc->createElement('value', $dataField->getValue()));
            }
        }
        $xmlDoc->formatOutput = true;
        return $xmlDoc;
    }
}