<?php

namespace Propel\Generator\Types;

class BinaryType extends PropelType {
    public $name = 'BINARY';
    public $phpType = 'string';
    public $pdoType = \PDO::PARAM_STR;
}
