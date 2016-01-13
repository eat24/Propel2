<?php

namespace Propel\Generator\Types;

class TimestampType extends PropelType {
    public $name = 'TIMESTAMP';
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
