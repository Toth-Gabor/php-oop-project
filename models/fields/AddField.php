<?php


class AddField
{
    /**
     * @param int $xCoord
     * @param int $yCoord
     * @param $value
     * @param string $type
     * @return DateField|Field|FloatField|IntegerField|StringField
     */
    public static function setField(int $xCoord, int $yCoord, $value, string $type)
    {
        switch ($type) {
            case 'integer':
                return new IntegerField($xCoord, $yCoord, $value);
                break;
            case 'string':
                return new StringField($xCoord, $yCoord, $value);
                break;
            case 'date':
                return new DateField($xCoord, $yCoord, $value);
                break;
            case 'float':
                return new FloatField($xCoord, $yCoord, $value);
                break;
            default:
                return new Field($xCoord, $yCoord, $value);
                break;

        }
    }
}