<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendidikan_Guru extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true, 'auto_increment' => true],
            'pegawai_id'    => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true],
            'jenjang'       => ['type' => 'varchar', 'constraint' => 25, 'null' => false],
            'jurusan'       => ['type' => 'varchar', 'constraint' => 70, 'null' => true],
            'asal_sekolah'  => ['type' => 'varchar', 'constraint' => 100, 'null' => true],
            'tahun_lulus'   => ['type' => 'year', 'constraint' => 4, 'null' => true],
            'nilai_ijasah'  => ['type' => 'double', 'null' => true],

        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('pegawai_id', 'pegawai', 'id', 'cascade');
        $this->forge->createTable('Pendidikan_Guru');
    }

    public function down()
    {
        $this->forge->dropTable('Pendidikan_Guru');
    }
}
