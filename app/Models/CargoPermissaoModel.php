<?php

namespace App\Models;

use CodeIgniter\Model;

class CargoPermissaoModel extends Model
{
    protected $table = 'cargo_permissoes';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'empresa_id',
        'cargo_id',
        'permissao_id'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}