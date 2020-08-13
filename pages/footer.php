<!--========================== Contact Section ============================-->
<section id="contact" class="section-bg wow fadeInUp">
  <div class="container">

    <div class="section-header">
      <h3>Contato</h3>
      <p>Esta esperando o que? Entre em contato conosco agora e nos conte um pouco sobre você!</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>Endereço</h3>
          <address>Jacarei - SP</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>Contato Whatsapp</h3>
          <p>
            <a href="https://api.whatsapp.com/send?phone=5512981007286" target="_blank">(12) 98100-7286</a>
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>E-mail</h3>
          <p>
            <a href="mailto:fabi@fabiazevedoarquitetura.com.br">fabi@fabiazevedoarquitetura.com.br</a>
          </p>
        </div>
      </div>
    </div>


    <div class="alert" id="alert" role="alert"></div>

  
    <div class="form">
      
      <form role="form" class="contactForm">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Por favor entrar com no minimo 4 letras" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Por favor digite um e-mail valido" />
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="tel" id="tel" placeholder="Telefone" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Por favor digite uma mensagem" placeholder="Mensagem"></textarea>
          <div class="validation"></div>
        </div>
        <div class="text-center">
          <button type="button" name="btn" id="btn"><span>Enviar Mensagem</span></button>
        </div>
      </form>
    </div>

  </div>
</section>
<!-- #contact -->

</main>

<!--========================== Footer ============================-->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Links Úteis</h4>
          <ul>
            <li>
              <i class="ion-ios-arrow-right"></i>
              <a href="#intro">Inicio</a>
            </li>
            <li>
              <i class="ion-ios-arrow-right"></i>
              <a href="#about">Sobre</a>
            </li>
            <li>
              <i class="ion-ios-arrow-right"></i>
              <a href="#services">Serviços</a>
            </li>
            <li>
              <i class="ion-ios-arrow-right"></i>
              <a href="#contact">Contato</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-contact">
          <h4>Contato</h4>
          <p>
            Jacarei - SP
            <br>
            Brasil
            <br>
            <strong>Telefone:</strong>
            (12) 98100-7286<br>
            <strong>E-mail:</strong>
            fabi@fabiazevedoarquitetura.com.br<br>
          </p>

          <div class="social-links">
            <a href="https://api.whatsapp.com/send?phone=5512981007286" target="_blank" class="twitter">
              <i class="fa fa-whatsapp"></i>
            </a>
            <a href="https://www.facebook.com/fabiazevedo.arq" target="_blank" class="facebook">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/fabiazevedo.arq/" target="_blank" class="instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </div>

        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Newsletter</h4>

          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Enviar">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; 2020 Copyright
      <strong>Fabi Azevedo Aqrquitetura</strong>. Todos os Direitos Reservados
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. You can delete the links only if you purchased the pro version. Licensing information: https://bootstrapmade.com/license/ Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage -->
      Desenvolvido por
      <a href="https:risesoft.com.br" target="_blank">RiseSoft - Desenvolvimento Web</a>
    </div>
  </div>
</footer>
<!-- #footer -->

<a href="#" class="back-to-top">
  <i class="fa fa-chevron-up"></i>
</a>
<!-- Uncomment below i you want to use a preloader -->
<div id="preloader"></div>


<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>

</html>