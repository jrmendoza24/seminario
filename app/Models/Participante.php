<?php 
namespace App\Models;

use CodeIgniter\Model;

class Participante extends Model{
    protected $table      = 'participantes';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields= ['nombre','apellido','ci','email','celular'];
}