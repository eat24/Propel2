<?php

namespace Propel\Generator\Types;

class IntegerType extends PropelType {
    public $name = 'INTEGER';
    public $phpType = 'int';
    public $pdoType = \PDO::PARAM_INT;

    /**
     * Returns whether or not the type is a numeric type.
     *
     * @return boolean
     */
    public function isNumericType() {
        return true;
    }

}
