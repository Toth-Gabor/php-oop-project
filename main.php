<?php
include 'models/BaseField.php';
include 'models/DataField.php';
include 'models/DataTable.php';
include 'models/TableDoc.php';
include 'models/fileHandling/DataService.php';
include 'models/fileHandling/DataHandler.php';
include 'models/fileHandling/XmlService.php';
include 'models/fileHandling/XmlHandler.php';
include 'models/fileHandling/CsvService.php';
include 'models/fileHandling/CsvHandler.php';

include 'exceptions/InvalidCoordinatesException.php';
include 'exceptions/NoValueOnThisCoordinatesException.php';


$table1 = new DataTable('TestTable1');
$table2 = new DataTable('TestTable2');
$doc = new TableDoc('TestDoc');

// test table function and exceptions
try {
    $table1->setValue(1, 1, '123', 'integer');
    $table1->setValue(3, 3, 'text2', 'string');
    $table1->setValue(4, 4, 'text3', 'string');
    $table2->setValue(11, 11, '123', 'integer');
    $table2->setValue(33, 33, 'Hello', 'string');
    $table2->setValue(44, 44, 'Szallas.hu', 'string');
    //print ($table1->readValue(1, 1));
    //$table1->removeValue(1, 1);
    //print ($table1->readValue(1, 3));
} catch (InvalidCoordinatesException $e) {
    print ($e->getMessage());
} catch (NoValueOnThisCoordinatesException $e) {
    print ($e->getMessage());
}

/*$testCopyTable = $table1->copyTable($table1);
var_dump($table1->readValue(4,4));
print ('--------------------------------');
var_dump($testCopyTable->readValue(4,4));
$testCopyTable->setValue(1,1, 'TEST', 'string');

// test table view
print ($table1);*/

// test Document view
$doc->addTable($table1);
$doc->addTable($table2);
print ($doc);

// test save data
$xmlHandler = new XmlHandler();
$xmlHandler->exportData("test", $doc);
$csvHandler = new CsvHandler();
$csvHandler->exportData("test", $doc);


