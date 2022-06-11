<input type="text" name="txtCodigo" id="txtCodigo">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Aprendiz
        <small>El futuro es ahora</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-user"></i> Home</a></li>
        <li><a href="#">Aprendiz</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DATOS DEL APRENDIZ</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <form method="post" id="frmAprendiz">
            <div class="box-body">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Codigo</span>
                        <input type="number" class="form-control" id="txtCodeAprendiz" name="txtCodeAprendiz">
                        <span class="input-group-addon">N</span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Nombre</span>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre">
                        <span class="input-group-addon">A</span>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Fecha de nacimiento</span>
                        <input type="date" class="form-control" id="txtFechaNacimiento" name="txtFechaNacimiento">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Sexo</span>
                        <input type="text" class="form-control" id="txtSexo" name="txtSexo" >
                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                    </div>
                </div>
                <!-- ./col -->
                </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Ciudad</span>
                        <input type="text" class="form-control" id="txtCiudad" name="txtCiudad">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              
                <button class="btn btn-app" onclick="validate(event)">
                    <i class="fa fa-save"></i> Guardar
                </button>
                <button class="btn btn-app" onclick="getGeneraReporte(event)">
                    <i class="fa fa-print"></i> Reporte
                </button>
            </div>
            <!-- /.box-footer-->
        </form>
        <?php
          if (isset($_POST['txtNombre'])){
            $objCtrAprendiz = new AprendizController();
            $objCtrAprendiz -> setInsertAprendiz(
              $_POST['txtCodeAprendiz'],
              $_POST['txtNombre'],
              $_POST['txtFechaNacimiento'],
              $_POST['txtSexo'],
              $_POST['txtCiudad'],
          
            );
          }
        ?>
      </div>
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <table id="users" class="table table-dark table-striped table-hover">
              <thead>
                <tr>
                  <th class="text-center">Codigo</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Fecha de nacimiento</th>
                  <th class="text-center">Sexo</th>
                  <th class="text-center">Ciudad</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <form method="post">
                <?php
                  $objCtrAprendizAll = new AprendizController();
                  if (gettype($objCtrAprendizAll -> getSearchAllAprendiz()) == 'boolean'){
                    echo '
                    <tr>
                      <td colspan="5">no hay datos que mostrar</td>
                    </tr>';
                  }else{
                    
                    foreach ($objCtrAprendizAll -> getSearchAllAprendiz() as $key => $value) {
                      echo '
                      <tr>
                        <td>'.$value["CodeAprendiz"].'</td>
                        <td>'.$value["Nombre"].'</td>
                        <td>'.$value["FechaNacimiento"].'</td>
                        <td>'.$value["Sexo"].'</td>
                        <td>'.$value["Ciudad"].'</td>
                        <td class="text-center">
                          <button class="btn btn-social-icon bg-yellow" onclick="getData(this.parentElement.parentElement)" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-edit"></i>
                          </button>
                          <button class="btn btn-social-icon btn-google"  onClick="erase(this.parentElement.parentElement)">
                            <i class="fa fa-trash"></i>
                          </button>
                        </td>
                      </tr>';
                    }//FIN FOREACH
                  }//FIN IF
                ?>
                </form>
              </tbody>
            </table>
        </div>
        
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg bg-info">
        <h4 class="modal-title">Modificar Aprendiz</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" id="frmAprendizModificar">
          <input type="hidden" name="txtCodigoM" id="txtCodigoM">
          <div class="box-body">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Nombre</span>
                        <input type="text" class="form-control" id="txtNombreM" name="txtNombreM">
                        <span class="input-group-addon">N</span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Fecha Nacimiento</span>
                        <input type="text" class="form-control" id="txtFechaNacimiento" name="txtFechaNacimiento">
                        <span class="input-group-addon">A</span>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Sexo</span>
                        <input type="text" class="form-control" id="txtSexo" name="txtSexo">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Ciudad</span>
                        <input type="text" class="form-control" id="txtCiudad" name="txtCiudad" >
                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            </div>
            <!-- /.box-body -->

            <!-- /.box-footer-->
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <div>
          <button class="btn btn-app float-left" onclick="validateModify(event)">
              <i class="fa fa-save"></i> Guardar
          </button>
          <?php
            if (isset($_POST['txtNombreM'])){
              $objCtrAprendiz = new AprendizController();
              $objCtrAprendiz -> setUpdateAprendiz(
                $_POST['txtCodigoM'],
                $_POST['txtNombreM'],
                $_POST['txtApellidoM'],
                $_POST['txtUsuarioM'],
                $_POST['txtClaveM']
              );
              include_once 'view/module/aprendiz.php'; 
            }
          ?>
          <button class="btn btn-app" data-dismiss="modal">
              <i class="fa fa-close"></i> Salir
          </button>
        </div>
      </div>

    </div>
  </div>
</div>