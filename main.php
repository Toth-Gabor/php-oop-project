<?php
include 'BaseField.php';
include 'DataField.php';
include 'DataTable.php';
include 'InvalidCoordinatesException.php';


$test1 = new DataField(1,2,'Data1');
$test2 = new DataField(9,3,'Data2');
$test3 = new DataField(6,4,'Data3');

$table1 = new DataTable('TestTable');
$table1->setValue(1,1, 'text', 'string');
print ($table1->readValue(1,1));
$table1->removeValue(1,1);

try {
    print ($table1->readValue(1, 3));
} catch (InvalidCoordinatesException $e) {
    print ($e->getMessage());
}
