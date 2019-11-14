<?php


class TableNotExistException extends Exception
{
    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct(PHP_EOL . 'This table not exists in this document!', $code, $previous);
    }
}