<?= $this->include('header') ?>

<main class="main pt-5">

  <!-- Page Title -->
  <div class="page-title mt-5">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="heading-title">Detalhes do Portfólio</h1>
            <p class="mb-0">
              Conheça melhor algumas possibilidades de projetos desenvolvidos pela Telescope Systems, com foco em organização, presença digital e soluções funcionais para empresas.
            </p>
          </div>
        </div>
      </div>
    </div>

    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?= base_url('/') ?>">Home</a></li>
          <li class="current">Detalhes do Portfólio</li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Page Title -->

  <!-- Portfolio Details Section -->
  <section id="portfolio-details" class="portfolio-details section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="project-header" data-aos="fade-down" data-aos-delay="100">
        <div class="header-meta">
          <span class="category-tag">Desenvolvimento Web</span>

          <div class="project-info">
            <span><i class="bi bi-calendar3"></i> Projeto sob demanda</span>
            <span><i class="bi bi-person-workspace"></i> Telescope Systems</span>
          </div>
        </div>

        <h2 class="main-title">Soluções digitais para empresas</h2>

        <p class="subtitle">
          Projetos pensados para transformar necessidades reais em sites, sistemas, portais internos e ferramentas digitais com estrutura, usabilidade e visão estratégica.
        </p>

        <div class="project-link">
          <a href="<?= base_url('/') ?>" target="_blank">
            <i class="bi bi-globe2"></i> Telescope Systems
          </a>
        </div>
      </div>

      <div class="gallery-showcase" data-aos="zoom-in" data-aos-delay="200">
        <div class="showcase-slider swiper init-swiper">

          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "effect": "fade",
              "fadeEffect": {
                "crossFade": true
              },
              "slidesPerView": 1,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "fraction"
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <img src="<?= base_url('img/portfolio/portfolio-3.webp') ?>" alt="Site institucional desenvolvido pela Telescope Systems" class="img-fluid">
            </div>

            <div class="swiper-slide">
              <img src="<?= base_url('img/portfolio/portfolio-9.webp') ?>" alt="Sistema personalizado desenvolvido pela Telescope Systems" class="img-fluid">
            </div>

            <div class="swiper-slide">
              <img src="<?= base_url('img/portfolio/portfolio-11.webp') ?>" alt="Portal interno desenvolvido pela Telescope Systems" class="img-fluid">
            </div>

            <div class="swiper-slide">
              <img src="<?= base_url('img/portfolio/portfolio-2.webp') ?>" alt="Solução digital para empresas" class="img-fluid">
            </div>

          </div>

          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>
      </div>

      <div class="row g-4 content-section">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="info-card">
            <div class="card-icon">
              <i class="bi bi-lightbulb"></i>
            </div>

            <h3>Visão do projeto</h3>

            <p>
              Cada solução nasce a partir de uma necessidade real da empresa. O objetivo é criar uma estrutura digital clara, funcional e alinhada à rotina do cliente.
            </p>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="info-card">
            <div class="card-icon">
              <i class="bi bi-puzzle"></i>
            </div>

            <h3>Desafio principal</h3>

            <p>
              Muitas empresas precisam organizar informações, melhorar a comunicação, profissionalizar sua presença online ou transformar processos manuais em sistemas mais eficientes.
            </p>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="info-card">
            <div class="card-icon">
              <i class="bi bi-rocket-takeoff"></i>
            </div>

            <h3>Resultado esperado</h3>

            <p>
              Entregar uma solução digital com boa navegação, visual profissional, estrutura responsiva e funcionalidades pensadas para facilitar o uso no dia a dia.
            </p>
          </div>
        </div>

      </div>

      <div class="row g-4 details-row">

        <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">

          <div class="features-block">
            <h3><i class="bi bi-gear-wide-connected"></i> Destaques da implementação</h3>

            <div class="features-grid">

              <div class="feature-item">
                <i class="bi bi-shield-check"></i>
                <span>Estrutura segura e organizada</span>
              </div>

              <div class="feature-item">
                <i class="bi bi-speedometer2"></i>
                <span>Performance e carregamento otimizado</span>
              </div>

              <div class="feature-item">
                <i class="bi bi-phone"></i>
                <span>Layout responsivo para celular</span>
              </div>

              <div class="feature-item">
                <i class="bi bi-window-desktop"></i>
                <span>Interface clara e profissional</span>
              </div>

              <div class="feature-item">
                <i class="bi bi-bar-chart-line"></i>
                <span>Organização estratégica das informações</span>
              </div>

              <div class="feature-item">
                <i class="bi bi-plug"></i>
                <span>Possibilidade de integrações futuras</span>
              </div>

            </div>
          </div>

          <div class="gallery-grid" data-aos="fade-up" data-aos-delay="200">

            <a href="<?= base_url('img/portfolio/portfolio-1.webp') ?>" class="glightbox gallery-item">
              <img src="<?= base_url('img/portfolio/portfolio-1.webp') ?>" alt="Exemplo de layout digital" class="img-fluid" loading="lazy">
              <div class="overlay"><i class="bi bi-zoom-in"></i></div>
            </a>

            <a href="<?= base_url('img/portfolio/portfolio-6.webp') ?>" class="glightbox gallery-item">
              <img src="<?= base_url('img/portfolio/portfolio-6.webp') ?>" alt="Exemplo de sistema ou painel" class="img-fluid" loading="lazy">
              <div class="overlay"><i class="bi bi-zoom-in"></i></div>
            </a>

            <a href="<?= base_url('img/portfolio/portfolio-10.webp') ?>" class="glightbox gallery-item">
              <img src="<?= base_url('img/portfolio/portfolio-10.webp') ?>" alt="Exemplo de solução digital" class="img-fluid" loading="lazy">
              <div class="overlay"><i class="bi bi-zoom-in"></i></div>
            </a>

          </div>

        </div>

        <div class="col-lg-5" data-aos="fade-left" data-aos-delay="100">

          <div class="sidebar-content">

            <div class="tech-section">
              <h4><i class="bi bi-code-slash"></i> Tecnologias utilizadas</h4>

              <div class="tech-tags">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
                <span>Bootstrap</span>
                <span>PHP</span>
                <span>CodeIgniter</span>
              </div>
            </div>

            <div class="stats-section">
              <h4><i class="bi bi-graph-up-arrow"></i> Métricas do projeto</h4>

              <div class="stats-list">

                <div class="stat-item">
                  <span class="stat-value">100%</span>
                  <span class="stat-label">Responsivo</span>
                </div>

                <div class="stat-item">
                  <span class="stat-value">Sob medida</span>
                  <span class="stat-label">Estrutura adaptada ao cliente</span>
                </div>

                <div class="stat-item">
                  <span class="stat-value">Foco</span>
                  <span class="stat-label">Usabilidade e organização</span>
                </div>

              </div>
            </div>

            <div class="action-buttons">
              <a href="<?= base_url('/#contact') ?>" class="btn-primary-action">
                <i class="bi bi-eye"></i> Solicitar projeto
              </a>

              <a href="<?= base_url('/#portfolio') ?>" class="btn-secondary-action">
                <i class="bi bi-arrow-right-circle"></i> Ver mais soluções
              </a>
            </div>

          </div>

        </div>

      </div>

    </div>

  </section>
  <!-- /Portfolio Details Section -->

</main>

<?= $this->include('footer') ?>