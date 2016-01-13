<?php

namespace Propel\Generator\Types;

class BigInt extends PropelType {
    public static $name = 'BIGINT';
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
