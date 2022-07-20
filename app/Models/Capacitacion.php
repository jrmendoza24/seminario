<?php 
namespace App\Models;

use CodeIgniter\Model;

class Capacitacion extends Model{
    protected $table      = 'capacitaciones';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields= ['fecha_inicio','fecha_fin','curso_id','participante_id'];
}