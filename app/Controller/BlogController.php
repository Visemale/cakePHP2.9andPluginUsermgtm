<?php

class BlogController extends AppController {	
    var $helpers = array('Html','Form');	
    var $components= array('Session','Paginator');	
    var $uses = array( 'Articulos', 'Categorias', 'Subcategorias', 'User', 'UserGroup');

    public function index(){
        $this->layout = "publico";
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
    
    public function articulos(){
        $this->layout = "default";
        $Breadcrums = array();
        $Breadcrums[] = array('Inicio','/user_dashboard',0);
        $Breadcrums[] = array('Todos los Articulos','',1);
        $conditions = array();
        
        $get_categorias    = $this->Categorias->find('list', array('conditions'=> array('Categorias.status' => 1)));
        $get_subcategorias = $this->Subcategorias->find('list', array('conditions'=> array('Subcategorias.status' => 1)));
        $get_users         = $this->User->find('list');
        $conditions['Articulos.status'] = 1;
        
        $meses = $this->FormatDate('mesesCom');
//        if($this->request->is('get')){
//            $data = $this->request->query;
//            if(!empty($data['q'])){
//                $conditions["(Articulos.titulo_articulo like '%".$data['q']."%' or Articulos.cuerpo_articulo like '%".$data['q']."%') AND 1"] = 1;
//            }
//            
//            if(!empty($data['id_users_create'])){
//                $conditions["Articulos.id_users_autor"] = $data['id_users_create'];
//            }
//            
//            if(!empty($data['id_categoria'])){
//                $conditions["Articulos.id_categoria"] = $data['id_categoria'];
//            }
//            
//            if(!empty($data['id_subcategoria'])){
//                $conditions["Articulos.id_subcategoria"] = $data['id_subcategoria'];
//            }
//        }
//        
        $this->paginate=array(
            'conditions' => $conditions,
            'order' => 'Articulos.fecha DESC',
            'limit' => 60
        );
//
        $data_articulos = $this->paginate('Articulos');
        
        for($x=0;count($data_articulos) > $x;$x++){
            $data_articulos[$x]["Articulos"]['url'] = $this->formar_url(    $get_categorias[$data_articulos[$x]['Articulos']['id_categoria']]."/".
                                                                            $get_subcategorias[$data_articulos[$x]['Articulos']['id_subcategoria']]."/".
                                                                            $data_articulos[$x]['Articulos']['id_articulos'].'/'.
                                                                            $data_articulos[$x]['Articulos']['friendly']
                                                                        );
        }
        
        $this->set(compact('Breadcrums',  'get_categorias', 'data_articulos', 'get_users', 'get_subcategorias','meses'));
    }
    
    
    public function nuevo_articulo(){
        $this->layout = "default";
        $Breadcrums   = array();
        $Breadcrums[] = array('Inicio','/user_dashboard',0);
        $Breadcrums[] = array('Todos los Articulos','/blog/articulos',1);
        $Breadcrums[] = array('Nuevo Articulo', '',2);
        
        $userGroups        = $this->UserGroup->find('list');
        $get_categorias    = $this->Categorias->find('list', array('conditions'=> array('Categorias.status' => 1)));
        $get_subcategorias = $this->Subcategorias->find('list', array('conditions'=> array('Subcategorias.status' => 1)));
        
        if($this->request->is('post')){
            $data = $this->request->data;
            #print_r($data);exit;
            $data['Articulos']['id_users_autor'] = $this->UserAuth->getUserId();
            $data['Articulos']['tags'] = json_encode($data['tags']);
            $data['Articulos']['fecha'] = date("Y-m-d");
            $data['Articulos']['rol_permisos'] = json_encode($data['usersPerm']);
            $data['Articulos']['visitas'] = 0;
            $data['Articulos']['status'] = ($data['Articulos']['status'] == 'on') ? 1 : 0;
            if($this->Articulos->save($data)){
                
                $this->Session->setFlash(
                    "El Articulo se guardo correctamente",
                    "alert_success_custome"
                );
            }
            else{
                $this->Session->setFlash(
                    "Error al guardar el articulo. Intente mÃ¡s tarde.",
                    "alert_error_custome"
                );
            }
            
            $this->redirect("/blog/articulos");
            #exit;
        }
        
        $this->set(compact('Breadcrums', 'get_categorias', 'get_subcategorias', 'userGroups'));
    }
    
    public function FormatDate($format){
        $mesesCom = array("01" => "Enero", "02" => "Febrero", "03" => "Marzo", "04" => "Abril", "05" => "Mayo", "06" => "Junio",
                          "07" => "Julio", "08" => "Agosto", "09" => "Septiembre", "10" => "Octubre", "11" => "Noviembre", "12" => "Diciembre" );
        
        return $$format;
    }
    
    
    public function edicion($categoria = "",$subcategoria = "",$id_articulo = "",$friendly = ""){
        $this->layout = "default";
        $Breadcrums   = array();
        $Breadcrums[] = array('Inicio','/user_dashboard',0);
        $Breadcrums[] = array('Todos los Articulos','/blog/articulos',1);
        $Breadcrums[] = array('Editar Articulo', '',2);
        
        
        if($this->request->is('post')){
            $data = $this->request->data;
            
            
            if($this->Articulos->updateAll(array('Articulos.titulo_articulo' => "'".$data['Articulos']['titulo_articulo']."'",
                                                 'Articulos.id_categoria'    =>     $data['Articulos']['id_categoria'],
                                                 'Articulos.id_subcategoria' => "'".$data['Articulos']['id_subcategoria']."'",
                                                 'Articulos.tags'            => "'".json_encode($data['tags'])."'",
                                                 'Articulos.friendly'        => "'".$data['Articulos']['friendly']."'",
                                                 'Articulos.rol_permisos'    => "'".json_encode($data['usersPerm'])."'",
                                                 'Articulos.cuerpo_articulo' => "'".$data['Articulos']['cuerpo_articulo']."'"
                                                ),
                                           array("Articulos.id_articulos"=>$data["id_articulos"]))){
                
                $this->Session->setFlash(
                    "El Articulo se actualizo correctamente",
                    "alert_success_custome"
                );
            }
            else{
                $this->Session->setFlash(
                    "Error al actualizar el articulo. Intente mas tarde.",
                    "alert_error_custome"
                );
            }
            
            $this->redirect("/blog/articulos");
        }
        else{
            if(!empty($categoria) && !empty($subcategoria) && !empty($id_articulo) && !empty($friendly)){
            
                $userGroups        = $this->UserGroup->find('list');
                $get_categorias    = $this->Categorias->find('list', array('conditions'=> array('Categorias.status' => 1)));
                $get_subcategorias = $this->Subcategorias->find('list', array('conditions'=> array('Subcategorias.status' => 1)));

                $data_articulo     = $this->Articulos->find('all', array('conditions' => array('Articulos.id_articulos' => $id_articulo)));

                if(isset($data_articulo) && count($data_articulo) > 0){
                    $data_articulo[0]['Articulos']["friendly_cat"]    = $this->formar_url($get_categorias[$data_articulo[0]['Articulos']['id_categoria']]);
                    $data_articulo[0]['Articulos']["friendly_subcat"] = $this->formar_url($get_subcategorias[$data_articulo[0]['Articulos']['id_subcategoria']]);
                    
                    
                    $this->set(compact('Breadcrums', 'get_categorias', 'get_subcategorias', 'userGroups', 'data_articulo'));
                }
                else{
                    $this->Session->setFlash(
                                                "Error Articulo no encontrado. Intente mas tarde",
                                                "alert_error_custome"
                                            );
                    $this->redirect("/blog/articulos");
                }
            }
            else{
                $this->Session->setFlash(
                                            "Error Articulo no encontrado. Intente mas tarde",
                                            "alert_error_custome"
                                        );
                $this->redirect("/blog/articulos");
            }
            
        }
        
        
    }
    
    
    public function articulo($categoria,$subcategoria,$id_articulo,$friendly){
        $this->layout = "publico";
        
        $userGroups        = $this->UserGroup->find('list');
        $get_categorias    = $this->Categorias->find('list', array('conditions'=> array('Categorias.status' => 1)));
        $get_subcategorias = $this->Subcategorias->find('list', array('conditions'=> array('Subcategorias.status' => 1)));
        
        $data_articulo = $this->Articulos->find('all', array('conditions'=> array('Articulos.id_articulos' => $id_articulo), "limit" => 1));
        
 
//            $data = $this->request->query;
//            $data['Articulos']['id_users_autor'] = $this->UserAuth->getUserId();
//            $data['Articulos']['tags'] = json_encode($data['tags']);
//            $data['Articulos']['fecha'] = date("Y-m-d");
//            $data['Articulos']['rol_permisos'] = json_encode($data['usersPerm']);
//            $data['Articulos']['visitas'] = 0;
//            $data['Articulos']['status'] = ($data['Articulos']['status'] == 'on') ? 1 : 0;
//            if($this->Articulos->save($data)){
//                
//                $this->Session->setFlash(
//                    "El Articulo se guardo correctamente",
//                    "alert_success_custome"
//                );
//            }
//            else{
//                $this->Session->setFlash(
//                    "Error al guardar el articulo. Intente mÃ¡s tarde.",
//                    "alert_error_custome"
//                );
//            }
//            
//            $this->redirect("/blog/articulos");
        
        
        $this->set(compact('Breadcrums', 'get_categorias', 'get_subcategorias', 'data_articulo'));
    }
    
    public function formar_url($url){
        
        $string = trim(strtolower($url));
 
        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );

        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );

        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );

        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );

        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );

        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );

        $string = str_replace(
            array(' ', '-'),
            array('_', '_'),
            $string
        );
        
        //Esta parte se encarga de eliminar cualquier caracter extraÃ±o
        $string = str_replace(
            array("¨", "º", "~", "#", "@", "|", "!", '"', "·", "$", "%", "&",
                 "(", ")", "?", "'", "¡",  "¿", "[", "^", "<code>", "]", "+", "}", 
                 "{", "¨", "´", ">", "< ", ";", ",", ":", "."),'',
            $string
        );
        
        return $string;        
    }
    
    public function upload_image(){
        $this->layout = false;
        $this->autoRender = false;
        // Allowed extentions.
        $allowedExts = array("gif", "jpeg", "jpg", "png");

        // Get filename.
        $temp = explode(".", $_FILES["file"]["name"]);

        // Get extension.
        $extension = end($temp);

        // An image check is being done in the editor but it is best to
        // check that again on the server side.
        // Do not use $_FILES["file"]["type"] as it can be easily forged.
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $_FILES["file"]["tmp_name"]);

        if ((($mime == "image/gif")
        || ($mime == "image/jpeg")
        || ($mime == "image/pjpeg")
        || ($mime == "image/x-png")
        || ($mime == "image/png"))
        && in_array($extension, $allowedExts)) {
            // Generate new random name.
            $name = sha1(microtime()) . "." . $extension;

            // Save file in the uploads folder.
            move_uploaded_file($_FILES["file"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"].$this->webroot."app/webroot/uploads/" . $name);

            // Generate response.
            $response = new StdClass;
            $response->link = $this->webroot."app/webroot/uploads/" . $name;
            
            #print_r($response); exit;
            echo stripslashes(json_encode($response));
        }
    }
    
}