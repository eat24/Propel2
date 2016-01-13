<?php

namespace Propel\Generator\Types;

class ClobEmuType extends PropelType {
    public $name = 'CLOB_EMU';
    public $phpType = 'resource';
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
