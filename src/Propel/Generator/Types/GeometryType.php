<?php

namespace Propel\Generator\Types;


class GeometryType extends PropelType {
    public $name = 'Geometry';
    public $phpType = 'resource';
    public $pdoType = \PDO::PARAM_LOB;
}
