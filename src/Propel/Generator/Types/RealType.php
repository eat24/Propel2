<?php

namespace Propel\Generator\Types;

class RealType extends PropelType {
    public $name = 'REAL';
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
