<?php
include 'BaseField.php';
include 'DataField.php';
include 'DataTable.php';
include 'InvalidCoordinatesException.php';
include 'NoValueOnThisCoordinatesException.php';


$table1 = new DataTable('TestTable');
try {
    $table1->setValue(1, 1, 'text', 'string');
    $table1->setValue(3, 3, 'text2', 'string');
    $table1->setValue(4, 4, 'text3', 'string');
    print ($table1->readValue(1, 1));
    //$table1->removeValue(1, 1);
    print ($table1->readValue(1, 3));
} catch (InvalidCoordinatesException $e) {
    print ($e->getMessage());
} catch (NoValueOnThisCoordinatesException $e) {
    print ($e->getMessage());
}

$testCopyTable = $table1->copyTable($table1);
var_dump($table1->readValue(4,4));
print ('--------------------------------');
var_dump($testCopyTable->readValue(4,4));

