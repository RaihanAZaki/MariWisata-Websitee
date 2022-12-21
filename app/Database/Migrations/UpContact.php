<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpContact extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 3,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50'
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50'
            ],
            'telp'      => [
                'type'           => 'INT',
                'constraint'     => 15,
            ],
            'message'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel karyawan
        $this->forge->createTable('contact-us', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        // menghapus tabel karyawan
        $this->forge->dropTable('contact-us');
    }
}
