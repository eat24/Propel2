<?php

namespace Propel\Generator\Types;

class FloatType extends PropelType {
    public $name = 'FLOAT';
    public $phpType = 'double';
    public $pdoType = \PDO::PARAM_STR;

    /**
     * Returns whether or not the type is a numeric type.
     *
     * @return boolean
     */
    public function isNumericType() {
        return true;
    }

}
