<?php

class FieldFinder
{
    /**
     * @var TableDoc
     */
    private $tableDoc;


    /**
     * FieldFinder constructor.
     * @param $tableDoc
     */
    public function __construct(TableDoc $tableDoc)
    {
        $this->tableDoc = $tableDoc;
    }

    /**
     * @return TableDoc
     */
    public function getTableDoc(): TableDoc
    {
        return $this->tableDoc;
    }

    /**
     * @param $value|$field
     * @return array Field
     */
    public function findFields($value): array
    {
        $foundFields = [];
        $inputType = $this->getInputType($value);
        foreach ($this->getTableDoc()->getDataFields() as $field){
            var_dump('Type of field: ' . $field->getValueType() . '  Input type: ' . $inputType);

            if (($field->getValueType() === $inputType && $value === $field->getValue())
                || ($this->stringContains($value, $field->getValue()))
            ){
                $foundFields[] = $field;
            }
        }
        return $foundFields;
    }

    /**
     * @param $input
     * @return string
     */
    private function getInputType($input): string
    {
        if ($input instanceof DateTime){
            return 'date';
        } else {
            return gettype($input);
        }
    }

    /**
     * @param string $str
     * @param string $target
     * @return bool
     */
    public function stringContains(string $str, string $target): bool
    {
        return strpos($target, $str) !== false;
    }
}