<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true, 'auto_increment' => true],
            'tingkat'           => ['type' => 'tinyint', 'constraint' => 3, 'null' => false, 'unsigned' => true],
            'kelas'             => ['type' => 'char', 'constraint' => 1, 'null' => true],
            'pegawai_id'        => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true],
            'tahun_ajaran_id'   => ['type' => 'int', 'constraint' => 11, 'null' => false, 'unsigned' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('pegawai_id', 'pegawai', 'id', 'cascade');
        $this->forge->addForeignKey('tahun_ajaran_id', 'tahun_ajaran', 'id', 'cascade');
        $this->forge->createTable('Kelas');
    }

    public function down()
    {
        $this->forge->dropTable('Kelas');
    }
}
