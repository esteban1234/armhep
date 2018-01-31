<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
<div class="header4">
    <div class="fondo4">
      <header>
        <div class="logo pull-left">
          <img src="../img/armhep.png" alt="ARMHEP" class="img-responsive">
        </div>

        <div class="nav pull-right">
          <ul>
            <a class="select" href="../index.php">INICIO</a>
            <a class="select" href="nosotros.php">NOSOTROS</a>
            <a class="select" href="servicios.php">SERVICIOS</a>
            <a class="select" id="selector" href="contacto.php">CONTACTO</a>
          </ul>
        </div>
      </header>

      <div class="cuadro">
        <div class="logo3">
          <img src="../img/email.png" alt="ARMHEP" class="img-responsive">
        </div>
        <p><b>ESTAMOS PARA SERVIRTE</b></p>
      </div>
    </div>
  </div>

  <div class="container animated fadeIn">

  <div class="row">
    <h1 class="header-title"> No dude en ponerse en contacto con nosotros.</h1>
    <p class="text-center">Para Constructora ARMHEP es muy importante recibir sus comentarios y sugerencias </p>
    <hr> <br><br>
    <div class="col-sm-12" id="parent">
      <div class="col-sm-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.4081376713025!2d-93.17992328575669!3d16.756358025108575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd97d61159441%3A0x87b1aa47ca07d7ec!2sCalle+Roc%C3%ADo+359%2C+La+Herradura%2C+29054+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1517438100824" width="100%" height="320px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-sm-6">
        <form action="form.php" class="contact-form" method="post">
  
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="nm" placeholder="Nombre Completo" required="">
            </div>
        
        
            <div class="form-group form_left">
              <input type="email" class="form-control" id="email" name="em" placeholder="Correo" required="">
            </div>
        
          <div class="form-group">
               <input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Teléfono" required="">
          </div>
          <div class="form-group">
          <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Escribe tu comentario" required=""></textarea>
          <br>
            <button class="btn btn-default btn-send"> <span class="glyphicon fa fa-send"></span> ENVIAR </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container second-portion">
  <div class="row">
        <!-- Boxes de Acoes -->
      <div class="col-md-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">HORARIO</h3>
            <p>
              <i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; Lunes a Viernes de 9am a 6pm
              <!-- <br>
              <br>
              <i class="fa fa-globe" aria-hidden="true"></i> &nbsp; www.armhep.com -->
            </p>
          
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>

    <div class="col-md-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">MAIL & WEBSITE</h3>
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; info@armhep.com
              <br>
              <br>
              <i class="fa fa-globe" aria-hidden="true"></i> &nbsp; www.armhep.com
            </p>
          
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      
        <div class="col-md-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">CONTACTO</h3>
              <p>
              <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp; PENDIENTE
              <!-- <br>
              <br>
              <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp;  (+91)-7567065254  -->
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      
        <div class="col-md-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">DIRECCION</h3>
              <p>
               <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Av. Rocio #359 Col. La Herradura, Tuxtla Gutierrez, Chiapas. C.P. 29038
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>        
    <!-- /Boxes de Acoes -->
    
    <!--My Portfolio  dont Copy this -->
      
  </div>
</div>

</div>



<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/funciondthc.js"></script>
<script src="../js/menu.js"></script>

</body>
</html>
