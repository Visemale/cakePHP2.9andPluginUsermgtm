<form id="frmNvoArt" name="frmNvoArt" method="POST" action="<?php echo $this->webroot; ?>blog/edicion" enctype=multipart/form-data >
    <input type="hidden" name="data[id_articulos]" readonly="readonly" value="<?php echo $data_articulo[0]['Articulos']['id_articulos']; ?>" />
    <input type="hidden" id="prevTag" readonly="readonly" value='<?php echo ($data_articulo[0]['Articulos']['tags']); ?>' />
    <input type="hidden" id="prevCat" readonly="readonly" value='<?php echo ($data_articulo[0]['Articulos']['id_categoria']); ?>' />
    <input type="hidden" id="prevSubCat" readonly="readonly" value='<?php echo ($data_articulo[0]['Articulos']['id_subcategoria']); ?>' />
    <input type="hidden" id="inpFriendly" name="data[Articulos][friendly]" class="form-control completUrl" readonly="readonly" value="<?php echo ($data_articulo[0]['Articulos']['friendly']); ?>" />
    <div class="col-md-12 row contentFrm">         
        <div class="col-md-8">
            <div class="card mb-5">
                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">
                    <div class="md-form">
                        <i class="far fa-newspaper"></i>&nbsp;<strong>Editar Articulo</strong>
                    </div>
                    <div class="md-form mt-3">
                        <input type="text" id="inpNomArt" name="data[Articulos][titulo_articulo]" class="form-control required" value="<?php echo (isset($data_articulo[0]['Articulos']['titulo_articulo']) && !empty($data_articulo[0]['Articulos']['titulo_articulo'])) ? $data_articulo[0]['Articulos']['titulo_articulo'] : "" ?>" />
                        <label for="materialContactFormName">Titulo del articulo</label>
                    </div>
                    <!-- E-mail -->
                    <div class="md-form">
                        <div class="col-md-12 row">
                            <div class="col-md-12">
                                <label class="legendUrl">
                                    <strong>La Url ser&aacute;: </strong>
                                    /blog/articulo/
                                    <cat><?php echo $data_articulo[0]['Articulos']["friendly_cat"]; ?>/</cat>
                                    <subcat><?php echo $data_articulo[0]['Articulos']["friendly_subcat"]; ?>/</subcat>
                                    <kart>
                                        <?php echo $data_articulo[0]['Articulos']['id_articulos']; ?>/
                                    </kart>
                                    <nomart>
                                        <?php echo (isset($data_articulo[0]['Articulos']['friendly']) && !empty($data_articulo[0]['Articulos']['friendly'])) ? $data_articulo[0]['Articulos']['friendly'] : "" ?>
                                    </nomart>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <textarea name="data[Articulos][cuerpo_articulo]" style="height:500px;width:103% !important;" id="inp_cuerpo_articulo" class="form-control text_area_cuerpo_articulo required"><?php echo (isset($data_articulo[0]['Articulos']['cuerpo_articulo']) && !empty($data_articulo[0]['Articulos']['cuerpo_articulo'])) ? $data_articulo[0]['Articulos']['cuerpo_articulo'] : "" ?></textarea>
                    <!-- Form -->
                </div>
            </div>
        </div>
       <div class="col-md-4">
