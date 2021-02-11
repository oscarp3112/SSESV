<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Servicios y soluciones eléctricas</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>      
  </head>
  
  <body class="size-1140">
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.html" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="img/logob.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="img/logon.png" alt="">
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">Sobre nosotros</a></li>
            <li><a href="gallery.php">Galería</a></li>
            <li><a href="contact.php">Contáctanos</a></li>
          </ul>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Contáctanos</h1>
            <p class="margin-bottom-0 text-size-16">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.<br>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
          </div>  
        </header>
        <div class="section background-white"> 
          <div class="line margin-bottom-60">
            <div class="margin">
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-location-pin icon3x text-primary"></i>
                  </div>
                <div class="margin-left-70 margin-s-left-0 margin-bottom">
                  <h3 class="margin-bottom-0">Dirección</h3>
                  <p>San Salvador<br>
                     El Salvador
                  </p>               
                </div>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-envelope icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0 margin-bottom">
                    <h3 class="margin-bottom-0">E-mail</h3>
                    <p>david@gmail.com<br>
                       david2@gmail.com
                    </p>              
                  </div>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-phone icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0">
                    <h3 class="margin-bottom-0">Teléfonos</h3>
                    <p><span class="text-primary">Móvil: +503 7685 9950</span><br>
                       Oficina: +503 2222 2222<br>
                    </p>             
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="line">
            <div class="margin">
              <!-- Contact Form -->
              <div class="s-12 m-12 l-6">
                <h2 class="margin-bottom-10">Déjanos un mensaje</h2>

                  <?php 

                        if (isset($_POST['enviar'])) {

                          $datos['nombre'] = $_POST['name'];                        
                          $datos['correo'] = $_POST['correo'];
                          $datos['subj'] = $_POST['subject'];
                          $datos['mensaje'] = $_POST['message'];
                          $to = 'oscarp1998@hotmail.com';

                          if($datos['nombre']!="" && $datos['correo']!="" && $datos['subj']!="" && $datos['mensaje']!="")
                          {

                              $mensaje = "
                         <html>
                         <head>
                         <title>HTML</title>
                         </head>
                         <body>
                         <h1>Nuevo correo SSESV</h1>
                         <h2>Nombre: ".$datos['nombre']."  </br> Correo: ".$datos['correo']."</h2>
                         <p>".$datos['mensaje']."</p>
                         </body>
                         </html>";
                        

                          $headers = "MIME-Version: 1.0" . "\r\n";
                          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                          mail($to,$datos['subj'],$mensaje, $headers);
                          echo "<div class='alert alert-success' role='alert'>Mensaje enviado correctamente.</div>";      
                          echo "<br>";
                          }
                          else
                          {
                            echo "<div class='alert alert-warning' role='alert'>Asegurese de rellenar todos los campos.</div>";
                            echo "<br>";
                          }

                                 
                   }

                 ?>
                <form name="contactForm" class="customform" method="post">
                  <div class="line">
                    <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="correo" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" />
                        <p class="email-error form-error">Introduce tú E-mail</p>
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="name" class="name" placeholder="Your name" title="Your name" type="text" />
                        <p class="name-error form-error">Introduce tu nombre</p>
                      </div>
                    </div>
                  </div>
                  <div class="s-12"> 
                    <input name="subject" class="subject" placeholder="Subject" title="Subject" type="text" />
                    <p class="subject-error form-error">Motivo del mensaje</p>
                  </div>
                  <div class="s-12">
                    <textarea name="message" class="required message" placeholder="Your message" rows="3"></textarea>
                    <p class="message-error form-error">Introduce tú mensaje</p>
                  </div>
                  <div class="s-12"><button name="enviar" class="s-12 submit-form button background-primary text-white" type="submit">Enviar</button></div>

                </form>
               
              </div>
              <div class="s-12 m-12 l-4">
                <h2 class="margin-bottom-10">Horarios de trabajo</h2>
                <div class="s-6">
                  <p class="text-size-16">
                  Lunes<br>
                  Martes<br>
                  Miércoles<br>
                  Jueves<br>
                  Viernes<br>
                  Sábado<br>
                  Domingo
                  </p>
                </div>
                <div class="s-6">
                  <p class="text-size-16 text-strong">
                  8:00 am - 8:00 pm<br>
                  8:00 am - 8:00 pm<br>
                  8:00 am - 8:00 pm<br>
                  8:00 am - 8:00 pm<br>
                  8:00 am - 8:00 pm<br>
                  8:00 am - 12:00 pm<br>
                  8:00 am - 12:00 pm
                  </p>
                </div>
              </div>
            </div>    
          </div>  
        </div> 
      </article>
    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Contactos -->
      <div class="background-primary padding text-center">
        <p class="h1">Contáctanos: +503 1515-1515</p>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="background-dark full-width">
        <!-- Map -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="s-12 grayscale center">    
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31011.26062613819!2d-89.2043264!3d13.6937472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2ssv!4v1593200447615!5m2!1ses-419!2ssv" width="100%" height="450" frameborder="0" style="border:0"></iframe> 
          </div>
        </div>
        
        <!-- Segunda columna 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Dirección</h3>
                  <p>San Salvador<br>
                     El Salvador
                  </p>               
                </div>
                <div class="float-left">
                  <i class="icon-sli-envelope text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">E-mail</h3>
                  <p>david@gmail.com<br>
                     david2@gmail.com
                  </p>              
                </div>
                <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
                  <h3 class="margin-bottom-0">Teléfonos</h3>
                  <p>+503 7685 9950<br>
                     +503 7685 9950<br>
                     +503 7685 9950
                  </p>             
                </div>
            </div>
          </div>
        </div>  
      </section>

      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-6">
          <p class="text-size-12">Copyright 2020, Servicios y soluciones eléctricas</p>
        </div>
      </section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>