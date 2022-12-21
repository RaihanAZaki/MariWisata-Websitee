<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterContact extends Migration
{
	public function up()
	{
		$this->forge->addColumn('contact', [
			'slug VARCHAR(100) UNIQUE'
		]);
	}

	//--------------------------------------------------------

	public function down()
	{
		$this->forge->dropColumn('contact', 'slug');
	}
}