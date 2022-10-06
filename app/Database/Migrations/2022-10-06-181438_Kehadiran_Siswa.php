<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kehadiran_Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true, 'auto_increment' => true],
            'kehadiran_guru_id' => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true],
            'siswa_id'          => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true],
            'status_hadir'      => ['type' => 'enum("Y","T")', 'default(Y)', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('kehadiran_guru_id', 'KehadiranGuru', 'id', 'cascade');
        $this->forge->addForeignKey('siswa_id', 'siswa', 'id', 'cascade');
        $this->forge->createTable('Kehadiran_Siswa');
    }

    public function down()
    {
        $this->forge->dropTable('Kehadiran_Siswa');
    }
}
