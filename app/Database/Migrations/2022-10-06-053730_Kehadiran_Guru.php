<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kehadiran_Guru extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true, 'auto_increment' => true],
            'waktu_masuk'   => ['type' => 'datetime', 'null' => true],
            'waktu_keluar'  => ['type' => 'datetime', 'null' => true],
            'pertemuan'     => ['type' => 'tinyint', 'constraint' => 3, 'null' => true],
            'pegawai_id'    => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true],
            'jadwal_id'     => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true],
            'berita_acara'  => ['type' => 'text', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('pegawai_id', 'pegawai', 'id', 'cascade');
        $this->forge->addForeignKey('jadwal_id', 'jadwal', 'id', 'cascade');
        $this->forge->createTable('Kehadiran_Guru');
    }

    public function down()
    {
        $this->forge->dropTable('Kehadiran_Guru');
    }
}
