<?php

namespace Propel\Generator\Types;

class TimestampTzType extends PropelType {
    public $name = 'TIMESTAMPTZ';
    public $phpType = 'string';
    public $pdoType = \PDO::PARAM_STR;

    /**
     * Returns whether or not the type is a temporal type.
     *
     * @return boolean
     */
    public function isTemporalType() {
        return true;
    }

}
