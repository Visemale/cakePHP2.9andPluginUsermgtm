<?php if(isset($users) && count($users) > 0){ ?>

    <div class="clearfix"></div>
    <div class="row col-lg-12">
        <div class="col-lg-3 offset-lg-8">
            <select class="browser-default custom-select">
                <option selected>Selecciona Rol de Usuario</option>
                <?php foreach($get_users_groups as $key => $val){ ?>
                    <option value="<?php echo $key; ?>">
                        <?php echo $val; ?>
                    </option>
                <?php } ?>
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

        <a href="" class="white-text mx-3">Todos los usuarios</a>

        <div>
          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
            <i class="far fa-trash-alt mt-0"></i>
          </button>
<!--          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
            <i class="fas fa-info-circle mt-0"></i>
          </button>-->
        </div>

      </div>
      <!--/Card image-->

      <div class="px-4">

        <div class="table-wrapper">
          <!--Table-->
          <table class="table table-hover mb-0">

            <!--Table head-->
            <thead>
                <tr>
                    <th></th>
                    <th class="th-lg">
                        <a>ID
                            <i class="fas fa-sort ml-1"></i>
                        </a>
                    </th>
                    <th class="th-lg">
                        <a href="">Nombre
                            <i class="fas fa-sort ml-1"></i>
                        </a>
                    </th>
                    <th class="th-lg">
                        <a href="">Email
                            <i class="fas fa-sort ml-1"></i>
                        </a>
                    </th>
                    <th class="th-lg">
                        <a href="">Rol de Usuario
                            <i class="fas fa-sort ml-1"></i>
                        </a>
                    </th>
                    <th class="th-lg">
                        <a href="">Status
                            <i class="fas fa-sort ml-1"></i>
                        </a>
                    </th>
                    <th></th>
              </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <?php foreach($users as $row){ ?>
                    <tr>
                        <td class="hidden col-check-del">
                            <input class="form-check-input inpDel" value="<?php echo $row['User']['id']; ?>" type="checkbox" id="checkbox<?php echo $row['User']['id']; ?>">
                            <label class="form-check-label" for="checkbox<?php echo $row['User']['id']; ?>" class="label-table"></label>
                        </td>
                        <td>
                            <?php echo $row['User']['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['User']['name']; ?>
                        </td>
                        <td>
                            <?php echo $row['User']['email']; ?>
                        </td>
                        <td class="description">
                            <?php echo $get_users_groups[$row['User']['user_group_id']]; ?>
                        </td>
                        <td>
                            <!-- Material switch -->
                            <div class="switch">
                              <label>
                                <input type="checkbox" <?php echo ($row['User']['active'] == 1) ? "checked='checked'" : ""; ?>>
                                <span class="lever"></span>
                              </label>
                            </div>
                        </td>
                        <td>
                            <a href="<?php echo $this->webroot; ?>editUser/<?php echo $row['User']['id']; ?>">
                                <button type="button" class="btn btn-outline-black btn-rounded btn-sm px-2 btn-sm-table ">
                                    <i class="fas fa-pencil-alt mt-0"></i>
                                </button>
                            </a>                            
                            <a href="<?php echo $this->webroot; ?>viewUser/<?php echo $row['User']['id']; ?>">
                                <button type="button" class="btn btn-outline-black btn-rounded btn-sm px-2 btn-sm-table ">
                                    <i class="fas fa-eye mt-0"></i>
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