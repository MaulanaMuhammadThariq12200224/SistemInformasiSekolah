<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true, 'auto_increment' => true],
            'nip'               => ['type' => 'varchar', 'constraint' => 10, 'null' => false],
            'nama_depan'        => ['type' => 'varchar', 'constraint' => 50, 'null' => false],
            'nama_belakang'     => ['type' => 'varchar', 'constraint' => 50, 'null' => true],
            'gelar_depan'       => ['type' => 'varchar', 'constraint' => 10, 'null' => true],
            'gelar_belakang'    => ['type' => 'varchar', 'constraint' => 10, 'null' => true],
            'gender'            => ['type' => 'enum("L","P")', 'null' => true],
            'no_telp'           => ['type' => 'varchar', 'constraint' => 17, 'null' => true],
            'no_wa'             => ['type' => 'varchar', 'constraint' => 17, 'null' => true],
            'email'             => ['type' => 'varchar', 'constraint' => 128, 'null' => true],
            'bagian_id'         => ['type' => 'int', 'constraint' => 10, 'null' => false, 'unsigned' => true],
            'alamat'            => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'kota'              => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
            'tgl_lahir'         => ['type' => 'date', 'null' => true],
            'tempat_lahir'      => ['type' => 'varchar', 'constraint' => 80, 'null' => true],
            'foto'              => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'sandi'             => ['type' => 'varchar', 'constraint' => 60, 'null' => true],
            'token_reset'       => ['type' => 'varchar', 'constraint' => 10, 'null' => true],
            'created_at'        => ['type' => 'datetime', 'null' => true],
            'update_at'         => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('nip');
        $this->forge->addKey('id');
        $this->forge->addForeignKey('bagian_id', 'bagian', 'id', 'cascade');
        $this->forge->createTable('Pegawai');
    }

    public function down()
    {
        $this->forge->dropTable('Pegawai');
    }
}
