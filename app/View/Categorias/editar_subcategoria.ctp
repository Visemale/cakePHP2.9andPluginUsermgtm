<!-- Material form contact -->
<div class="col-md-8 offset-md-2">
    <div class="card mb-5">

        <h5 class="card-header text-center py-4">
            <strong>Editar Categoria</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" name="frmAddCat" id="frmAddCat" action="<?php echo $this->webroot; ?>categorias/editar_categoria" style="color: #757575;" method="POST">
                <input type="hidden" readonly="readonly" name="data[Subcategorias][id_subcategorias]" value="<?php echo $id_subcategoria; ?>" />
                
                <div class="clearfix"></div>

                <div class="md-form mt-3">
                    <input type="text" id="inpNomSubCat"name="data[Subcategorias][nombre_subcategoria]" class="form-control required" value="<?php echo $data_subcategoria[0]['Subcategorias']['nombre_subcategoria']; ?>" />
                    <label for="materialContactFormName">Nombre de la categoria</label>
                </div>

                
                <div class="md-form">
                    <input type="text" id="inpFriendly" name="data[Subcategorias][friendly]" class="form-control required" readonly="readonly" value="<?php echo $data_subcategoria[0]['Subcategorias']['friendly']; ?>" />
                    <label for="materialContactFormEmail" class="label-friendly">friendly</label>
                </div>


                <div class="md-form">
                    <textarea type="text" id="inpDescripcion" name="data[Subcategorias][descripcion]" class="form-control md-textarea required" rows="12"><?php echo $data_subcategoria[0]['Subcategorias']['descripcion']; ?></textarea>
                    <label for="materialContactFormMessage">Escribe una descripcion</label>
                </div>
                
                <div class="clearfix"></div>
                                
                <div class="md-form mt-3 col-md-8 offset-md-2">
                    <select class="browser-default custom-select required" id="inpRol" name="data[Categorias][id_categoria]">
                        <option value="">Categoria</option>
                        <?php foreach($get_categorias as $key => $val){ ?>
                            <option value="<?php echo $key; ?>" <?php echo ($key == $data_subcategoria[0]['Subcategorias']['id_categoria']) ? 'selected="selected"' : ""; ?> >
                                <?php echo $val; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="clearfix"></div>
                
                <!-- Send button -->
                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect btnGuardar" type="submit">Actualizar</button>

            </form>
            <!-- Form -->

        </div>

    </div>
</div>
<!-- Material form contact -->