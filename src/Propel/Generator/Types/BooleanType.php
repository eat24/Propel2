<?php

namespace Propel\Generator\Types;

class BooleanType extends PropelType {
    public $name = 'BOOLEAN';
    public $phpType = 'boolean';
    public $pdoType = \PDO::PARAM_BOOL;

    /**
     * Returns whether or not the type is a boolean type.
     *
     * @return boolean
     */
    public function isBooleanType() {
        return true;
    }

}
