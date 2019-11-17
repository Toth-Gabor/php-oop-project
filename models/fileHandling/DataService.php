<?php


interface DataService
{
    public function read();
    public function write(string $name, TableDoc $tableDoc);
}