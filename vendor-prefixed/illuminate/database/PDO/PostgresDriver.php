<?php

namespace MyVendorPrefix\Illuminate\Database\PDO;

use MyVendorPrefix\Doctrine\DBAL\Driver\AbstractPostgreSQLDriver;
use MyVendorPrefix\Illuminate\Database\PDO\Concerns\ConnectsToDatabase;
class PostgresDriver extends AbstractPostgreSQLDriver
{
    use ConnectsToDatabase;
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_pgsql';
    }
}
