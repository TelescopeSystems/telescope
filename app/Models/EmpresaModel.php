<?php

namespace App\Models;
use CodeIgniter\Model;


class EmpresaModel extends Model
{
	protected $table  = 'empresas';
	protected $primaryKey = 'id';
	protected $returnType = 'array';
	protected $useSoftDeletes = false;


	protected $allowedFields = ['tipo_empresa','nome_empresa','nome_fantasia','slug','logo','nome_responsavel','email_contato','telefone','cpf','cnpj','plano','data_vencimento','ativo'];

	protected bool $allowEmptyInserts = false;
	protected $useTimestamps =true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';

}