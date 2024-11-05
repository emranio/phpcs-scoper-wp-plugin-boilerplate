<?php

namespace MyVendorPrefix\Illuminate\Database\PDO;

use MyVendorPrefix\Doctrine\DBAL\Driver\AbstractMySQLDriver;
use MyVendorPrefix\Illuminate\Database\PDO\Concerns\ConnectsToDatabase;
class MySqlDriver extends AbstractMySQLDriver
{
    use ConnectsToDatabase;
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_mysql';
    }
}
