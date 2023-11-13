<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableInfaq extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'nama' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'email'   => [
                'type'              => 'VARCHAR',
                'constraint'        => '255', 
            ],
            'wa'   => [
                'type'              => 'VARCHAR',
                'constraint'        => '15',  
            ],
            'norek' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,  
                
            ],
            'foto' => [
                'type'          => 'VARCHAR',
                'constraint'     => 255,
                'null'          => true,

            ],
            'pesan' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,  
                'null'          => true
            ],
            'created_at'    => [
                'type'      => 'DATETIME',
                'null'      => true,
            ],
            'updated_at'    => [
                'type'      => 'DATETIME',
                'null'      => true,
            ],
            'deleted_at'    => [
                'type'      => 'DATETIME',
                'null'      => true,
            ],

        ]);
        $this->forge->addKey('id',true,true);
        $this->forge->createTable('infaq');
    }

    public function down()
    {
        $this->forge->dropTable('infaq',true);
    }
}
