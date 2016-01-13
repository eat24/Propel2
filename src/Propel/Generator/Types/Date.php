<?php

namespace Propel\Generator\Types;

class Date extends PropelType {
    public static $name = 'DATE';
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
