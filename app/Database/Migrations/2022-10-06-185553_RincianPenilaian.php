<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RincianPenilaian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true, 'auto_increment' => true],
            'penilaian_id'      => ['type' => 'int', 'constraint' => 11, 'null' => false, 'unsigned' => true],
            'nama_nilai'        => ['type' => 'varchar', 'constraint' => 50, 'null' => false],
            'nilai_angka'       => ['type' => 'double', 'null' => true],
            'nilai_deskripsi'   => ['type' => 'text', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('penilaian_id', 'penilaian', 'id', 'cascade');
        $this->forge->createTable('Rincian_Penilaian');
    }

    public function down()
    {
        $this->forge->dropTable('Rincian_Penilaian');
    }
}
