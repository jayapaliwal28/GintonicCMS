<?php
use Phinx\Migration\AbstractMigration;

class RenameFieldOfTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
		$table = $this->table('users');
		$table->renameColumn('validated', 'verified');
    }
}