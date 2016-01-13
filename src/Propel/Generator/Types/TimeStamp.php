<?php

namespace Propel\Generator\Types;

class Timestamp extends PropelType {
    public static $name = 'TIMESTAMP';
    public static $phpType = 'string';
    public static $pdoType = \PDO::PARAM_STRING;

    /**
     * Returns whether or not the type is a temporal type.
     *
     * @return boolean
     */
    public static function isTemporalType() {
        return true;
    }

}
