<?php

namespace Propel\Generator\Types;

class LongVarChar extends PropelType {
    public static $name = 'VARCHAR';
    public static $phpType = 'string';
    public static $pdoType = \PDO::PARAM_STR;

    /**
     * Returns whether or not the type is a text type.
     *
     * @return boolean
     */
    public static function isTextType() {
        return true;
    }
}
