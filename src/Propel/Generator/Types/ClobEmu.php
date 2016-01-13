<?php

namespace Propel\Generator\Types;

class ClobEmu extends PropelType {
    public static $name = 'CLOB_EMU';
    public static $phpType = 'resource';
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
