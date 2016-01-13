<?php

namespace Propel\Generator\Types;

class TinyInt extends PropelType {
    public static $name = 'TINYINT';
    public static $phpType = 'int';
    public static $pdoType = \PDO::PARAM_INT;

    /**
     * Returns whether or not the type is a numeric type.
     *
     * @return boolean
     */
    public static function isNumericType() {
        return true;
    }

}
