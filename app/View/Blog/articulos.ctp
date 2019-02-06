<?php if(isset($data_articulos) && count($data_articulos) > 0){ ?>

    <div class="clearfix"></div>
    <div class="row col-lg-12">
        <div class="col-lg-3">
            <select class="browser-default custom-select" name="user">
                <option selected>Selecciona usuario</option>
                <?php foreach($get_users as $key => $val){ ?>
                    <option value="<?php echo $key; ?>">
                        <?php echo $val; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="col-lg-3">
            <select class="browser-default custom-select required" id="inpCategoria" name="data[Articulos][id_categoria]">
                <option>Categoria</option>
                <?php foreach($get_categorias as $key => $val){ ?>
                    <option value="<?php echo $key; ?>" >
                        <?php echo $val; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="col-lg-3">
            <select class="browser-default custom-select required" id="inpSubcategoria" name="data[Articulos][id_subcategoria]">
                <option value="">Subcategoria</option>
            </select>
        </div>
        <div class="col-lg-1 content-btn-form">
            <button type="submit" class="btn btn-primary btn-md">Filtrar</button>
        </div>
    </div>

    <div class="clearfix"></div>


    <!-- Table with panel -->
    <div class="card card-cascade narrower">

      <!--Card image-->
      <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

<!--        <div>
          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
            <i class="fas fa-th-large mt-0"></i>
          </button>
          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
            <i class="fas fa-columns mt-0"></i>
          </button>
        </div>-->

        <a href="" class="white-text mx-3">Articulos Existentes</a>

<!--        <div>
          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
            <i class="far fa-trash-alt mt-0"></i>
          </button>
          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
            <i class="fas fa-info-circle mt-0"></i>
          </button>
        </div>-->

      </div>
      <!--/Card image-->

      <div class="px-4">
        <div class="table-wrapper">
          <!--Table-->
          <table class="table table-hover mb-0 getArt">
            <!--Table head-->
            <thead>
                <tr>
                    <th class="th-lg">
                      ID
                    </th>
                    <th class="th-lg">
                      Articulo
                    </th>
                    <th class="th-lg">
                      Categoria/<br/>Subcategoria
                    </th>
                    <th class="th-lg">
                        Autor
                    </th>
                    <th class="th-lg">
                        Fecha
                    </th>
                    <th class="th-lg">
                    </th>
                    <th></th>
                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <?php foreach($data_articulos as $row){ ?>
                    <tr>
<!--                    <td class="hidden col-check-del">
                            <input class="form-check-input inpDel" value="<?php #echo $row['Articulos']['id_articulos']; ?>" type="checkbox" id="checkbox<?php #echo $row['Articulos']['id_articulos']; ?>">
                            <label class="form-check-label" for="checkbox<?php #echo $row['Articulos']['id_articulos']; ?>" class="label-table"></label>
                        </td>-->
                        <td>
                            <?php echo $row['Articulos']['id_articulos']; ?>
                        </td>
                        <td>
                            <?php echo $row['Articulos']['titulo_articulo']; ?>
                            <br />
                            <ul class="list-opc-acc">
                                <li><a href="<?php echo $this->webroot;?>blog/edicion/<?php echo $row['Articulos']['url']; ?>">[Editar]</a></li>
                                <li>[Edicion rapida]</li>
                                <li>[Cambiar Categoria]</li>
                                <li><a href="<?php echo $this->webroot;?>blog/articulo/<?php echo $row['Articulos']['url']; ?>">[Ver]</a></li>
                            </ul>
                        </td>
                        <td>
                            <?php echo $get_categorias[$row['Articulos']['id_categoria']]; ?> > <?php echo $get_subcategorias[$row['Articulos']['id_subcategoria']]; ?>
                        </td>
                        <td>
                            <?php echo $get_users[$row['Articulos']['id_users_autor']]; ?>
                        </td>
                        <td class="description">
                            <?php 
                            $_fecha = explode('-',$row['Articulos']['fecha']);
                            echo $_fecha[2]." de ".$meses[$_fecha[1]]." del ".$_fecha[0];
                            ?>
                        </td>
                        <td>
                            <!-- Material switch -->
                            <div class="switch">
                              <label>
                                <input type="checkbox" <?php echo ($row['Articulos']['status'] == 1) ? "checked='checked'" : ""; ?>>
                                <span class="lever"></span>
                              </label>
                            </div>
                        </td>
                        <td>
                            <a for="<?php echo $row['Articulos']['id_articulos']; ?>" class="opcTrash">
                                <button type="button" class="btn btn-outline-black btn-rounded btn-sm px-2">
                                    <i class="fas fa-trash-alt mt-0"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <!--Table body-->
          </table>
          <!--Table-->
        </div>

      </div>

    </div>
    <!-- Table with panel -->
    
    <div class="clearfix"></div>
    
<!--    <nav>
        <ul class="pagination pg-blue">
            <li class="page-item disabled">
                <a class="page-link" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link">1</a></li>
            <li class="page-item active">
                <a class="page-link">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link">3</a></li>
            <li class="page-item">
                <a class="page-link">Next</a>
            </li>
        </ul>
    </nav>
    <div class="col-lg-12 col-xs-12 text-center">
        <nav>
        <?php
//        echo $this->Paginator->numbers(array(
//            'before' => '<ul class="pagination pg-blue">',
//            'separator' => '',
//            'currentClass' => 'page-link active',
//            'currentTag' => 'a',
//            'onclick' => "enviar.paginar(this); return false;",
//            'tag' => 'li',
//            'after' => '</ul>'
//            ));
        ?>
        </nav>
    </div>-->
<?php 

}
else{
?>
    <div class="modal-dialog modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead"></p>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="fas fa-times fa-4x mb-3 animated rotateIn"></i>
                    <p>¡A&uacute;n no hay datos registrados!</p>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
    <div class="clearfix"></div>
    
<?php } ?>
<div class="clearfix"></div>