<?php

namespace Propel\Generator\Types;


class Geometry extends PropelType {
    public static $name = 'Geometry';
    public static $phpType = 'resource';
    public static $pdoType = \PDO::PARAM_LOB;
}
