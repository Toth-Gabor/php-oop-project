<?php


class DocumentHasher
{
    const HASHTYPES = array('md5', 'sha256', 'sha512');

    /**
     * @param TableDoc $tableDoc
     * @param string $algo
     * @return string
     * @throws Exception
     */
    public function docHash(TableDoc $tableDoc, string $algo = 'md5'): string
    {
        if ($this->validateInput($algo)) {
            return hash($algo, json_encode($tableDoc));
        } else {
            throw new Exception('Wrong type of algorithm given!');
        }
    }

    /**
     * @param string $input
     * @return bool
     */
    private function validateInput(string $input): bool
    {
        return in_array($input, self::HASHTYPES);
    }

}