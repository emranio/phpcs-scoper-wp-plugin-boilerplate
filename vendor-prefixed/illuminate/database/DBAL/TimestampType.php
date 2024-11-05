<?php

namespace MyVendorPrefix\Illuminate\Database\DBAL;

use MyVendorPrefix\Doctrine\DBAL\Exception as DBALException;
use MyVendorPrefix\Doctrine\DBAL\Platforms\AbstractPlatform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\MariaDb1010Platform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\MariaDb1027Platform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\MariaDb1052Platform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\MariaDb1060Platform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\MariaDBPlatform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\MySQL57Platform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\MySQL80Platform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\MySQL84Platform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\MySQLPlatform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\PostgreSQL100Platform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\PostgreSQL120Platform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\PostgreSQL94Platform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\PostgreSQLPlatform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\SqlitePlatform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\SQLServer2012Platform;
use MyVendorPrefix\Doctrine\DBAL\Platforms\SQLServerPlatform;
use MyVendorPrefix\Doctrine\DBAL\Types\PhpDateTimeMappingType;
use MyVendorPrefix\Doctrine\DBAL\Types\Type;
class TimestampType extends Type implements PhpDateTimeMappingType
{
    /**
     * {@inheritdoc}
     *
     * @throws DBALException
     */
    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        return match (get_class($platform)) {
            MySQLPlatform::class, MySQL57Platform::class, MySQL80Platform::class, MySQL84Platform::class, MariaDBPlatform::class, MariaDb1027Platform::class, MariaDb1052Platform::class, MariaDb1060Platform::class, MariaDb1010Platform::class => $this->getMySqlPlatformSQLDeclaration($column),
            PostgreSQLPlatform::class, PostgreSQL94Platform::class, PostgreSQL100Platform::class, PostgreSQL120Platform::class => $this->getPostgresPlatformSQLDeclaration($column),
            SQLServerPlatform::class, SQLServer2012Platform::class => $this->getSqlServerPlatformSQLDeclaration($column),
            SqlitePlatform::class => 'DATETIME',
            default => throw new DBALException('Invalid platform: ' . substr(strrchr(get_class($platform), '\\'), 1)),
        };
    }
    /**
     * Get the SQL declaration for MySQL.
     *
     * @param  array  $column
     * @return string
     */
    protected function getMySqlPlatformSQLDeclaration(array $column): string
    {
        $columnType = 'TIMESTAMP';
        if ($column['precision']) {
            $columnType = 'TIMESTAMP(' . min((int) $column['precision'], 6) . ')';
        }
        $notNull = $column['notnull'] ?? \false;
        if (!$notNull) {
            return $columnType . ' NULL';
        }
        return $columnType;
    }
    /**
     * Get the SQL declaration for PostgreSQL.
     *
     * @param  array  $column
     * @return string
     */
    protected function getPostgresPlatformSQLDeclaration(array $column): string
    {
        return 'TIMESTAMP(' . min((int) $column['precision'], 6) . ')';
    }
    /**
     * Get the SQL declaration for SQL Server.
     *
     * @param  array  $column
     * @return string
     */
    protected function getSqlServerPlatformSQLDeclaration(array $column): string
    {
        return $column['precision'] ?? \false ? 'DATETIME2(' . min((int) $column['precision'], 7) . ')' : 'DATETIME';
    }
    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getName()
    {
        return 'timestamp';
    }
}
