<?php

namespace Propel\Generator\Types;


class EnumType extends PropelType {
    public $name = 'ENUM';
    public $phpType = 'int';
    public $pdoType = \PDO::PARAM_INT;
}
