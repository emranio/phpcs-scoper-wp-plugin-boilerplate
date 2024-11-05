<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */
namespace MyVendorPrefix\Phinx\Db\Action;

use MyVendorPrefix\Phinx\Db\Table\Table;
class RenameTable extends Action
{
    /**
     * The new name for the table
     *
     * @var string
     */
    protected $newName;
    /**
     * Constructor
     *
     * @param \Phinx\Db\Table\Table $table The table to be renamed
     * @param mixed $newName The new name for the table
     */
    public function __construct(Table $table, $newName)
    {
        parent::__construct($table);
        $this->newName = $newName;
    }
    /**
     * Return the new name for the table
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName;
    }
}