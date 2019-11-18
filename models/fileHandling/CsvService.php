<?php


class CsvService implements DataService
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
        $data = $this->convertToArrays($tableDoc);
        $fp = fopen($name . '.csv', 'w+');

        foreach ($data as $fields) {
            fputcsv($fp, $fields);
        }

        fclose($fp);
    }

    private function convertToArrays(TableDoc $doc): array
    {
        $data = array();
        $data[] = array('tableName', 'xCoord', 'yCoord', 'value');
        $tableList = $doc->getDataTables();
        foreach ($tableList as $table){
            $fields = $table->getDatafields();
            foreach ($fields as $dataField){
                $data[] = array($table->getName(), $dataField->getXCoord(), $dataField->getYCoord(), $dataField->getValue());
            }
        }
        return $data;
    }
}