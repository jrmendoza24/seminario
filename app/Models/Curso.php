<?php 
namespace App\Models;

use CodeIgniter\Model;

class Curso extends Model{
    protected $table      = 'cursos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields= ['curso','dias','horas_por_dia','costo','fac_id'];

    

}