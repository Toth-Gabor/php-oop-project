<?php


class TableAlreadyExistException extends Exception
{
    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct(PHP_EOL . 'This table already exists in this document!', $code, $previous);
    }

}