<div class="clearfix"></div>

<!-- Material form contact -->
<div class="col-md-10 offset-md-1">
    <div class="card mb-5">
        <!--Card content-->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#dataUser" role="tab" aria-controls="home" aria-selected="true">Datos de Usuario</a>
            </li>
            <?php if($this->UserAuth->getGroupName() == 'Admin'){ ?>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#dataPass" role="tab" aria-controls="profile" aria-selected="false">Contrase&ntilde;a</a>
                </li>
            <?php } ?>
            <?php if($this->UserAuth->getGroupName()== 'Admin'){ ?>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#dataPer" role="tab" aria-controls="contact" aria-selected="false">Permisos del sistema</a>
                </li>
            <?php } ?>
        </ul>
        <div class="card-body px-lg-5 pt-0">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="dataUser" role="tabpanel" aria-labelledby="home-tab">
                    <!-- Form -->
                    <form class="text-center" name="frmEditUser" id="frmEditUser" action="<?php echo $this->webroot; ?>editUser" style="color: #757575;" method="POST">
                        <input type="hidden" name="data[User][id]" value="<?php #echo $data_user['User']['id']; ?>" />
                        <input type="hidden" name="data[opc]" value="1" />
                        <!-- Name --> 
                        <div class="md-form mt-3">
                            <input type="text" id="inpNomCat"name="data[User][name]" class="form-control required" value="<?php echo (isset($data_users[0]['User']['name']) && !empty($data_users[0]['User']['name'])) ? $data_users[0]['User']['name'] : ""?> ">
                            <label for="materialContactFormName">Nombre</label>
                        </div>

                        <!-- E-mail -->
                        <div class="md-form">
                            <input type="email" id="inpFriendly" name="data[User][email]" class="form-control required" <?php if($this->UserAuth->getGroupName()!='Admin'){ ?> readonly="readonly" <?php } ?> value="<?php echo (isset($data_users[0]['User']['email']) && !empty($data_users[0]['User']['email'])) ? $data_users[0]['User']['email'] : ""?>">
                            <label for="materialContactFormEmail" class="label-friendly">Email</label>
                        </div>


                        <!--Message-->
                        <div class="md-form">
                            <select class="browser-default custom-select required" id="inpRol" name="data[User][user_group_id]">
                                <option>Rol de usuario</option>
                                <?php foreach($userGroups as $key => $val){ ?>
                                    <option value="<?php echo $key; ?>" <?php echo ($key == $data_users[0]['User']['user_group_id']) ? "selected='selected'" : ""; ?>>
                                        <?php echo $val; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="clearfix"></div>
                        
                        <div class="md-form col-md-4 offset-md-3">
                            <!-- Send button -->
                            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect btnGuardar" type="submit">Guardar</button>
                        </div>

                    </form>
                    <!-- Form -->                    
                </div>
                <?php if($this->UserAuth->getGroupName() == 'Admin'){ ?>
                    <div class="tab-pane fade" id="dataPass" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Form -->
                        <form class="text-center" name="frmEditPass" id="frmEditPass" action="<?php echo $this->webroot; ?>editUser" style="color: #757575;" method="POST">
                            <input type="hidden" name="data[User][id]" value="<?php #echo $data_user['User']['id']; ?>" />
                            <input type="hidden" name="data[opc]" value="2" />
                            
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

                            <div class="md-form col-md-4 offset-md-3">
                                <!-- Send button -->
                                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect btnGuardar" type="submit">Actualizar</button>
                            </div>

                        </form>
                        <!-- Form -->                    
                    </div>
                <?php } ?>
                <?php if($this->UserAuth->getGroupName() == 'Admin'){ ?>
                    <div class="tab-pane fade" id="dataPer" role="tabpanel" aria-labelledby="contact-tab">
                        <!-- Form -->
                        <form class="text-center" name="frmEditUser" id="frmEditUser" action="<?php echo $this->webroot; ?>editUser" style="color: #757575;" method="POST">
                            <input type="hidden" name="data[User][id]" value="<?php #echo $data_user['User']['id']; ?>" />
                            <input type="hidden" name="data[opc]" value="1" />
                            <!-- Name --> 
                            <div class="md-form mt-3">
                                <input type="text" id="inpNomCat"name="data[User][name]" class="form-control required" value="<?php echo (isset($data_users[0]['User']['name']) && !empty($data_users[0]['User']['name'])) ? $data_users[0]['User']['name'] : ""?> ">
                                <label for="materialContactFormName">Nombre</label>
                            </div>

                            <!-- E-mail -->
                            <div class="md-form">
                                <input type="email" id="inpFriendly" name="data[User][email]" class="form-control required" <?php if($this->UserAuth->getGroupName()!='Admin'){ ?> readonly="readonly" <?php } ?> value="<?php echo (isset($data_users[0]['User']['email']) && !empty($data_users[0]['User']['email'])) ? $data_users[0]['User']['email'] : ""?>">
                                <label for="materialContactFormEmail" class="label-friendly">Email</label>
                            </div>


                            <!--Message-->
                            <div class="md-form">
                                <select class="browser-default custom-select required" id="inpRol" name="data[User][user_group_id]">
                                    <option>Rol de usuario</option>
                                    <?php foreach($userGroups as $key => $val){ ?>
                                        <option value="<?php echo $key; ?>" <?php echo ($key == $data_users[0]['User']['user_group_id']) ? "selected='selected'" : ""; ?>>
                                            <?php echo $val; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <div class="clearfix"></div>

                            <div class="md-form col-md-4 offset-md-3">
                                <!-- Send button -->
                                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect btnGuardar" type="submit">Guardar</button>
                            </div>

                        </form>
                        <!-- Form -->                    
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
</div>
<!-- Material form contact -->
