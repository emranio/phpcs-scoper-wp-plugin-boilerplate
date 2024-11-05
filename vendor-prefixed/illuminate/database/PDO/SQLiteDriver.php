<?php

namespace MyVendorPrefix\Illuminate\Database\PDO;

use MyVendorPrefix\Doctrine\DBAL\Driver\AbstractSQLiteDriver;
use MyVendorPrefix\Illuminate\Database\PDO\Concerns\ConnectsToDatabase;
class SQLiteDriver extends AbstractSQLiteDriver
{
    use ConnectsToDatabase;
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_sqlite';
    }
}
