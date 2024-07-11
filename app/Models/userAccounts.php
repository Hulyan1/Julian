<?php

namespace App\Models;
use CodeIgniter\model;

class userAccounts extends model 
{
    protected $table = 'user_accounts';
    protected $primaryKey = 'user_account_id';

    protected $fields = [
        'username',
        'email',
        'password'
    ];
}