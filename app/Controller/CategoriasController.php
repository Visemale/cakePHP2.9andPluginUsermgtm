<?php

class CategoriasController extends AppController {
	
    var $helpers = array( 'Html', 'Form' );
    var $components = array( 'Session', 'Paginator' );	 
    var $uses = array( 'Categorias', 'User', 'Subcategorias' );
    
    public function index(){
        $this->layout = "default";
        $Breadcrums = array();
        $Breadcrums[] = array('Inicio','/user_dashboard',0);
        $Breadcrums[] = array('Categorias','',1);
        $conditions = array();
        
        $get_users = $this->User->find('list', array('conditions'=> array('User.active' => 1)));
        
        if($this->request->is('get')){
            $data = $this->request->query;
            if(!empty($data['q'])){
                $conditions["(Categorias.nombre_categoria like '%".$data['q']."%' or Categorias.descripcion like '%".$data['q']."%') AND 1"] = 1;
            }
            
            if(!empty($data['id_users_create'])){
                $conditions["Categorias.id_users_create"] = $data['id_users_create'];
            }
        }
        
        $this->paginate=array(
            'conditions' => $conditions,
            'order' => 'Categorias.id_categorias DESC',
            'limit' => 50
        );

        $data_categorias = $this->paginate('Categorias');
        
        $this->set(compact('Breadcrums', 'q', 'data_categorias', 'get_users'));
    }

    public function nueva_categoria(){
        $this->layout = "default";
        $Breadcrums = array();
        $Breadcrums[] = array('Inicio','/user_dashboard',0);
        $Breadcrums[] = array('Categorias','/categorias',1);
        $Breadcrums[] = array('Todas las Categorias', '',2);
        if($this->request->is('post'))
        {
            $data = $this->request->data;
            
            $data['Categorias']['id_users_create'] = $this->UserAuth->getUserId();
            $data['Categorias']['status'] = 1;
            $this->Categorias->create();
            if($this->Categorias->save($data)){
                
                $this->Session->setFlash(
                    "La categoria se agrego correctamente",
                    "alert_success_custome"
                );
            }
            else{
                $this->Session->setFlash(
                    "Error al guardar la categoria. Intente más tarde.",
                    "alert_error_custome"
                );
            }
            $this->redirect("/categorias/");
        }
        
        $this->set(compact('Breadcrums'));
    }
    
    public function editar_categoria($id_categoria){
        $this->layout = "default";
        $Breadcrums = array();
        $Breadcrums[] = array('Inicio','/user_dashboard',0);
        $Breadcrums[] = array('Categorias','/categorias',1);
        $Breadcrums[] = array('Editar Categoria', '',2);
        
        $data_categoria = $this->Categorias->find('all', array('conditions'=> array('Categorias.id_categorias' => $id_categoria), "limit" => 1));
        
        if($this->request->is('post'))
        {
            $data = $this->request->data;
            
            $data['Categorias']['id_users_create'] = $this->UserAuth->getUserId();
            $data['Categorias']['status'] = 1;
            $this->Categorias->create();
            if($this->Categorias->save($data)){
                
                $this->Session->setFlash(
                    "La categoria se agrego correctamente",
                    "alert_success_custome"
                );
            }
            else{
                $this->Session->setFlash(
                    "Error al guardar la categoria. Intente más tarde.",
                    "alert_error_custome"
                );
            }
            $this->redirect("/categorias/");
        }
        
        $this->set(compact('Breadcrums', 'id_categoria', 'data_categoria'));
    }
    
    public function post(){
        $this->layout = "publico";
    }

    public function recuperar_clave(){
        $this->layout="publico";
    }
        
    public function login_incorrecto(){
        $this->layout="publico";
    }
    
    public function subcategorias(){
        $this->layout = "default";
        $Breadcrums = array();
        $Breadcrums[] = array('Inicio','/user_dashboard',0);
        $Breadcrums[] = array('Subcategorias','',1);
        $conditions = array();
        
        $get_users = $this->User->find('list', array('conditions'=> array('User.active' => 1)));
        $get_categorias = $this->Categorias->find('list', array('conditions'=> array('Categorias.status' => 1)));
        if($this->request->is('get')){
            $data = $this->request->query;
            if(!empty($data['q'])){
                $conditions["(Subcategorias.nombre_subcategoria like '%".$data['q']."%' or Subcategorias.descripcion like '%".$data['q']."%') AND 1"] = 1;
            }
            
            if(!empty($data['id_users_create'])){
                $conditions["Subcategorias.id_users_create"] = $data['id_users_create'];
            }
        }
        
        $this->paginate=array(
            'conditions' => $conditions,
            'order' => 'Subcategorias.id_subcategorias DESC',
            'limit' => 50
        );

        $data_subcategorias = $this->paginate('Subcategorias');
        
        $this->set(compact('Breadcrums', 'q', 'data_subcategorias', 'get_users', 'get_categorias'));
    }
    
    public function nueva_subcategoria(){
        $this->layout = "default";
        $Breadcrums = array();
        $Breadcrums[] = array('Inicio','/user_dashboard',0);
        $Breadcrums[] = array('Subcategorias','/subcategorias',1);
        $Breadcrums[] = array('Todas las Subcategorias', '',2);
        $get_categorias = $this->Categorias->find('list', array('conditions'=> array('Categorias.status' => 1)));
        if($this->request->is('post'))
        {
            $data = $this->request->data;
            
            $data['Subcategorias']['id_users_create'] = $this->UserAuth->getUserId();
            $data['Subcategorias']['status'] = 1;
            $this->Subcategorias->create();
            if($this->Subcategorias->save($data)){
                
                $this->Session->setFlash(
                    "La subcategoria se agrego correctamente",
                    "alert_success_custome"
                );
            }
            else{
                $this->Session->setFlash(
                    "Error al guardar la subcategoria. Intente más tarde.",
                    "alert_error_custome"
                );
            }
            $this->redirect("/categorias/subcategorias");
        }
        
        $this->set(compact('Breadcrums', 'get_categorias'));
    }
    
    public function editar_subcategoria($id_subcategoria){
        $this->layout = "default";
        $Breadcrums = array();
        $Breadcrums[] = array('Inicio','/user_dashboard',0);
        $Breadcrums[] = array('Categorias','/categorias',1);
        $Breadcrums[] = array('Editar Categoria', '',2);
        
        $get_categorias = $this->Categorias->find('list', array('conditions'=> array('Categorias.status' => 1)));
        $data_subcategoria = $this->Subcategorias->find('all', array('conditions'=> array('Subcategorias.id_subcategorias' => $id_subcategoria), "limit" => 1));
        
        if($this->request->is('post'))
        {
            $data = $this->request->data;
            
            $data['Subcategorias']['id_users_create'] = $this->UserAuth->getUserId();
            $data['Subcategorias']['status'] = 1;
            $this->Subcategorias->create();
            if($this->Subcategorias->save($data)){
                
                $this->Session->setFlash(
                    "La categoria se agrego correctamente",
                    "alert_success_custome"
                );
            }
            else{
                $this->Session->setFlash(
                    "Error al guardar la categoria. Intente más tarde.",
                    "alert_error_custome"
                );
            }
            $this->redirect("/categorias/subcategorias");
        }
        
        $this->set(compact('Breadcrums', 'id_subcategoria', 'data_subcategoria', 'get_categorias'));
    }
    
    public function get_subcategorias($id_categoria){
        if($this->request->is('get')){
            $data = $municipios= $this->Subcategorias->find('list', array('conditions'=> array('Subcategorias.id_categoria' => $id_categoria)));
                    
            $this->set(compact('data'));
        }
    }
}