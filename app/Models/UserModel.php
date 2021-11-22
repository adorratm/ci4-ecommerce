<?php

namespace App\Models;
use \App\Entities\UserEntity;
use \CodeIgniter\Model;

class UserModel extends Model
{
    /**
     * @var string
     * Create Variables
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $returnType = UserEntity::class;
    protected $useSoftDeletes = true;
    protected $allowedFields = [
        //'group_id',
        'first_name',
        'sur_name',
        'email',
        'phone',
        'password',
        'verify_key',
        'verify_code',
        'bio',
        'status',
        'deleted_at'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [
        //'group_id' => 'required|numeric',
        'first_name' => 'required|string|min_length[2]',
        'sur_name' => 'required|string|min_length[2]',
        'email' => 'required|valid_email|is_unique[users.email]',
        'phone' => 'required|is_unique[users.phone]',
        'password' => 'required',
        'verify_key' => 'required|alpha',
        'verify_code' => 'numeric|min_length[6]',
        'status' => 'required|string'
    ];

    protected $validationMessages = [
        /*'group_id' => [
            'required' => 'User.model.validation.group_id.required',
            'numeric' => 'User.model.validation.group_id.numeric'
        ],*/
        'first_name' => [
            'required' => 'User.model.validation.first_name.required',
            'string' => 'User.model.validation.first_name.string',
            'min_length' => 'User.model.validation.first_name.min_length'
        ],
        'sur_name' => [
            'required' => 'User.model.validation.sur_name.required',
            'string' => 'User.model.validation.sur_name.string',
            'min_length' => 'User.model.validation.sur_name.min_length'
        ],
        'email' => [
            'required' => 'User.model.validation.email.required',
            'valid_email' => 'User.model.validation.email.required',
            'is_unique' => 'User.model.validation.email.is_unique',
        ],
        'phone' => [
            'required' => 'User.model.validation.phone.required',
            'is_unique' => 'User.model.validation.phone.is_unique',
        ],
        'password' => [
            'required' => 'User.model.validation.password.required',
        ],
        'verify_key' => [
            'required' => 'User.model.validation.verify_key.required',
            'alpha' => 'User.model.validation.verify_key.alpha'
        ],
        'verify_code' => [
            'required' => 'User.model.validation.verify_code.required',
            'min_length' => 'User.model.validation.verify_code.min_length',
        ],
        'status' => [
            'required' => 'User.model.validation.status.required.',
            'string' => 'User.model.validation.status.string',
        ]
    ];
}