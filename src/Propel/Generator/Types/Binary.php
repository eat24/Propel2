<?php

namespace Propel\Generator\Types;

class Binary extends PropelType {
    public static $name = 'BINARY';
    public static $phpType = 'string';
    public static $pdoType = \PDO::PARAM_STR;
}
