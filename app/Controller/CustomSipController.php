<?php

class CustomSipController extends AppController {
	
    var $helpers = array( 'Html', 'Form' );
    var $components = array( 'Session', 'Paginator' );	 
    var $uses = array( 'User', 'CustomSip' );

    public function index(){
        
            
        $this->layout = "publico";


        #$this->set(compact('info_sliders'));
            
    }

    public function alta(){
        $this->layout="default";
        
        
    }
      
}