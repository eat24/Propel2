<?php

namespace Propel\Generator\Types;

class TinyIntType extends PropelType {
    public $name = 'TINYINT';
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
