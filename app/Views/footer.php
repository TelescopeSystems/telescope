<footer id="footer" class="footer dark-background">

  <div class="container">
    <div class="row gy-5">

      <div class="col-lg-4">
        <div class="footer-content">
          <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center mb-4">
            <span class="sitename">Telescope Systems</span>
          </a>
          <p class="mb-4">
            Desenvolvemos sites, sistemas e soluções digitais para empresas que precisam de mais organização, presença profissional e tecnologia aplicada de forma prática.
          </p>

          <div class="newsletter-form">
            <h5>Receba novidades</h5>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="input-group">
                <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail" required="">
                <button type="submit" class="btn-subscribe">
                  <i class="bi bi-send"></i>
                </button>
              </div>
              <div class="loading">Carregando</div>
              <div class="error-message"></div>
              <div class="sent-message">Obrigado por se cadastrar!</div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-6">
        <div class="footer-links">
          <h4>Empresa</h4>
          <ul>
            <li><a href="<?= base_url('/#about') ?>"><i class="bi bi-chevron-right"></i> Sobre</a></li>
            <li><a href="<?= base_url('/#services') ?>"><i class="bi bi-chevron-right"></i> Serviços</a></li>
            <li><a href="<?= base_url('/#portfolio') ?>"><i class="bi bi-chevron-right"></i> Portfólio</a></li>
            <li><a href="<?= base_url('/#pricing') ?>"><i class="bi bi-chevron-right"></i> Planos</a></li>
            <li><a href="<?= base_url('/#contact') ?>"><i class="bi bi-chevron-right"></i> Contato</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-6">
        <div class="footer-links">
          <h4>Soluções</h4>
          <ul>
            <li><a href="<?= base_url('/#services') ?>"><i class="bi bi-chevron-right"></i> Sites institucionais</a></li>
            <li><a href="<?= base_url('/#services') ?>"><i class="bi bi-chevron-right"></i> Sistemas personalizados</a></li>
            <li><a href="<?= base_url('/#services') ?>"><i class="bi bi-chevron-right"></i> Portais internos</a></li>
            <li><a href="<?= base_url('/#services') ?>"><i class="bi bi-chevron-right"></i> Painéis administrativos</a></li>
            <li><a href="<?= base_url('/#services') ?>"><i class="bi bi-chevron-right"></i> Manutenção</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="footer-contact">
          <h4>Entre em contato</h4>
          <div class="contact-item">
            <div class="contact-icon">
              <i class="bi bi-geo-alt"></i>
            </div>
            <div class="contact-info">
              <p>Atendimento online<br>Projetos sob demanda<br>Brasil</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon">
              <i class="bi bi-telephone"></i>
            </div>
            <div class="contact-info">
              <p>
                <a href="https://wa.me/5538984179499/" target="_blank">
                  (38) 98417-9499
                </a>
              </p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon">
              <i class="bi bi-envelope"></i>
            </div>
            <div class="contact-info">
              <p>
                <a href="mailto:luccluna@gmail.com">
                  luccluna@gmail.com
                </a>
              </p>
            </div>
          </div>

          <div class="social-links">
            <a href="https://www.linkedin.com/in/luccluna/" target="_blank" aria-label="LinkedIn">
              <i class="bi bi-linkedin"></i>
            </a>
            <a href="https://github.com/luccluna/" target="_blank" aria-label="GitHub">
              <i class="bi bi-github"></i>
            </a>
            <a href="https://wa.me/5538984179499/" target="_blank" aria-label="WhatsApp">
              <i class="bi bi-whatsapp"></i>
            </a>
            <a href="mailto:luccluna@gmail.com" aria-label="E-mail">
              <i class="bi bi-envelope-fill"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="copyright">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Telescope Systems</strong> <span>Todos os direitos reservados</span></p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="footer-bottom-links">
            <a href="#">Política de Privacidade</a>
            <a href="#">Termos de Uso</a>
            <a href="#">Política de Cookies</a>
          </div>
          <div class="credits">
            Desenvolvido por <a href="https://www.linkedin.com/in/luccluna/" target="_blank">Luccas Luna</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('vendor/php-email-form/validate.js') ?>"></script>
<script src="<?= base_url('vendor/aos/aos.js') ?>"></script>
<script src="<?= base_url('vendor/purecounter/purecounter_vanilla.js') ?>"></script>
<script src="<?= base_url('vendor/imagesloaded/imagesloaded.pkgd.min.js') ?>"></script>
<script src="<?= base_url('vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('vendor/glightbox/js/glightbox.min.js') ?>"></script>
<script src="<?= base_url('vendor/swiper/swiper-bundle.min.js') ?>"></script>

<!-- Main JS File -->
<script src="<?= base_url('js/main.js') ?>"></script>

</body>

</html>