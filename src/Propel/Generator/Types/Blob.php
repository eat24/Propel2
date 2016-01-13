<?php

namespace Propel\Generator\Types;

class Blob extends PropelType {
    public static $name = 'BLOB';
    public static $phpType = 'string';
    public static $pdoType = \PDO::PARAM_LOB;

    /**
     * Returns whether or not the type is a lob type.
     *
     * @return boolean
     */
    public static function isLobType() {
        return true;
    }

}
