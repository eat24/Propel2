<?php

namespace Propel\Generator\Types;

class VarBinaryType extends PropelType {
    public $name = 'VARBINARY';
    public $phpType = 'string';
    public $pdoType = \PDO::PARAM_LOB;

    /**
     * Returns whether or not the type is a lob type.
     *
     * @return boolean
     */
    public function isLobType() {
        return true;
    }

}
