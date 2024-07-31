<?php

namespace App\Models;

use CodeIgniter\CodeIgniter;
use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title','category','body','image'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules = [
        'title'     => 'required|string|max_length[255]',
        'category'  => 'required|string|max_length[100]',
        'body'      => 'required|string',
        'image'     => 'required|string|max_length[255]',
    ];
    
    protected $validationMessages = [
        'title'     => [
            'required' => 'Le titre est requis.',
            'string'   => 'Le titre doit être une chaîne de caractères.',
            'max_length' => 'Le titre ne peut pas dépasser 255 caractères.',
        ],
        'category'  => [
            'required' => 'La catégorie est requise.',
            'string'   => 'La catégorie doit être une chaîne de caractères.',
            'max_length' => 'La catégorie ne peut pas dépasser 100 caractères.',
        ],
        'body'      => [
            'required' => 'Le corps est requis.',
            'string'   => 'Le corps doit être une chaîne de caractères.',
        ],
        'image'     => [
            'required' => 'L\'image est requise.',
            'string'   => 'Le nom de l\'image doit être une chaîne de caractères.',
            'max_length' => 'Le nom de l\'image ne peut pas dépasser 255 caractères.',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
