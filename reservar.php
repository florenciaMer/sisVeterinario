<?php 
  include_once('app/config.php');
  include_once('layout/parte1.php');
  ?>
   <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

   <script>
var a;
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale:'es',
    editable:true,
    selectable:true,
    allDaySlot:false,

    events:'app/controllers/reservas/cargar_reserva.php',

    /*eventClick: function(info) {
    alert('Event: ' + info.event.title);
    alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
    alert('View: ' + info.view.type);

    // change the border color just for fun
    info.el.style.borderColor = 'red';
  }*/
    dateClick: function(info) {
         a = info.dateStr;
        var dias = ['LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES'];
        const fechaComoCadena = a;
        var numeroDia = new Date(fechaComoCadena).getDay();
    
    if(numeroDia == 5 || numeroDia == 6){
        alert('No puede reservar en fin de semana');
        return;
    }else{
        $('#modal_reservas').modal("show");
        $('#diaDeLaSemana').html(dias[numeroDia] +" "+ a);
    }
    },
  });
  calendar.render();
});

</script>
<style>
    #calendar {
    width: 100%;
    height: 80vh; /* Ajusta este valor según necesites */
    margin-bottom: 20px; /* Espacio entre el calendario y la sección de contacto */
}
</style>
<section class="others-services" style="margin: 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br><br>
                <h2>Reserva una <b class="text-info">Cita</b></h2>
            </div>
        </div>
        <div class="row">
            <div id='calendar' style="width: 100%; height: 80vh;"></div> <!-- Altura ajustada -->
        </div>
    </div>
</section>

<!-- Sección de contacto con margen adicional -->
<section class="contacto" style="margin-top: 20px;"> 
    <h2>Contáctanos</h2>
    <div class="container mb-4">
        <div class="row" style="display: flex; justify-content: center;">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre">
                            </div>
                            <div class="form-group">
                                <label>Correo</label>
                                <input type="email" name="correo" class="form-control" placeholder="Ingrese su correo">
                            </div>
                            <div class="form-group">
                                <label>Mensaje</label>
                                <textarea name="mensaje" class="form-control" placeholder="Ingrese su mensaje"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="modal_reservas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reserva tu cita para el dia <span id="diaDeLaSemana"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
          <center><b>Horarios de Atención</b></center>
        <div class="row">
            <div class="col-md-6">
                <div class="d-grid gap-2"> 
                    <b>Turno mañana</b>
                     <button class="btn btn-success mb-1" id="btn_h1" data-dismiss="modal">08:00 - 09:00</button>
                     <button class="btn btn-success mb-1" id="btn_h2" data-dismiss="modal">09:00 - 10:00</button>
                     <button class="btn btn-success mb-1" id="btn_h3" data-dismiss="modal">10:00 - 11:00</button>
                     <button class="btn btn-success mb-1" id="btn_h4" data-dismiss="modal">11:00 - 12:00</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-grid gap-2"> 
                    <b>Turno Tarde</b><br>
                     <button class="btn btn-success mb-1" id="btn_h5" data-dismiss="modal">12:00 - 13:00</button>
                     <button class="btn btn-success mb-1" id="btn_h6" data-dismiss="modal">13:00 - 14:00</button>
                     <button class="btn btn-success mb-1" id="btn_h7" data-dismiss="modal">14:00 - 15:00</button>
                     <button class="btn btn-success mb-1" id="btn_h8" data-dismiss="modal">15:00 - 16:00</button>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal formulario -->
<div class="modal fade" id="modal_formulario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reserva tu cita para el dia <span id="diaDeLaSemana"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombre">Nombre de la Mascota</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Nombre de la mascota">
                </div>
              </div>
             
              <div class="col-md-6">
              <div class="form-group">
                  <label for="nombre">Tipo de Servicio</label>
                  <select class="form-control">
                    <option value="lavado">Lavado</option>
                    <option value="lavado_con_bano">Lavado con baño</option>
                    <option value="corte">Corte de pelo</option>
                  </select>
              </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombre">Fecha de reserva</label>
                  <input type="text" class="form-control" name="fecha_reserva" id="fecha_reserva" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombre">Hora de reserva</label>
                  <input type="text" class="form-control" name="hora_reserva" id="hora_reserva" disabled>
                </div>
              </div>
              </div>
            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>
    $('#btn_h1').click(function(){
      $('#modal_formulario').modal("show");
      
      $('#fecha_reserva').val(a);
      var hora1 = "08:00 a 09:00";
      $("#hora_reserva").val(hora1);
    })
</script>    

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
  <?php include_once('layout/parte2.php');
  ?>
  </html>