<?php

namespace Propel\Generator\Types;

class NumericType extends PropelType {
    public $name = 'NUMERIC';
    public $phpType = 'string';
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
