<!-- Material form contact -->
<div class="col-md-8 offset-md-2">
    <div class="card mb-5">

        <h5 class="card-header text-center py-4">
            <strong>Nueva Categoria</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" name="frmAddCat" id="frmAddCat" action="<?php echo $this->webroot; ?>categorias/nueva_categoria" style="color: #757575;" method="POST">

                <!-- Name --> 
                <div class="md-form mt-3">
                    <input type="text" id="inpNomCat"name="data[Categorias][nombre_categoria]" class="form-control required">
                    <label for="materialContactFormName">Nombre de la categoria</label>
                </div>

                <!-- E-mail -->
                <div class="md-form">
                    <input type="text" id="inpFriendly" name="data[Categorias][friendly]" class="form-control required" readonly="readonly">
                    <label for="materialContactFormEmail" class="label-friendly">friendly</label>
                </div>


                <!--Message-->
                <div class="md-form">
                    <textarea type="text" id="inpDescripcion" name="data[Categorias][descripcion]" class="form-control md-textarea required" rows="3"></textarea>
                    <label for="materialContactFormMessage">Escribe una descripcion</label>
                </div>

                <!-- Send button -->
                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect btnGuardar" type="submit">Guardar</button>

            </form>
            <!-- Form -->

        </div>

    </div>
</div>
<!-- Material form contact -->