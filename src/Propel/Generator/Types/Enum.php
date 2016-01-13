<?php

namespace Propel\Generator\Types;


class Enum extends PropelType {
    public static $name = 'Enum';
    public static $phpType = 'int';
    public static $pdoType = \PDO::PARAM_INT;
}
