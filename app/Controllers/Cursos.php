<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Curso;
use App\Models\Facilitador;
class Cursos extends Controller{
    
    public function index(){
        $curso= new Curso();
        $facilitador= new Facilitador();
        $datos['cursos']= $curso->orderBy('id','ASC')->findAll();
        $datos['facilitadores']= $facilitador->findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('cursos/vista',$datos);
    }

    public function crear(){
        $facilitador= new Facilitador();
        $datos['facilitadores']= $facilitador->findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('cursos/crear',$datos);
    }

    public function guardar(){
        $curso= new Curso();        
        $datos=[
            'curso'=>$this->request->getVar('curso'),
            'dias'=>$this->request->getVar('dias'),
            'horas_por_dia'=>$this->request->getVar('horas_por_dia'),
            'costo'=>$this->request->getVar('costo'),
            'fac_id'=>$this->request->getVar('fac_id')
        ];
        $curso->insert($datos);
        return $this->response->redirect(site_url('/cursos/vista'));
    }
    public function borrar($id=null){
        $curso=new Curso();
        $datosCurso=$curso->where('id',$id)->first();
        $curso->where('id',$id)->delete($id);

        return $this->response->redirect(site_url('/cursos/vista'));
    }

    public function editar($id=null){
        $curso= new Curso();
        $facilitador= new Facilitador();        
        $datos['curso']=$curso->where('id',$id)->first();    
        $datos['facilitadores']= $facilitador->findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('cursos/editar',$datos);
    }
    public function actualizar(){
        $curso= new Curso();
        $datos=[
            'curso'=>$this->request->getVar('curso'),
            'dias'=>$this->request->getVar('dias'),
            'horas_por_dia'=>$this->request->getVar('horas_por_dia'),
            'costo'=>$this->request->getVar('costo'),
            'fac_id'=>$this->request->getVar('fac_id')
        ];
        $id= $this->request->getVar('id');
        $curso->update($id,$datos);
        return $this->response->redirect(site_url('/cursos/vista'));
    }
}