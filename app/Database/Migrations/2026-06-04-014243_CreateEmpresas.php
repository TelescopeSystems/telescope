<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmpresas extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'tipo_empresa' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
                'comment'    => 'SALAO, OFICINA, CLINICA',
            ],

            'nome_empresa' => [
                'type'       => 'VARCHAR',
                'constraint' => 200,
            ],

            'nome_fantasia' => [
                'type'       => 'VARCHAR',
                'constraint' => 200,
                'null'       => true,
            ],

            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],

            'logo' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],

            'nome_responsavel' => [
                'type'       => 'VARCHAR',
                'constraint' => 200,
            ],

            'email_contato' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],

            'telefone' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],

            'cpf' => [
                'type'       => 'VARCHAR',
                'constraint' => 14,
                'null'       => true,
            ],

            'cnpj' => [
                'type'       => 'VARCHAR',
                'constraint' => 18,
                'null'       => true,
            ],

            'plano' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
                'default'    => 'BASICO',
            ],

            'data_vencimento' => [
                'type' => 'DATE',
                'null' => true,
            ],

            'ativo' => [
                'type'    => 'BOOLEAN',
                'default' => true,
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

        $this->forge->addUniqueKey('slug');
        $this->forge->addUniqueKey('email_contato');

        $this->forge->addUniqueKey('cpf');
        $this->forge->addUniqueKey('cnpj');

        $this->forge->createTable('empresas');
    }

    public function down()
    {
        $this->forge->dropTable('empresas', true);
    }
}