<?php

namespace App\Models;

use CodeIgniter\Model;

class PermissaoModel extends Model
{
    protected $table = 'permissoes';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'empresa_id',
        'nome_permissao',
        'descricao'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}