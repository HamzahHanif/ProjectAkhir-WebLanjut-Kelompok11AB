<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableZakat extends Migration
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
            'noHP'   => [
                'type'              => 'VARCHAR',
                'constraint'        => '15',  
            ],
            'selectBentukZakat' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,  
                
            ],
            'jumlahOrang' => [
                'type'              => 'INT',
                'constraint'        => 5,  
                'unsigned'          => true
            ],
            'jumlahZakat' => [
                'type'              => 'INT',
                'constraint'        => 5,  
                'unsigned'          => true
            ],
            'amil' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',  
                
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
        $this->forge->createTable('zakat');
        
    }
    public function down()
    {
        $this->forge->dropTable('zakat',true);
    }
}
