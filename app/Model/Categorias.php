<?php

class Categorias extends AppModel {
    public $name = "Categorias";
    public $useTable = "categorias";	
    public $id="id_categorias";
    public $primaryKey="id_categorias";
    public $displayField = 'nombre_categoria';
}
