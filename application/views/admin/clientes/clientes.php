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

<script type="text/javascript">
  window.addEventListener('load', function() {
    
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

var base_url = '<?php echo base_url(); ?>';

  /* AÑADIR CLIENTE */

$('#btnRosa').on('click', function(){
    let myArr = "nombres="+$('#nombres').val() +
                "&telefono="+$('#telefono').val() +
                "&ciudad="+$('#ciudad').val() +
                "&direccion="+$('#direccion').val() +
                "&condicion_iva="+$('#condicion_iva').val() +
                "&cuit="+$('#cuit').val() +
                "&email="+$('#email').val();
              
                $.ajax({
                  type: 'POST',
                  data: myArr,
                  dataType:'json',
                  url:base_url+"clientes/clientes/addCliente",
                  success:function(response){
                    if(response.success==true){
                      
                      $('#modal-lg-add').modal("hide");

                      Toast.fire({
                          icon: 'success',
                          title: 'Cliente añadido satisfactoriamente!'
                        })

                      setTimeout(function(){
                        location.href=base_url+'clientes/clientes'
                      }, 1500);



                    }else if(response.success==false){
                      alert("ERROR!");
                    }

                  } // fin SUCCESS function

                }) // fin ajax
 })                


  /* AÑADIR CLIENTE */

  /* EDITAR CLIENTE */

  $('.editClienteBtn').on("click", function() {
    let idCliente = $(this).val();

      $.ajax({
        type:'POST',
        dataType:'json',
        url:base_url+'clientes/clientes/selectClientToEdit/'+idCliente,
        success:function(data){
          let datos = data.clientEditable;

            $('#nombresEdit').val(datos.nombre_cliente);
            $('#telefonoEdit').val(datos.telefono_cliente);
            $('#ciudadEdit').val(datos.ciudad_cliente);
            $('#direccionEdit').val(datos.direccion_cliente);
            $('#cuitEdit').val(datos.cuit_cliente);
            $('#emailEdit').val(datos.email_cliente);
            $('#condicion_iva_editable option.editableCondition').text(datos.condicion_iva);

            $('#saveClientEditable').on("click", function() {
              
              saveDataCliente(idCliente);

            })

        }
      })

  })

function saveDataCliente(idCliente){
  
  

      let clientEditableData = "nombres="+$('#nombresEdit').val() +
                                "&telefono="+$('#telefonoEdit').val() +
                                "&ciudad="+$('#ciudadEdit').val() +
                                "&direccion="+$('#direccionEdit').val() +
                                "&cuit="+$('#cuitEdit').val() +
                                "&email="+$('#emailEdit').val() +
                                "&condicion="+$('#condicion_iva_editable').val();
                                
                                  $.ajax({
                                    type:'POST',
                                    dataType:'json',
                                    data:clientEditableData,
                                    url:base_url+'clientes/clientes/updateCliente/'+idCliente,
                                    success:function(response){

                                      if (!(response.validation)) {
                                        console.log("ERROR!");
                                      }else{
                                        $('#modal-lg-edit').modal("hide");

                                        Toast.fire({
                                            icon: 'success',
                                            title: 'Cliente editado satisfactoriamente!'
                                          })

                                        setTimeout(function(){
                                          location.href=base_url+'clientes/clientes'
                                        }, 1500);
                                      }
                                    }
                                  })

  
}

  /* EDITAR CLIENTE */
  
  /* ELIMINAR CLIENTE */

  $('.deleteClienteBtn').on("click", function() {
    let infoBotonCliente = $(this).val(),
        infoCliente = infoBotonCliente.split("+"),
        nombreCliente = infoCliente[1];
    
      Swal.fire({

        title: 'Estás seguro de eliminar a '+nombreCliente+' ?',
        text: "No podrás recuperar el registro",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#fb005b',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Sí, eliminar ahora!',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.value) {
            var id_cliente = infoCliente[0];
            $.ajax({
                dataType:'json',
                url:base_url+"clientes/clientes/deleteCliente/"+id_cliente,
                success:function(resp){
                  
                  if(resp.success==true){
                    Toast.fire({
                          icon: 'success',
                          title: 'Registro eliminado satisfactoriamente!'
                    })

                    setTimeout("location.href='<?php echo base_url() ?>clientes/clientes'", 1500);
                  }else{
                    alert("DSADA"); // falta meterle la animación de error!!
                  }
                }

            }) // ajax
                
          }  //if promise

        }); // promise

  });

  /* ELIMINAR CLIENTE */

});

/*
  $('.editClienteBtn').on("click", function(){
    let id_cliente = $(this).val();

      $.ajax({
        dataType:'json',
        url:base_url+"movimientos/clientes/selectClientToEdit/"+id_cliente,
        success:function(response){
          let resp = response.clientEditable;
          $('#edit-cliente #nombres').val(resp.nombre_cliente);
          $('#edit-cliente #telefono').val(resp.telefono_cliente);
          $('#edit-cliente #direccion').val(resp.direccion_cliente);
          $('#edit-cliente #condicion_iva #cond_iva').text(resp.condicion_iva);
          $('#edit-cliente #cuit').val(resp.cuit_cliente);
          $('#edit-cliente #email').val(resp.email_cliente);
          $('#edit-cliente').modal("show");

          

        }

      })

  })

}); */
</script> 