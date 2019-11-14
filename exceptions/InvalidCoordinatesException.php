<?php


class InvalidCoordinatesException extends Exception
{
    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct(PHP_EOL . "The given coordinates are not valid!", $code, $previous);
    }

}