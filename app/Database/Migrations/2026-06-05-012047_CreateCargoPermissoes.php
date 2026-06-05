<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCargoPermissoes extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],

            'empresa_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true
            ],

            'cargo_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true
            ],

            'permissao_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]

        ]);

        $this->forge->addKey('id', true);

        $this->forge->addKey('empresa_id');
        $this->forge->addKey('cargo_id');
        $this->forge->addKey('permissao_id');

        $this->forge->createTable('cargo_permissoes');
    }

    public function down()
    {
        $this->forge->dropTable('cargo_permissoes');
    }
}