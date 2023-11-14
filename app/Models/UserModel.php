<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'tb_user';
    protected $primaryKey       = 'username';
    protected $allowedFields    = [
         'username', 'userfullname', 'useremail', 'userpassword','usernomer', 'perusahaannama', 'userlevel', 'userfoto'
    ];

    
}
