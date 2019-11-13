<?php


class NoValueOnThisCoordinatesException extends Exception
{
    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct("There is'nt any data on the given coordinates!", $code, $previous);
    }

}