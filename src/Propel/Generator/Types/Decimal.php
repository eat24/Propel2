<?php

namespace Propel\Generator\Types;

class Decimal extends PropelType {
    public static $name = 'DECIMAL';
    public static $phpType = 'string';
    public static $pdoType = \PDO::PARAM_STR;

    /**
     * Returns whether or not the type is a numeric type.
     *
     * @return boolean
     */
    public static function isNumericType() {
        return true;
    }

}
