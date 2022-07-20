<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Participante;
class Participantes extends Controller{

    public function index(){

        $participante= new Participante();
        $datos['participantes']= $participante->orderBy('id','ASC')->findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('participantes/vista',$datos);
    }

    public function crear(){
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('participantes/crear',$datos);
    }

    public function guardar(){
        $participante= new Participante();
        $datos=[
            'nombre'=>$this->request->getVar('nombre'),
            'apellido'=>$this->request->getVar('apellido'),
            'ci'=>$this->request->getVar('ci'),
            'email'=>$this->request->getVar('email'),
            'celular'=>$this->request->getVar('celular')
        ];
        $participante->insert($datos);
        return $this->response->redirect(site_url('/participantes/vista'));
    }
    public function borrar($id=null){
        $participante=new Participante();
        $datosParticipante=$participante->where('id',$id)->first();
        $participante->where('id',$id)->delete($id);

        return $this->response->redirect(site_url('/participantes/vista'));
    }

    public function editar($id=null){
        $participante= new Participante();
        $datos['participante']=$participante->where('id',$id)->first();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('participantes/editar',$datos);
    }
    public function actualizar(){
        $participante= new Participante();
        $datos=[
            'nombre'=>$this->request->getVar('nombre'),
            'apellido'=>$this->request->getVar('apellido'),
            'ci'=>$this->request->getVar('ci'),
            'email'=>$this->request->getVar('email'),
            'celular'=>$this->request->getVar('celular')
        ];
        $id= $this->request->getVar('id');
        $participante->update($id,$datos);
        return $this->response->redirect(site_url('/participantes/vista'));
    }
}