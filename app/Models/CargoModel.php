<?php

namespace App\Models;

use CodeIgniter\Model;

class CargoModel extends Model
{
	protected $table = 'cargos';
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'empresa_id',
		'nome_cargo',
		'descricao',
		'ativo'
	];
	protected $useTimestamps = true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
}