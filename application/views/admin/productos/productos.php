<style type="text/css">
  input{
    border: 1px solid transparent;
    border-bottom: 1px solid #fb005b;
    width: 80%;
    padding-top: 15px;
    color: #fb005b;
  }

  input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
  -webkit-appearance: none !important;
  margin: 0 !important;
}

input[type=number] {
  -moz-appearance:textfield !important;
}

  h2#swal2-title.swal2-title{
    color: #fb005b !important;
  }

  input:focus, input.form-control:focus {

    outline:none !important;
    outline-width: 0 !important;
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
  }

  .inputModal::placeholder{
    color: #fb005b !important;
  }

  .btnRosa{
    background-color: transparent;
    border: 1px solid #fb005b;
    color: #fb005b;
  }
  .btnRosa:hover{
    background-color: #fb005b;
    color: #ffffff;
  }

</style>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                </div>
              </div>
              <div class="card-body">
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <th style="font-weight: 450; color: #fb005b;">Nombres</th>
                          <th style="font-weight: 450; color: #fb005b;">Teléfono</th>
                          <th style="font-weight: 450; color: #fb005b;">Ciudad</th>
                          <th style="font-weight: 450; color: #fb005b;">Dirección</th>
                          <th style="font-weight: 450; color: #fb005b;">Condición</th>
                          <th style="font-weight: 450; color: #fb005b;">Cuit</th>
                          <th style="font-weight: 450; color: #fb005b;">Acciones</th>
                        </thead>
                        <tbody>
                          <?php foreach($clientes as $cliente): ?>
                            <tr>
                              <td><?php echo $cliente->nombre_cliente; ?></td>
                              <td><?php echo $cliente->telefono_cliente; ?></td>
                              <td><?php echo $cliente->ciudad_cliente; ?></td>
                              <td><?php echo $cliente->direccion_cliente; ?></td>
                              <td><?php echo $cliente->condicion_iva; ?></td>
                              <td><?php echo $cliente->cuit_cliente; ?></td>
                              <td>
                                <button class="btn editClienteBtn" style="padding: 0px;" type="button" value="<?php echo $cliente->id_cliente; ?>" data-toggle="modal" data-target="#modal-lg-edit"><i class='fas fa-pencil-alt' style='padding-right: 10px; color: orange;'></i></button>
                                <button class="btn deleteClienteBtn" style="padding: 0px;" value="<?php echo $cliente->id_cliente; ?>+<?php echo $cliente->nombre_cliente; ?>"><i class='fas fa-trash-alt' style="color: red;"></i></button>
                                
                              </td>
                            </tr>
                          <?php endforeach; ?>
                          <tr>
                            <td><button class="btn addClienteBtn" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-add"><i class="fa fa-plus" style="color: green;"></i></button></td>
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card -->

           
               
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!--MODAL AÑADIR CLIENTE-->
  <div class="modal fade" id="modal-lg-add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="color: green;"><i class="fas fa-user-plus"></i> Cliente</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">

                      <div class="col-md-6">
                        <i class="fas fa-user-alt" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="text" name="nombres" id="nombres" placeholder="Nombres">

                      </div>

                      <div class="col-md-6">
                        <i class="fas fa-phone" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="number" name="telefono" id="telefono" placeholder="Teléfono">
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <i class="fa fa-city" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="text" name="ciudad" id="ciudad" placeholder="Ciudad">
                      </div>

                      <div class="col-md-6">
                        <i class="fa fa-home" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="text" name="direccion" id="direccion" placeholder="Dirección">
                      </div>
                    </div>
                      
                    <div class="row">
                      <div class="col-md-6">
                        <i class="fa fa-address-card" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="number" name="cuit" id="cuit" placeholder="Cuit">
                      </div>

                      <div class="col-md-6">
                        <i class="fas fa-envelope" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="text" name="email" id="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <select id="condicion_iva" class="form-control" style="margin-top: 15px;">
                        <option selected disabled>Condición iva..</option>
                        <?php foreach($condiciones_iva as $condicion_iva): ?>
                          <option value="<?php echo $condicion_iva->id; ?>"><?php echo $condicion_iva->condicion_iva; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  
                </div>
                  
                </form>
              </div>
            <div class="modal-footer justify-content-end">
              <button type="button" id="btnRosa" class="btn btnRosa">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!--MODAL AÑADIR CLIENTE-->



<!--EDIT CLIENTE-->
<div class="modal fade" id="modal-lg-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 style="color: #ffffff;" class="modal-title text-center" id="exampleModalLongTitle">Cliente <small>editar</small></h3>
      </div>
      <div class="modal-body">
        <form method="POST" class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">

                      <div class="col-md-6">
                        <i class="fas fa-user-alt" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="text" name="nombresEdit" id="nombresEdit" placeholder="Nombres">

                      </div>

                      <div class="col-md-6">
                        <i class="fas fa-phone" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="number" name="telefonoEdit" id="telefonoEdit" placeholder="Teléfono">
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <i class="fa fa-city" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="text" name="ciudadEdit" id="ciudadEdit" placeholder="Ciudad">
                      </div>

                      <div class="col-md-6">
                        <i class="fa fa-home" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="text" name="direccionEdit" id="direccionEdit" placeholder="Dirección">
                      </div>
                    </div>
                      
                    <div class="row">
                      <div class="col-md-6">
                        <i class="fa fa-address-card" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="number" name="cuitEdit" id="cuitEdit" placeholder="Cuit">
                      </div>

                      <div class="col-md-6">
                        <i class="fas fa-envelope" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="text" name="emailEdit" id="emailEdit" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <select id="condicion_iva_editable" class="form-control cond_iva_editable" style="margin-top: 15px;">
                        <option selected disabled class="editableCondition">Condición iva..</option>
                        <?php foreach($condiciones_iva as $condicion_iva): ?>
                          <option class="claseCond" value="<?php echo $condicion_iva->id; ?>"><?php echo $condicion_iva->condicion_iva; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  
                </div>
                  
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" id="saveClientEditable" class="botonVerde">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!--EDIT CLIENTE-->