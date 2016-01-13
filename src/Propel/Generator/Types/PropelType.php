<?php

namespace Propel\Generator\Types;

abstract class PropelType {
    public static $name;
    public static $phpType;
    public static $pdoType;

    private static $pdoTypeNames = [
        \PDO::PARAM_BOOL => 'PDO::PARAM_BOOL',
        \PDO::PARAM_NULL => 'PDO::PARAM_NULL',
        \PDO::PARAM_INT  => 'PDO::PARAM_INT',
        \PDO::PARAM_STR  => 'PDO::PARAM_STR',
        \PDO::PARAM_LOB  => 'PDO::PARAM_LOB',
    ];

    public static function getPhpNative() {
        return self::$phpType;
    }

    public static function getPDOType() {
        return self::$pdoType;
    }

    public static function getPdoTypeString($type) {
        return self::$pdoTypeNames[self::getPDOType()];
    }

    /**
     * Returns whether or not the type is a temporal type.
     *
     * @return boolean
     */
    public static function isTemporalType() {
        return false;
    }

    /**
     * Returns whether or not the type is a text type.
     *
     * @return boolean
     */
    public static function isTextType() {
        return false;
    }

    /**
     * Returns whether or not the type is a numeric type.
     *
     * @return boolean
     */
    public static function isNumericType() {
        return false;
    }

    /**
     * Returns whether or not this column is a boolean type.
     *
     * @return boolean
     */
    public static function isBooleanType() {
        return false;
    }

    /**
     * Returns whether or not this column is a lob/blob type.
     *
     * @return boolean
     */
    public static function isLobType() {
        return self::$pdoType === \PDO::PARAM_LOB;
    }

    /**
     * Returns whether or not a passed-in PHP type is a primitive type.
     *
     * @param  string  $phpType
     * @return boolean
     */
    public static function isPhpPrimitiveType($phpType) {
        return in_array($phpType, [ 'boolean', 'int', 'double', 'float', 'string' ]);
    }

    /**
     * Returns whether or not a passed-in PHP type is a primitive numeric type.
     *
     * @param  string  $phpType
     * @return boolean
     */
    public static function isPhpPrimitiveNumericType($phpType)
    {
        return in_array($phpType, [ 'boolean', 'int', 'double', 'float' ]);
    }

    /**
     * Returns whether or not a passed-in PHP type is an object.
     *
     * @param  string  $phpType
     * @return boolean
     */
    public static function isPhpObjectType($phpType)
    {
        return !self::isPhpPrimitiveType($phpType) && !in_array($phpType, [ 'resource', 'array' ]);
    }

    /**
     * Convenience method to indicate whether a passed-in PHP type is an array.
     *
     * @param  string  $phpType The PHP type to check
     * @return boolean
     */
    public static function isPhpArrayType($phpType)
    {
        return strtoupper($phpType) === 'ARRAY';
    }
}
