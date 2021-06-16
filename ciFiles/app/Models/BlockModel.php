<?php namespace App\Models;

use CodeIgniter\Model;

class BlockModel extends Model
{

    protected $table = "blocks";

    protected $primaryKey = 'id';

    protected $allowedFields = ['title','slug','incharge'];

}