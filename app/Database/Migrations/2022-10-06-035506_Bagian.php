<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bagian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true, 'auto_increment' => true],
            'nama'          => ['type' => 'varchar', 'constraint' => 60, 'null' => false],
            'fungsi'        => ['type' => 'text', 'null' => true],
            'tugas_pokok'   => ['type' => 'text', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Bagian');
    }

    public function down()
    {
        $this->forge->dropTable('Bagian');
    }
}
