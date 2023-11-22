<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddJumlahColumn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('infaq',[
            'jumlah' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'null'          => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('infaq', ['jumlah']);
    }
}
