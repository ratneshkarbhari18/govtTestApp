<?php namespace App\Models;

use CodeIgniter\Model;

class ReportsModel extends Model
{

    protected $table = "reports";

    protected $primaryKey = 'id';

    protected $allowedFields = ['title','slug','fileName','date','sender','reciever'];

}