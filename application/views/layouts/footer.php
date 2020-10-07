<div class="footer">
	<a href="#"><i class="far fa-question-circle"></i> faQ</a>
	<a href="#" class="help-user"><i class="fas fa-info"></i> info</a>
  <div class="cite">	
  	<cite>Todos los derechos reservados @system2021</cite>

  </div>
</div>

<!-- MODALS -->

<div class="modal fade" id="config-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 style="color: #ffffff;" class="modal-title text-center" id="exampleModalLongTitle">Configuración del Sistema</h3>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="col-md-12 text-center">
                <h6 style="margin-bottom: 15px;">**Atención, seleccione si sólo necesita cambiar el fondo de su sistema**</h6>
              </div>
              <div class="col-md-12">
                <select class="form-control">
                  <option value="Fondo.." selected disabled>Fondo..</option>
                  <option value="White">Claro</option>
                  <option value="Dark">Oscuro</option>
                  <option value="Sky">Celeste</option>
                </select>
              </div>
              <div class="col-md-6">
                <i class="fas fa-user-alt" style="font-size: 21px; color: #ffffff;"></i>
                <input type="text" name="nombre" placeholder="Nombre">
              </div>
              <div class="col-md-6">
                <i class="fas fa-user-minus" style="font-size: 21px; color: #ffffff;"></i>
                <input type="text" name="apellido" placeholder="Apellido">
              </div>
              <div class="col-md-6">
                <i class="fas fa-envelope" style="font-size: 21px; color: #ffffff;"></i>
                <input type="text" name="email" placeholder="Email">
              </div>
              <div class="col-md-6">
                <i class="fas fa-address-card" style="font-size: 21px; color: #ffffff;"></i>
                <input type="text" name="identificacion" placeholder="Identificación">
              </div>
              <div class="col-md-12 text-center" style="margin-top: 21px !important; color: #ffffff;">
                <h3>Pagos actuales</h3>
              </div>
              <div class="col-md-6 text-center" style="margin-top: 21px;">
                <h4 style="color: #F3F3F3;">Suscripciones</h4>
              </div>
              <div class="col-md-6 text-center" style="margin-top: 21px;">
                <h4 style="color: #F3F3F3;">Métodos de pago</h4>
              </div>
              <div class="col-md-6 text-center">
                <label for="btn" style="color: #DEDEDE; font-weight: 155;">30dX67usd</label>
                <button class="btn" type="button"><i class="fas fa-toggle-on green"></i></button>
              </div>
            </div>
          </div>
       </form>
            
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="botonVerde">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<!--LISTA USUARIOS-->

<div class="modal fade" id="lista-cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 style="color: #ffffff;" class="modal-title text-center" id="exampleModalLongTitle">Lista de usuarios</h3>
      </div>
      <div class="modal-body">
        
      </div>
    </div>
  </div>
</div>



<!--ELIMINAR CLIENTE-->

<div class="modal fade" id="eliminar-cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 style="color: #ffffff;" class="modal-title text-center" id="exampleModalLongTitle">Eliminar Cliente</h3>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="botonVerde">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<!--LISTA CLASIFICACIONES-->

<div class="modal fade" id="lista-clasificacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 style="color: #ffffff;" class="modal-title text-center" id="exampleModalLongTitle">Lista Clasificaciones</h3>
      </div>
      <div class="modal-body">
        
      </div>
    </div>
  </div>
</div>

<!--AÑADIR CLASIFICACIONES-->

<div class="modal fade" id="añadir-clasificacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 style="color: #ffffff;" class="modal-title text-center" id="exampleModalLongTitle">Clasificación <small>nuevo</small></h3>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
                  <div class="col-md-6">
                    <i class="fas fa-file-alt" style="font-size: 21px; color: #ffffff;"></i>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre: ej | lácteos">
                  </div>
                  <div class="col-md-6">
                    <i class="fas fa-file-alt" style="font-size: 21px; color: #ffffff;"></i>
                    <input type="text" name="descripcion" id="descripcion" placeholder="Descripción">
                  </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="botonVerde">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!--EDITAR CLASIFICACIONES-->

<div class="modal fade" id="editar-clasificacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 style="color: #ffffff;" class="modal-title text-center" id="exampleModalLongTitle">Editar Clasificación</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 text-center">
            <select class="form-control">
              <option>Auriculares</option>
              <option>Teclados</option>
              <option>Notebooks</option>
            </select>
          </div>
        </div>
        <form method="POST">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
                  <div class="col-md-6">
                    <i class="fas fa-file-alt" style="font-size: 21px; color: #ffffff;"></i>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre: ej | notebooks">
                  </div>
                  <div class="col-md-6">
                    <i class="fas fa-file-alt" style="font-size: 21px; color: #ffffff;"></i>
                    <input type="text" name="descripcion" id="descripcion" placeholder="Descripción">
                  </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="botonVerde">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<!--ELIMINAR CLASIFICACIONES-->

<div class="modal fade" id="eliminar-clasificacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 style="color: #ffffff;" class="modal-title text-center" id="exampleModalLongTitle">Eliminar Clasificación</h3>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="botonVerde">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<!-- MODALS -->

</body>
</html>


<script type="text/javascript" src="<?php echo base_url() ?>assets/template/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/template/bootstrap/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">

	// var modalSettings = $('.navBar .icon-navBar #modal');
	// $(".navBar .icon-navBar a i[class='fas fa-user-cog icon-on f-right']").on('click', function(e) {
	// 	modalSettings.removeClass('modal');
	// 	modalSettings.addClass('modalTrue');
	// });

	// modalSettings.on('dblclick', function(){
	// 	modalSettings.removeClass('modalTrue');
	// 	modalSettings.addClass('modal');
	// });


  

	const getRemainTime = deadline => {
                        let now = new Date(),
                            remainTime = (new Date(deadline) - now + 1000) / 1000,
                            remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
                            remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
                            remainHours = ('0' + Math.floor(remainTime / 3600 % 24)).slice(-2),
                            remainDays = Math.floor(remainTime / (3600 * 24));

                        return {
                            remainTime,
                            remainSeconds,
                            remainMinutes,
                            remainHours,
                            remainDays
                        }

                    };

                    const countdown = deadline => {
                        const elm = $('.navBarRight .validTime p.timing');

                        const timerUpdate = setInterval( () => {
                            let t = getRemainTime(deadline);
                            elm.html(`${t.remainDays}days ${t.remainHours}:${t.remainMinutes}:${t.remainSeconds} remaining`);

                            if(t.remainTime <= 1) {
                               clearInterval(timerUpdate); 
                            }

                        }, 1000)
                    };

                    countdown("2020-09-18 19:43:12");

</script>