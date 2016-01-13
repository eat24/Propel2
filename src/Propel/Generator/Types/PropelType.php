<?php

namespace Propel\Generator\Types;

abstract class PropelType {
    public $name;
    public $phpType;
    public $pdoType;

    private static $pdoTypeNames = [
        \PDO::PARAM_BOOL => 'PDO::PARAM_BOOL',
        \PDO::PARAM_NULL => 'PDO::PARAM_NULL',
        \PDO::PARAM_INT  => 'PDO::PARAM_INT',
        \PDO::PARAM_STR  => 'PDO::PARAM_STR',
        \PDO::PARAM_LOB  => 'PDO::PARAM_LOB',
    ];

    public function getName() {
        return $this->name;
    }

    public function getPhpNativeType() {
        return $this->phpType;
    }

    public function getPDOType() {
        return $this->$pdoType;
    }

    public function getPdoTypeString() {
        return self::$pdoTypeNames[$this->getPDOType()];
    }

    /**
     * Returns whether or not the type is a temporal type.
     *
     * @return boolean
     */
    public function isTemporalType() {
        return false;
    }

    /**
     * Returns whether or not the type is a text type.
     *
     * @return boolean
     */
    public function isTextType() {
        return false;
    }

    /**
     * Returns whether or not the type is a numeric type.
     *
     * @return boolean
     */
    public function isNumericType() {
        return false;
    }

    /**
     * Returns whether or not this column is a boolean type.
     *
     * @return boolean
     */
    public function isBooleanType() {
        return false;
    }

    /**
     * Returns whether or not this column is a lob/blob type.
     *
     * @return boolean
     */
    public function isLobType() {
        return self::$pdoType === \PDO::PARAM_LOB;
    }

    /**
     * Returns whether or not a passed-in PHP type is a primitive type.
     *
     * @param  string  $phpType
     * @return boolean
     */
    public function isPhpPrimitiveType() {
        return in_array(
            $this->getPhpNativeType(),
            ['boolean', 'int', 'double', 'float', 'string']
        );
    }

    /**
     * Returns whether or not a passed-in PHP type is a primitive numeric type.
     *
     * @param  string  $phpType
     * @return boolean
     */
    public function isPhpPrimitiveNumericType($phpType)
    {
        return in_array(
            $this->getPhpNativeType(),
            ['boolean', 'int', 'double', 'float']
        );
    }

    /**
     * Returns whether or not a passed-in PHP type is an object.
     *
     * @param  string  $phpType
     * @return boolean
     */
    public function isPhpObjectType()
    {
        return !$this->isPhpPrimitiveType() && !in_array($this->getPhpNativeType(), ['resource', 'array']);
    }

    /**
     * Convenience method to indicate whether a passed-in PHP type is an array.
     *
     * @param  string  $phpType The PHP type to check
     * @return boolean
     */
    public function isPhpArrayType($phpType)
    {
        return strtoupper($phpType) === 'ARRAY';
    }

    public function isArrayType() {
        return false;
    }

    public function isEnumType() {
        return false;
    }
}
