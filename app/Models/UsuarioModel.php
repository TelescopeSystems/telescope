<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'id';
	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['empresa_id','nome','cpf','email','senha','tipo_usuario','telefone','foto','primeiro_acesso','ativo','ultimo_login'];

	protected bool $allowEmptyInserts = false;
	protected $useTimestamps = true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
}