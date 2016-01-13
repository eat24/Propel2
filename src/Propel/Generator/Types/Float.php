<?php

namespace Propel\Generator\Types;

class Float extends PropelType {
    public static $name = 'FLOAT';
    public static $phpType = 'double';
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
