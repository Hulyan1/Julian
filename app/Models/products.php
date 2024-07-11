<?php

namespace App\Models;

use CodeIgniter\Model;

class products extends Model 
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';

    protected $fields = [
        'product',
        'name',
        'price',
        'category'
    ];
}