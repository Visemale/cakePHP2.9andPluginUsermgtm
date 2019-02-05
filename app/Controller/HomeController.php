<?php

class HomeController extends AppController {
	
    var $helpers = array(
        'Html',
        'Form'
    );
	
    var $components = array(
        'Session',
        'Paginator'
    );	
	
    var $uses = array(
        'Slider'
    );

    public function index(){
        
            
        $this->layout = "publico";


        #$this->set(compact('info_sliders'));
            
    }

    public function recuperar_clave(){
        $this->layout="publico";
    }
        
    public function login_incorrecto(){
        $this->layout="publico";
    }
}