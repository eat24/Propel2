<?php

namespace Propel\Generator\Types;

class DecimalType extends PropelType {
    public $name = 'DECIMAL';
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
