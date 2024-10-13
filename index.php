  <?php 
  include_once('app/config.php');
  include_once('layout/parte1.php');
  include_once('app/controllers/productos/listado_de_productos.php');
  ?>

  
          <section>
            
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://media.istockphoto.com/id/1885866215/es/foto/veterinarian-examines-the-pet.jpg?s=2048x2048&w=is&k=20&c=ef7shJ6zRxC9hW8PmxDd6dUvSLV6Q3NwWHFFnQA0a_w=" class="d-block w-100" alt="..." width="600px">
                      <div class="carousel-caption d-none d-md-block">
                        <a href="<?php echo $URL;?>/reservar.php" class="btn btn-outline-info">Reservar cita</a>
                        <p>Some representative placeholder content for the first slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="https://media.istockphoto.com/id/1846927886/es/foto/animales-para-examen-y-tratamiento-en-la-cl%C3%ADnica-veterinaria.jpg?s=2048x2048&w=is&k=20&c=ZY6pe3E2VHBrm8yD5y8C6-Y58b4bOMNAK2URo1QtxNk=" class="d-block w-100" alt="..." width="600px">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="https://media.istockphoto.com/id/1490713591/es/foto/veterinario-masculino-alegre-examinando-al-lindo-gatito-en-la-oficina.jpg?s=2048x2048&w=is&k=20&c=UWQsUcbFYcpFLaTqS5XzuBar2fWhjj6nC5R7mFZ3EQw=" class="d-block w-100" alt="..." width="600px">

                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </button>
                </div>
          </section>

          <section class="info">
              <br><br><br>
              <div class="container">
                  <div class="row">
                      <div class="col-md-6 col-sm-12">
                      </div>
                      
                      <div class="col-md-6 col-sm-12">
                          <br><br><br><br>
                          <h2>Acerca de nuestra <span style="color: cadetblue;">clínica de mascotas</span></h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit harum voluptates natus eum sit aspernatur magnam quisquam omnis et, illo deserunt beatae esse molestias possimus fugiat, ratione corporis eos quod!</p>
                          <a href="" class="btn btn-outline-primary">Mas sobre de nosotros</a>
                      </div>
                  </div>
              </div>
          </section>
          <section class="others-services">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <br><br>
                  <h2>Nuestros <b class="text-info">servicios</b></h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="card">
                    <img src="https://img.freepik.com/vector-gratis/ilustracion-dibujos-animados-veterinarios-dibujados-mano_23-2150722062.jpg?ga=GA1.1.385117786.1716470381&semt=ais_hybrid" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                  <br>
                </div>
                <div class="col-md-3">
                  <div class="card">
                    <img src="https://img.freepik.com/vector-gratis/diseno-fondo-veterinario_1345-12.jpg?ga=GA1.1.385117786.1716470381&semt=ais_hybrid" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                  <br>
                </div>
                <div class="col-md-3">
                  <div class="card">
                    <img src="https://img.freepik.com/vector-premium/mujer-estetoscopio-alrededor-su-cuello-dos-perros-dos-gatos_1187092-177788.jpg?ga=GA1.1.385117786.1716470381&semt=ais_hybrid" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                  <br>
                </div>
                <div class="col-md-3">
                  <img  width="100%" src="https://img.freepik.com/vector-premium/cuidado-animales_757131-6466.jpg?ga=GA1.1.385117786.1716470381&semt=ais_hybrid">
                </div>
              </div>
            </div>
          </section>
          <section class="others-services bg-warning">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <br><br>
                  <h2>Nuestros <b class="text-info">Productos</b></h2>
                </div>
              </div>
              <div class="row d-flex">
                <?php foreach ($productos as $producto) { ?>
                    <div class="col-md-3 mb-4"> <!-- Adding mb-4 for spacing between rows -->
                        <div class="card">
                            <img src="<?php echo $URL . '/public/img/productos/' . $producto['imagen']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                                <p class="card-text"><?php echo $producto['descripcion']; ?></p>
                                <p>$<?php echo $producto['precio_venta'];?>.-</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>


          </section>
          <br>
          <section class="gallery">
            <div class="container">
              <br><br>
              <h2>Gale<b class="text-info">ría</b></h2>
              <br><br>
              <div class="row">
                  <div class="col-md-4">
                    <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-perro_23-2149100198.jpg?ga=GA1.1.385117786.1716470381&semt=ais_hybrid" 
                    width="100%" height="350px">
                  </div>
                  
                  <div class="col-md-8 mt-4">
                    <img src="https://img.freepik.com/foto-gratis/cerrar-veterinario-revisando-lindo-perro_23-2149271822.jpg?ga=GA1.1.385117786.1716470381&semt=ais_hybrid" 
                    width="100%" height="350px">
                  </div>
              </div>
              <div class="row mt-4 mb-4">
                <div class="col-md-4">
                    <img src="https://img.freepik.com/foto-gratis/vista-frontal-veterinario-femenino-observando-perrito-pared-amarilla_179666-12494.jpg?ga=GA1.1.385117786.1716470381&semt=ais_hybrid" width="100%" height="250px">
                </div>
                <div class="col-md-4">
                  <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-perro_23-2149100221.jpg?ga=GA1.1.385117786.1716470381&semt=ais_hybrid" width="100%" height="250px">
                </div>
                <div class="col-md-4">
                  <img src="https://img.freepik.com/fotos-premium/documento-veterinario-perro-gato-fondo-blanco-ia-generativa_874904-126477.jpg?ga=GA1.1.385117786.1716470381&semt=ais_hybrid" width="100%" height="250px">
                </div>
              </div>
            </div>
          </section>
        <section class="mapa">
          
            <h2>Donde estamos</h2>
            <br><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3287.0627642772874!2d-58.51831302441821!3d-34.526637772982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb0d0a26a3fbd%3A0x38c19c7276382f82!2sInt.%20Cnel.%20Amaro%20%C3%81valos1%202470%2C%20B1605EBJ%20Munro%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1726326641203!5m2!1ses!2sar"
            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
          </section>

          <section class="contacto">
            <h2>Contactanos</h2>
            <div class="container mb-4">
              <div class="row" style="display: flex;
      justify-content: center;">
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
                        <div class="form-group"></div>
                          <label>Mensaje</label>
                          <textarea type="text" name="mensaje" class="form-control" placeholder="Ingrese su mensaje">
                          </textarea>
                          <button type="submit" class="btn btn-primary btn-sm mt-2">Enviar</button>
                        </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    
      </div> <!-- fin container -->
 <!-- En la parte inferior del <body> -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
  <?php include_once('layout/parte2.php');
  ?>
  </html>