<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
     <!-- Bootstrap core CSS-->
     <link href="./stylesheets/bootstrap.css" rel="stylesheet">
     <!-- <link href="%PUBLIC_URL%/stylesheets/css-override.css" rel="stylesheet"> -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="./stylesheets/owl.carousel.css" rel="stylesheet">
     <link href="./stylesheets/owl.theme.default.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
     <!-- <link href="%PUBLIC_URL%/stylesheets/style.css" rel="stylesheet"> -->
     
     <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i" rel="stylesheet">
     <link rel="stylesheet" href="./stylesheets/style.css">

    <title>Lionsfield</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    </head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark transparent-nav-custom fixed-top" id="navbar"><a class="navbar-brand" href="index.html"><img class="pb-2 logo-image" src="./assets/img/logo.png" alt="Lionsfield brand Logo" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
              <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.html" class="text-center nav-link"><i class="fa fa-home"></i><br />Inicio <span class="sr-only">(current)</span></a></li>
              <li class="nav-item"><a href="quienes-somos.html" class="text-center nav-link"> <i class="fa fa-users"></i><br />Quienes Somos</a></li>
              <li class="nav-item"><a href="nuestros-clientes.html" class="text-center nav-link"> <i class="fa fa-building"></i><br />Nuestros Clientes</a></li>
              <li class="nav-item"><a href="metodologia.html" class="text-center nav-link"><i class="fa fa-line-chart"></i><br />Metodología</a></li>
              <li class="nav-item"><a href="certificaciones.html" class="text-center nav-link"><i class="fa fa-graduation-cap"></i><br />Certificaciones</a></li>
              <li class="nav-item"><a href="contacto.html" class="text-center nav-link"><i class="fa fa-envelope"></i><br />Contacto</a></li>
              </ul>  
          </div>
    </nav>
        <div class="jumbotron contactenos img-fluid">
            <div class="container color-change">
                <div class="caption pb-3 caption text-center pt-5" data-aos="slide-left" data-aos-delay="10" data-aos-duration="1000">CONTÁCTENOS</div>
                <div class="sub-caption text-center text-uppercase pb-5" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">SERÁ UN PLACER ATENDERLE</div>
            </div>
        </div>
        <div class="container-2">
        <div class="row">
            <div class="col-md-8">
                <main>
                    <h5 class="contact-form-header mb-3">Solicitud de Contacto</h5>
                    <p class="content-2">
                    Por favor, proporcione los siguientes datos para recibir mayor información. A  la brevedad, uno de nuestros ejecutivos le atenderá. Siéntase seguro, sus datos se encuentran progetidos por nuestra política de privacidad, la cual puede consultar al final de esta página.  </p>
                    <form class="contact-form pb-3" method="post" id="contactform" action="contactform.php">
                        <div class="form-row">
                            <div class="form-group col-md-10">
                            <label class="content-2" for="inputName">Nombre Completo (Campo Requerido)</label>
                                <input
                                    placeholder="Nombre"
                                    class="form-control"
                                    name="name"
                                    id="name"
                                    type="text"
                                    required
                                />
                            </div>
                            <br/><br/>
                            <div class="form-group col-md-10">
                            <label class="content-2" for="inputSubject">Empresa (Campo Requerido)</label>
                            <input
                                placeholder="Empresa"
                                class="form-control"
                                name="subject"
                                id="subject"
                                required 
                            />
                            </div>
                            <br/><br/>
                            <div class="form-group col-md-10">
                            <label class="content-2" for="inputEmail4">Correo (Campo Requerido)</label>
                            <input
                                placeholder="Correo"
                                class="form-control"
                                type="email"
                                name="mail"
                                id="mail"
                                required
                            />
                            </div>
                            <br/><br/>
                            <div class="form-group col-md-10">
                            <label class="content-2" for="inputTextarea">Mensaje (Campo Requerido)</label>
                            <textarea 
                                placeholder="Mensaje" 
                                class="form-control" 
                                name="message" 
                                id="message" 
                                required
                                pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+"></textarea>
                            </div>
                            <br/><br/>
                            <div style="display: block; transform: scale(0.77); tranform-origin: 0 0; webkit-transform-origin:0 0;">
                            <div class="g-recaptcha" sitekey="xxxxxxxxxxxxxxxxxxxxxx"></div> 
                            </div>
                            <br/><br/>
                            </div> 
                            <input style="float: left; margin-bottom: 30px;" class="mt-3 btn btn-dark" type="submit" value="ENVIAR" name="submit" id="resetBtn" />
                            <br /><br /> 
                    </form>
                </main>
            </div>
            <div class="col-md-4">
            <h5 class="contact-form-header mb-3">Acerca de Lionsfield</h5>
            <p class="content-2">
                Somos una empresa de capacitación empresarial propiedad de Magisterial Education América, con sede en los Estados Unidos de América. Con más de 13 años en el mercado, ponemos a su disposición nuestro programa de inglés de negocios en México.</p>
            <h5 class="contact-form-header mb-3">Horarios de Atención</h5>
            <p class="content-2"><strong>Lunes a Viernes: </strong>9am - 6:00pm </p>
            <h5 class="contact-form-header mb-3">Información de Contacto</h5>
            <p class="content-2"><strong>Address</strong><br />Paseo de la Reforma 350</p>
            <p class="content-2"><strong>Correo Electrónico</strong><br />atencion@lionsfield.mx</p>
            <p class="aviso"><a href="aviso-de-privacidad.html">Aviso de Privacidad</a></p>
            </div>
        </div>
      </div>
  <footer class="footer" role="contentinfo">
    <div class="footer-wrapper-content-area">
        <div class="row">
        <div class="columnA">
            <h3 class="footer-header">ACERCA DE LIONSFIELD</h3>
            <p class="footer-text">Somos una empresa de capacitaci&oacute;n empresarial propiedad de Magisterial Education Am&eacute;rica, con sede en los Estados Unidos de Am&eacute;rica. Con m&aacute;s de 15 a&ntilde;os en el mercado, ponemos a su disposici&oacute;n nuestro programa de capacitaci&oacute;n en M&eacute;xico.</p><br /><br />
            <h3 class="footer-header">AVISO DE PRIVACIDAD</h3>
            <p><a href="aviso-de-privacidad.html" style="font-size: 16px; color: #fff;">Haga clic aqu&iacute;</a></p>
        </div>
        <div class="columnB">
            <h3 class="footer-header">NUESTROS CLIENTES</h3><br />
            <div class="columnBinner">
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="0"><img src="./assets/img/a.jpg" alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="50"><img src='./assets/img/b.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100"><img src='./assets/img/c.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150"><img src='./assets/img/d.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200"><img src='./assets/img/e.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="250"><img src='./assets/img/f.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300"><img src='./assets/img/g.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="350"><img src='./assets/img/h.jpg' alt="" /></div>
            <div class="aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="400"><img src='./assets/img/i.jpg' alt="" /></div>
            </div><br />
        </div>
        </div>
        <div class="copyright-bar">
        <p class="copyright">
            &copy;
            Copyright <a class="company" href="index.html" title="Lionsfield"><span style="font-weight: bold; color: #fff;">Magisterial Education America, LLC</span></a><br />&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Smart Start Theme by <a href="http://www.rrspark.com"><span style="font-weight: bold; color: #fff;">RR Spark</span></a>
        </p>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./scripts/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="./scripts/owl.carousel.js"></script>
    <script src="./scripts/popper.min.js"></script>
    <script src="./scripts/bootstrap.min.js"></script>
    <script src="./scripts/jquery.counterup.min.js"></script>
    <!-- <script type='text/javascript' src='./scripts/config.js'></script>
    <script type='text/javascript' src='./scripts/script.js'></script> -->
    <script>AOS.init();</script>

    <script>
      $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
      rtl:true,
      loop:true,
      dots: true,
      item: 3,
      margin: 2,
      center: true,
      nav: true,
      responsive:{
      0: {
      items: 1
      }, 
      600:{
          items:1
      },
      1000:{
          items:3
      },
      }
      });
      });
    </script>
    <script>
      $(document).ready(function(){
      $('.owl-carousel-2').owlCarousel({
      rtl:true,
      loop:true,
      item: 6,
      dots: false,
      margin: 10,
      center: true,
      nav: true,
      startPosition: 1,
      responsive:{
      0: {
      items: 1
      }, 
      574:{
      items:1
      },
      850:{
      items:3
      },
      1100:{
      items:5
      },
      1400:{
      items:6
      },
      }
      });
      });
    </script>
    <script>
      $('.owl-carousel').owlCarousel({
      rtl:true,
      loop:true,
      margin:10,
      nav:true,
      responsive:{
      0:{
        items:1
      },
      636:{
        items:3
      },
      900: {
        items: 4
      },
      }
      });
    </script>
    <script>
      $(document).ready(function(){
      $('.counter-1').counterUp({
      delay: 10,
      time: 1000
      });
      });
    </script>
    <script src="./scripts/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script>
      $(document).ready(function() {
      var previousScroll = 0;
      $(window).scroll(function(){
      var currentScroll = $(this).scrollTop();
      if (currentScroll > previousScroll) {
      //Direction: Down
      $("#navbar").fadeOut(2000);
      } else {
      //Direction: Up
      $("#navbar").fadeIn();
      }
      previousScroll = currentScroll;
      if (currentScroll == 0) {
      $("#navbar").css("position", "relative");
      } else {
      $("#navbar").css("position", "fixed");
      }
      });
      });
    </script>
  </body>
</html>
