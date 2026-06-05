<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCargos extends Migration
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

            'nome_cargo' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],

            'descricao' => [
                'type' => 'TEXT',
                'null' => true
            ],

            'ativo' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1
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

        $this->forge->createTable('cargos');

    }

    public function down()
    {
        $this->forge->dropTable('cargos');
    }
}
