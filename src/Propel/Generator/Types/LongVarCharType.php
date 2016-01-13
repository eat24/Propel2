<?php

namespace Propel\Generator\Types;

class LongVarCharType extends PropelType {
    public $name = 'LONGVARCHAR';
    public $phpType = 'string';
    public $pdoType = \PDO::PARAM_STR;

    /**
     * Returns whether or not the type is a text type.
     *
     * @return boolean
     */
    public function isTextType() {
        return true;
    }
}