<!--             ///  estado del articulo  /// -->
            <div class="card mb-5">
                <div class="col-md-12">
                    <!--Message-->
                    <div class="col-md-12 row">
                        <div class="md-form  col-md-6 ">
                            <button class="button btn btn-default btn-sm">
                                <i class="fa fa-eye"></i>&nbsp;
                                Vista previa
                            </button>
                        </div>
                        <div class="md-form  col-md-6 text-right ">
                            <button class="button btn btn-default btn-sm" type="submit" value="Guardar" >
                                <i class="fa fa-save"></i>&nbsp;
                                Guardar
                            </button>
                            
                        </div>
                    </div>

                    <!--Message-->
                    <div class="md-form mt-3 col-md-12 content-estado-articulo">
                        <ul class="list-estado-articulo">
                            <li>
                                <div class="col-md-12 row">
                                    <div class="col-md-6">
                                        <?php 
                                        switch ($data_articulo[0]['Articulos']['status']){
                                            case 1 : $status_articulo = "Publicado";    break;
                                            case 2 : $status_articulo = "Borrador";     break;
                                            case 0 : $status_articulo = "No publicado"; break;
                                        }
                                        ?>
                                        <p>Estado: <?php echo $status_articulo; ?></p>
                                    </div>
                                    <div class="col-md-6 padswitch">
                                        <div class="switch">
                                            <label>
                                                <input type="checkbox" checked="checked" name="data[Articulos][status]" />
                                                <span class="lever"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p>&iquest;Qui&eacute;n puede verlo?:</p>
                                <div class="col-md-12">
                                    <?php foreach($userGroups as $key => $val){ ?>
                                        <div class="form-check">
                                            <?php $array_permisos_check = json_decode($data_articulo[0]['Articulos']['rol_permisos'], true); ?>
                                            <input type="checkbox" name="usersPerm[]" class="form-check-input" id="opcRol<?php echo $key; ?>" value="<?php echo $key; ?>" <?php echo (in_array($key, $array_permisos_check)) ? 'checked="checked"': "" ?>>
                                            <label class="form-check-label" for="opcRol<?php echo $key; ?>"><?php echo $val; ?></label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--///  Categoria del articulo   /// -->

            <div class="card mb-5">
                <div class="clearfix"></div>
                <div class="md-form mt-3 col-md-8 offset-md-2">
                    <select class="browser-default custom-select required" id="inpCategoria" name="data[Articulos][id_categoria]">
                        <option>Categoria</option>
                        <?php foreach($get_categorias as $key => $val){ ?>
                            <option value="<?php echo $key; ?>" <?php echo ($key == $data_articulo[0]['Articulos']['id_categoria']) ? 'selected="selected"': "" ?>><?php echo $val; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="md-form mt-3 col-md-8 offset-md-2">
                    <select class="browser-default custom-select required" id="inpSubcategoria" name="data[Articulos][id_subcategoria]">
                        <option value="">Subcategoria</option>
                    </select>
                </div>
            </div>

            <!--///   Etiquetas  ///-->

            <div class="card mb-5">
                <div class="col-md-10 offset-1">
                    <div class="md-form">
                        <input type="text" class="form-control mdb-autocomplete tagsCreate" autocomplete="off" >
                        <label for="form-autocomplete" class="active">Tags</label>
                    </div>
                    <div class="md-form contentItemTags"></div>
                </div>
                <div class="clearfix"></div>
            </div>

<!--            <div class="card mb-5">
                <div class="clearfix"></div>
                <div class="col-md-10 offset-1">
                    <div class="md-form">
                        <label for="form-autocomplete" class="active">Imagen Destacada</label>
                    </div>    
                    <hr />
                    <div class="file-field big">
                        <input type="file" name="slider_multiple[]" id="file" multiple="true" accepts="image/*" class="inp-miltupl"/>
                        <a class="btn-floating btn-lg pink lighten-1 mt-0 float-left">
                            <i class="far fa-image"></i>                            
                        </a>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" disabled="disabled" id="inpImgDes">
                        </div>
                        <figure class="figure minImgDes" style="display: none;">
                            <img src="" class="figure-img img-fluid z-depth-1 imgDesThumbail" alt="">
                            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 btnTrashImgDes">
                                <i class="far fa-trash-alt mt-0"></i>
                            </button>
                        </figure>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>             -->
        </div>
    </div>
 </form>

<script type="text/javascript">
    document.getElementById("content").addEventListener('load', function() {
        formTags();
    });
    
</script>