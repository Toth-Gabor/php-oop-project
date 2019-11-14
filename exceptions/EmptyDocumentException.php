<?php


class EmptyDocumentException extends Exception
{
    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct( PHP_EOL . 'The document is empty!', $code, $previous);
    }

}