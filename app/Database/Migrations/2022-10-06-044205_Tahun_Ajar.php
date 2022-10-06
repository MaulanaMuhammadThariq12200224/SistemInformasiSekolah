<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tahun_Ajar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsgined' => true, 'auto_increment' => true],
            'tahun_ajaran'  => ['type' => 'varchar', 'constraint' => 9, 'null' => false],
            'tgl_mulai'     => ['type' => 'date', 'null' => true],
            'tgl_selesai'   => ['type' => 'date', 'null' => true],
            'status_aktif'  => ['type' => 'enum("Y","T")', 'default' => "T", 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Tahun_Ajar');
    }

    public function down()
    {
        $this->forge->dropTable('Tahun_Ajar');
    }
}
