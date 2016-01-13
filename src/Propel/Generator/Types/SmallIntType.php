<?php

namespace Propel\Generator\Types;

class SmallIntType extends PropelType {
    public $name = 'SMALLINT';
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
