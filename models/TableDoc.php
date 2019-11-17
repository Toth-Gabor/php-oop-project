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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return DataTable[]
     */
    public function getDataTables(): array
    {
        return $this->dataTables;
    }

    public function addTable(DataTable $table)
    {
        if (!$this->isExist($table)) {
            $this->dataTables[$table->getName()] = $table;
        } else {
            throw new TableAlreadyExistException();
        }
    }

    public function removeTable(DataTable $table)
    {
        if ($this->isExist($table)) {
            unset($this->dataTables[$table->getName()]);
        } else {
            throw new TableNotExistException();
        }
    }

    /**
     * @param DataTable $table
     * @return DataTable[]
     * @throws TableNotExistException
     */
    public function readTable(DataTable $table): array
    {
        if ($this->isExist($table)) {
            return $this->dataTables[$table->getName()];
        } else {
            throw new TableNotExistException();
        }
    }

    /**
     * @return DataTable[]
     * @throws EmptyDocumentException
     */
    public function readAllTable(): array
    {
        if (sizeof($this->dataTables) > 0) {
            return $this->dataTables;
        } else {
            throw new EmptyDocumentException();
        }
    }

    private function isExist(DataTable $table)
    {
        if (isset($dataTables[$table->getName()])) {
            return true;
        }
        return false;
    }

    public function __toString()
    {
        $doc = 'Documentum name: ' . $this->getName();
        foreach ($this->dataTables as $key => $value) {
            $doc .= PHP_EOL . ' ' .$value;
        }
        return $doc;
    }




}