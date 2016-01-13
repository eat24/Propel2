<?php

namespace Propel\Generator\Types;

class DoubleType extends PropelType {
    public $name = 'DOUBLE';
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
