<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Facilitador;
class Facilitadores extends Controller{

    public function index(){

        $facilitador= new Facilitador();
        $datos['facilitadores']= $facilitador->orderBy('id','ASC')->findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('facilitadores/vista',$datos);
    }

    public function crear(){
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('facilitadores/crear',$datos);
    }

    public function guardar(){
        $facilitador= new Facilitador();
        $datos=[
            'nombre'=>$this->request->getVar('nombre'),
            'apellido'=>$this->request->getVar('apellido'),
            'ci'=>$this->request->getVar('ci'),
            'email'=>$this->request->getVar('email'),
            'celular'=>$this->request->getVar('celular')
        ];
        $facilitador->insert($datos);
        return $this->response->redirect(site_url('facilitadores/vista'));
    }
    public function borrar($id=null){
        $facilitador=new Facilitador();
        $datosFacilitador=$facilitador->where('id',$id)->first();
        $facilitador->where('id',$id)->delete($id);

        return $this->response->redirect(site_url('facilitadores/vista'));
    }

    public function editar($id=null){
        $facilitador= new Facilitador();
        $datos['facilitador']=$facilitador->where('id',$id)->first();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('facilitadores/editar',$datos);
    }
    public function actualizar(){
        $facilitador= new Facilitador();
        $datos=[
            'nombre'=>$this->request->getVar('nombre'),
            'apellido'=>$this->request->getVar('apellido'),
            'ci'=>$this->request->getVar('ci'),
            'email'=>$this->request->getVar('email'),
            'celular'=>$this->request->getVar('celular')
        ];
        $id= $this->request->getVar('id');
        $facilitador->update($id,$datos);
        return $this->response->redirect(site_url('facilitadores/vista'));
    }
}