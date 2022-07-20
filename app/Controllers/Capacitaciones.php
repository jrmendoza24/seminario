<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Capacitacion;
use App\Models\Curso;
use App\Models\Facilitador;
use App\Models\Participante;
class Capacitaciones extends Controller{
    public function index(){
        $capacitacion= new Capacitacion();
        $curso= new Curso();
        $facilitador= new Facilitador();
        $participante= new Participante();
        $datos['capacitaciones']= $capacitacion->orderBy('id','ASC')->findAll();
        $datos['cursos']= $curso->findAll();
        $datos['facilitadores']= $facilitador->findAll();
        $datos['participantes']= $participante->findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('capacitaciones/vista',$datos);
    }

    public function crear(){
        $curso= new Curso();
        $participante= new Participante();
        $datos['cursos']= $curso->findAll();
        $datos['participantes']= $participante->findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('capacitaciones/crear',$datos);
    }

    public function guardar(){
        $capacitacion= new Capacitacion();  
        $curso= new Curso();   
        
        $id= $curso->where('id',$this->request->getVar('curso_id'))->first();
        $dias= $id['dias'];        
        $fechaini= $this->request->getVar('fecha_inicio');   
        $fechaini= date("Y-m-d",strtotime( $fechaini. "- 1 days"));           
        $fechafin= date("Y-m-d",strtotime( $fechaini. "+".$dias." days"));
        $datos=[
            'fecha_inicio'=>$this->request->getVar('fecha_inicio'),
            'fecha_fin'=>$fechafin,
            'curso_id'=>$this->request->getVar('curso_id'),
            'participante_id'=>$this->request->getVar('participante_id')
        ];
        $capacitacion->insert($datos);
        return $this->response->redirect(site_url('/capacitaciones/vista'));
    }
    public function borrar($id=null){
        $capacitacion=new Capacitacion();
        $datosCapacitacion=$capacitacion->where('id',$id)->first();
        $capacitacion->where('id',$id)->delete($id);

        return $this->response->redirect(site_url('/capacitaciones/vista'));
    }

    public function editar($id=null){
        $capacitacion= new Capacitacion();
        $curso= new Curso();
        $participante= new Participante();        
        $datos['capacitacion']=$capacitacion->where('id',$id)->first();    
        $datos['cursos']= $curso->findAll();
        $datos['participantes']= $participante->findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('capacitaciones/editar',$datos);
    }
    public function actualizar(){
        $capacitacion= new Capacitacion();  
        $curso= new Curso();   
        
        $ide= $curso->where('id',$this->request->getVar('curso_id'))->first();
        $dias= $ide['dias'];        
        $fechaini= $this->request->getVar('fecha_inicio');   
        $fechaini= date("Y-m-d",strtotime( $fechaini. "- 1 days"));           
        $fechafin= date("Y-m-d",strtotime( $fechaini. "+".$dias." days"));
        $datos=[
            'fecha_inicio'=>$this->request->getVar('fecha_inicio'),
            'fecha_fin'=>$fechafin,
            'curso_id'=>$this->request->getVar('curso_id'),
            'participante_id'=>$this->request->getVar('participante_id')
        ];

        $id= $this->request->getVar('id');
        $capacitacion->update($id,$datos);
        return $this->response->redirect(site_url('/capacitaciones/vista'));
    }
}