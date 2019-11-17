<?php


class StringField extends Field
{
    /**
     * @string
     */
    protected $value;

    /**
     * StringField constructor.
     * @param int $xCoord
     * @param int $yCoord
     * @param string $value
     */
    public function __construct(int $xCoord, int $yCoord, string $value)
    {
        parent::__construct($xCoord, $yCoord, $value);
    }

}
