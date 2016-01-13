<?php

namespace Propel\Generator\Types;

class BlobType extends PropelType {
    public $name = 'BLOB';
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
