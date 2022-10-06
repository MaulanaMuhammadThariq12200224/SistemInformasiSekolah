<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mapel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true, 'auto_increment' => true],
            'mapel'         => ['type' => 'varchar', 'constraint' => 50, 'null' => true],
            'kelompok'      => ['type' => 'enum("A","B")', 'null' => true],
            'keterangan'    => ['type' => 'text', 'null' => true],
            'tingkat'       => ['type' => 'tinyint', 'constraint' => 4, 'null' => true],
            'kkm'           => ['type' => 'tinyint', 'constraint' => 4, 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Mapel');
    }

    public function down()
    {
        $this->forge->dropTable('Mapel');
    }
}
