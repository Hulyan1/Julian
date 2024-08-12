<?php

namespace App\Models;

use CodeIgniter\Model;

class category extends Model 
{
    protected $table = 'category';
    protected $primaryKey = 'cat_id';

    protected $allowedFields = [
        'category',
    ];
}