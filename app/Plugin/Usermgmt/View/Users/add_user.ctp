<div class="clearfix"></div>

<!-- Material form contact -->
<div class="col-md-10 offset-md-1">
    <div class="card mb-5">
        <!--Card content-->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#dataUser" role="tab" aria-controls="home" aria-selected="true">Datos de Usuario</a>
            </li>
        </ul>
        <div class="card-body px-lg-5 pt-0">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="dataUser" role="tabpanel" aria-labelledby="home-tab">
                    <!-- Form -->
                    <form class="text-center" name="frmAddUser" id="frmAddUser" action="<?php echo $this->webroot; ?>addUser" style="color: #757575;" method="POST">
                        <input type="hidden" name="data[User][id]" value="<?php #echo $data_user['User']['id']; ?>" />
                        <input type="hidden" name="data[opc]" value="1" />
                        <!-- Name --> 
                        <div class="md-form mt-3 col-md-8 offset-md-2">
                            <input type="text" id="inpNomCat" name="data[User][name]" class="form-control required" >
                            <label for="materialContactFormName">Nombre</label>
                        </div>

                        <!-- E-mail -->
                        <div class="md-form mt-3 col-md-8 offset-md-2">
                            <input type="email" id="inpFriendly" name="data[User][email]" class="form-control required" <?php if($this->UserAuth->getGroupName()!='Admin'){ ?> readonly="readonly" <?php } ?> value="<?php echo (isset($data_users[0]['User']['email']) && !empty($data_users[0]['User']['email'])) ? $data_users[0]['User']['email'] : ""?>">
                            <label for="materialContactFormEmail" class="label-friendly">Email</label>
                        </div>


                        <!--Message-->
                        <div class="md-form mt-3 col-md-8 offset-md-2">
                            <select class="browser-default custom-select required" id="inpRol" name="data[User][user_group_id]">
                                <option value="">Rol de usuario</option>
                                <?php foreach($userGroups as $key => $val){ ?>
                                    <option value="<?php echo $key; ?>" >
                                        <?php echo $val; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        
                        <div class="md-form col-md-5 offset-md-7">
                            <!-- Send button -->
                            <input class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect btnGenerarContra" value="Generar Contrase&ntilde;a" type="button" />
                        </div>

                        <!-- Name --> 
                        <div class="md-form mt-3 col-md-8 offset-md-2">
                            <input type="password" id="inpPass" name="inpPass" class="form-control required inpPass" value="">
                            <button type="button" class="btn btn-outline-black btn-rounded btn-sm px-2 btn-sm-table eyePass password-icon">
                                <i class="fas fa-eye mt-0"></i>
                            </button>
                            <label for="materialContactFormName">Nueva Contrase&ntilde;a</label>
                        </div>

                        <!-- E-mail -->
                        <div class="md-form col-md-8 offset-md-2">
                            <input type="password" id="inpConfirPass" name="inpConfirPass" class="form-control required inpPass"  value="">
                            <label for="materialContactFormEmail" class="label-friendly">Confirmar Nueva Contrase&ntilde;a</label>
                        </div>

                        
                        
                        <div class="clearfix"></div>

                        <!-- Permisos --> 
                        
                        <div class="col-md-8 offset-md-2 row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked" >
                                    <label class="form-check-label" for="materialChecked">Material checked</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked2" >
                                    <label class="form-check-label" for="materialChecked2">Material checked</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked3" >
                                    <label class="form-check-label" for="materialChecked3">Material checked</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked5" checked>
                                    <label class="form-check-label" for="materialChecked5">Material checked</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked" >
                                    <label class="form-check-label" for="materialChecked">Material checked</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked2" >
                                    <label class="form-check-label" for="materialChecked2">Material checked</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked3" >
                                    <label class="form-check-label" for="materialChecked3">Material checked</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked5" checked>
                                    <label class="form-check-label" for="materialChecked5">Material checked</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="col-md-8 offset-md-2 row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked" >
                                    <label class="form-check-label" for="materialChecked">Material checked</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked2" >
                                    <label class="form-check-label" for="materialChecked2">Material checked</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked3" >
                                    <label class="form-check-label" for="materialChecked3">Material checked</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked5" checked>
                                    <label class="form-check-label" for="materialChecked5">Material checked</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked" >
                                    <label class="form-check-label" for="materialChecked">Material checked</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked2" >
                                    <label class="form-check-label" for="materialChecked2">Material checked</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked3" >
                                    <label class="form-check-label" for="materialChecked3">Material checked</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialChecked5" checked>
                                    <label class="form-check-label" for="materialChecked5">Material checked</label>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="md-form col-md-4 offset-md-3">
                            <!-- Send button -->
                            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect btnGuardar" type="submit">Guardar</button>
                        </div>

                    </form>
                    <!-- Form -->                    
                </div>
                
            </div>
        </div>

    </div>
</div>
<!-- Material form contact -->
