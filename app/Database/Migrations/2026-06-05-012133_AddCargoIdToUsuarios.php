<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCargoIdToUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addColumn('usuarios', [

            'cargo_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
                'after'      => 'empresa_id'
            ]

        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('usuarios', 'cargo_id');
    }
}