<?php

if (isset($_SESSION['mensaje']) && isset($_SESSION['icono'])) {
    $respuesta = $_SESSION['mensaje'];
    $icono = $_SESSION['icono'] ;
    ?>
   <script>
    var mensaje = <?php echo json_encode($respuesta); ?>;
    var icono = <?php echo json_encode($icono); ?>;
     Swal.fire({
    position: "top-end",
    icon: icono,
    title: mensaje,
    showConfirmButton: false,
    timer: 2000
  });
   
   </script>

 
  <?php 
unset($_SESSION['mensaje']);
} 
?>