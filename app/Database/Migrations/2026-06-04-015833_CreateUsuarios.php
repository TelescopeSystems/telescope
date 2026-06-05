<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'empresa_id' => [
                'type'     => 'BIGINT',
                'unsigned' => true,
            ],

            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => 200,
            ],

            'cpf' => [
                'type'       => 'VARCHAR',
                'constraint' => 14,
                'null'       => true,
            ],

            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],

            'senha' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],

            'tipo_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
            ],

            'telefone' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
            ],

            'foto' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],

            'primeiro_acesso' => [
                'type'    => 'BOOLEAN',
                'default' => true,
            ],

            'ativo' => [
                'type'    => 'BOOLEAN',
                'default' => true,
            ],

            'ultimo_login' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],

            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],

            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addKey('empresa_id');

        $this->forge->addUniqueKey('email');

        $this->forge->addUniqueKey('cpf');

        $this->forge->addForeignKey(
            'empresa_id',
            'empresas',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios', true);
    }
}