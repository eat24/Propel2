<?php

namespace Propel\Generator\Types;

class ObjectType extends PropelType {
    public $name = 'OBJECT';
    public $phpType = '';
    public $pdoType = \PDO::PARAM_LOB;

    /**
     * Returns whether or not the type is a boolean type.
     *
     * @return boolean
     */
    public function isLobType() {
        return true;
    }

}
