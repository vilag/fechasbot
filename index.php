<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Uniformes De Luna</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootbox.all.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script> -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12" style="margin-top: 50px;">
          <h2>Lugar y fecha de venta</h2>
        </div>
        <div class="col-sm-12" style="margin-top: 30px; margin-bottom: 30px;">
            <label for="">Escuela *</label>
            <select class="form-control" name="" id="escuela" onchange="listar_horarios_det();">
              
            </select>
        </div>
        <div class="col-sm-12" style="background-color: #ccc; padding: 30px;">
            <div class="col-sm-12">
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" style="float: left; height: 70px;">
                <label for="">Fecha *</label>
                <input id="fecha" class="form-control" type="date">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" style="float: left; height: 70px;">
                <label for="">Hora 1 *</label>
                <input id="hora1" class="form-control" type="time">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" style="float: left; height: 70px;">
                <label for="">Hora 2 *</label>
                <input id="hora2" class="form-control" type="time">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="float: left; height: 70px;">
                <label for="">Detalle</label>
                <input id="detalle" class="form-control" type="text">
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12" style="float: left; height: 70px; margin-top: 20px;">
                <button class="form-control" style="background-color: #031437; color: #fff;" onclick="guardar_fecha();">Guardar</button>
              </div>
            </div>
        </div>
        <div class="col-sm-12" style="padding: 30px;">
            
            <div class="col-sm-12" id="list_horarios">
                          
            </div>
            
        </div>
        
      </div>
      
    </div>
  <script type="text/javascript" src="scripts/index.js?v=<?php echo(rand()); ?>"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootbox.all.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.all.min.js"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script> -->
  </body>
</html>