<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true, 'auto_increment' => true],
            'hari'          => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true],
            'kelas_id'      => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true],
            'mapel_id'      => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true],
            'jam_mulai'     => ['type' => 'time', 'null' => true],
            'jam_selesai'   => ['type' => 'time', 'null' => true],
            'pegawai_id'    => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('kelas_id', 'kelas', 'id', 'cascade');
        $this->forge->addForeignKey('mapel_id', 'mapel', 'id', 'cascade');
        $this->forge->addForeignKey('pegawai_id', 'pegawai', 'id', 'cascade');
        $this->forge->createTable('Jadwal');
    }

    public function down()
    {
        $this->forge->dropTable('Jadwal');
    }
}
