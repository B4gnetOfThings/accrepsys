<?php

namespace App\Models;

use CodeIgniter\Model;

class ContentModel extends Model
{
    protected $table = 'tbl_content';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['targetdate','achieve','targetoutcome','activities','accomplished'];
}