<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penilaian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true, 'auto_increment' => true],
            'mapel_id'          => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true],
            'siswa_id'          => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true],
            'total_nilai'       => ['type' => 'double', 'null' => true],
            'deskripsi_nilai'   => ['type' => 'text', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('mapel_id', 'mapel', 'id', 'cascade');
        $this->forge->addForeignKey('siswa_id', 'siswa', 'id', 'cascade');
        $this->forge->createTable('Penilaian');
    }

    public function down()
    {
        $this->forge->dropTable('Penilaian');
    }
}
