<?php

namespace Propel\Generator\Types;

class CharType extends PropelType {
    public $name = 'CHAR';
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
