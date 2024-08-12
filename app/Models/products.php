<?php

namespace App\Models;

use CodeIgniter\Model;

class products extends Model 
{
    protected $table = 'products';
    protected $primaryKey = 'pro_id';

    protected $allowedFields = [
        'product',
        'price',
        'quantity',
        'cat_id',
        'image',
    ];
}