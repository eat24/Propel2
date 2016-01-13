<?php

namespace Propel\Generator\Types;

class ArrayType extends PropelType {
    public $name = 'ARRAY';
    public $phpType = 'array';
    public $pdoType = \PDO::PARAM_STR;
}
