<?php

namespace Propel\Generator\Types;

class Char extends PropelType {
    public static $name = 'CHAR';
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
