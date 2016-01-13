<?php

namespace Propel\Generator\Types;


class Object extends PropelType {
    public static $name = 'OBJECT';
    public static $phpType = '';
    public static $pdoType = \PDO::PARAM_LOB;

    /**
     * Returns whether or not the type is a boolean type.
     *
     * @return boolean
     */
    public static function isLobType() {
        return true;
    }

}
