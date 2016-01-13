<?php

namespace Propel\Generator\Types;

class SmallInt extends PropelType {
    public static $name = 'SMALLINT';
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
