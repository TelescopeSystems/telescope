<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePermissoes extends Migration
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

            'nome_permissao' => [
                'type'       => 'VARCHAR',
                'constraint' => 150
            ],

            'descricao' => [
                'type' => 'TEXT',
                'null' => true
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

        $this->forge->createTable('permissoes');

    }

    public function down()
    {
        $this->forge->dropTable('permissoes');
    }
}
