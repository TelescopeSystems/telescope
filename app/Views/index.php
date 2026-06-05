<?= $this->include('header') ?>

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section light-background telescope-hero">

    <div class="container">

      <div class="row">

        <div class="col-12" data-aos="fade-down">
          <div class="hero-header">
            <h1>
              Soluções digitais para empresas que precisam de
              <span class="highlight">organização, presença e resultado</span>
            </h1>
          </div>
        </div>

      </div>

      <div class="row g-4 mt-4">

        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="media-block">
            <img src="<?= base_url('img/about/about-wide-3.webp') ?>" alt="Soluções digitais Telescope Systems" class="img-fluid">
            <div class="overlay-content">
              <div class="stats-item">
                <span class="number">100%</span>
                <span class="label">Foco em soluções sob medida</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="200">
          <div class="info-block">
            <p class="lead-text">
              A Telescope Systems desenvolve sites, sistemas e soluções digitais para empresas que desejam melhorar sua presença online, organizar processos e transformar ideias em projetos funcionais.
            </p>

            <ul class="feature-list">
              <li><i class="bi bi-check-circle-fill"></i> Desenvolvimento de sites institucionais</li>
              <li><i class="bi bi-check-circle-fill"></i> Sistemas personalizados para empresas</li>
              <li><i class="bi bi-check-circle-fill"></i> Soluções digitais com foco em usabilidade</li>
            </ul>

            <div class="action-row">
              <a href="#services" class="btn-get-started">Conheça as soluções</a>
              <a href="#contact" class="btn-contact">
                <i class="bi bi-whatsapp"></i>
                <span>Fale conosco</span>
              </a>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section>
  <!-- /Hero Section -->


  <!-- About Section -->
  <section id="about" class="about section">

    <div class="container section-title" data-aos="fade-up">
      <h2>Sobre a Telescope Systems</h2>
      <p> tecnologia, estratégia e desenvolvimento para empresas que querem crescer com mais estrutura.</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="about-wrapper">

        <div class="image-gallery" data-aos="zoom-in" data-aos-delay="200">
          <div class="gallery-grid">
            <div class="gallery-item main-image">
              <img src="<?= base_url('img/about/about-14.webp') ?>" alt="Desenvolvimento de sistemas e sites" class="img-fluid" loading="lazy">
            </div>
            <div class="gallery-item side-image">
              <img src="<?= base_url('img/about/about-square-12.webp') ?>" alt="Soluções digitais para empresas" class="img-fluid" loading="lazy">
            </div>
          </div>
          <div class="experience-badge">
            <div class="badge-inner">
              <span class="number">TS</span>
              <span class="label">Telescope Systems</span>
            </div>
          </div>
        </div>

        <div class="info-panel" data-aos="fade-up" data-aos-delay="300">

          <div class="panel-header">
            <span class="tagline">Quem somos</span>
            <h2>O melhor resultado para sua busca por um sistema de respeito.</h2>
          </div>

          <p class="description">
            A Telescope Systems nasceu para aproximar empresas da tecnologia de forma prática, estratégica e acessível. Nosso objetivo é criar soluções digitais que realmente façam sentido para o negócio, seja por meio de um site profissional, um sistema personalizado ou uma ferramenta que ajude na organização interna.
          </p>

          <div class="highlights-row">
            <div class="highlight-box" data-aos="fade-up" data-aos-delay="350">
              <div class="icon-wrap">
                <i class="bi bi-bullseye"></i>
              </div>
              <div class="highlight-content">
                <h4>Visão estratégica</h4>
                <p>Cada projeto é pensado para resolver uma necessidade real, não apenas para estar bonito na tela.</p>
              </div>
            </div>

            <div class="highlight-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-wrap">
                <i class="bi bi-code-slash"></i>
              </div>
              <div class="highlight-content">
                <h4>Desenvolvimento funcional</h4>
                <p>Unimos estrutura, tecnologia e usabilidade para entregar soluções claras, organizadas e eficientes.</p>
              </div>
            </div>
          </div>

          <div class="stats-row" data-aos="fade-up" data-aos-delay="450">
            <div class="stat-block">
              <h3>Sites</h3>
              <span>Institucionais e responsivos</span>
            </div>
            <div class="stat-block">
              <h3>Sistemas</h3>
              <span>Soluções personalizadas</span>
            </div>
            <div class="stat-block">
              <h3>Suporte</h3>
              <span>Acompanhamento próximo</span>
            </div>
          </div>

          <a href="#contact" class="cta-button">
            Fale sobre seu projeto <i class="bi bi-arrow-right"></i>
          </a>

        </div>

      </div>

    </div>

  </section>
  <!-- /About Section -->


  <!-- Services Section -->
  <section id="services" class="services section">

    <div class="container section-title" data-aos="fade-up">
      <h2>Soluções</h2>
      <p>Desenvolvimento digital para empresas que precisam sair do improviso e ter mais estrutura.</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-4">

        <div class="col-lg-8">
          <div class="row g-4">

            <div class="col-md-6" data-aos="fade-right" data-aos-delay="150">
              <div class="service-card highlighted">
                <div class="card-badge">Mais procurado</div>
                <div class="card-header">
                  <div class="icon-circle">
                    <i class="bi bi-window-desktop"></i>
                  </div>
                  <span class="service-num">01</span>
                </div>
                <div class="card-body">
                  <h4><a href="<?= base_url('service-details') ?>">Desenvolvimento de sites</a></h4>
                  <p>Sites institucionais modernos, responsivos e pensados para apresentar sua empresa com mais profissionalismo.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Layout profissional</li>
                    <li><i class="bi bi-check2"></i> Estrutura responsiva</li>
                  </ul>
                </div>
                <a href="<?= base_url('service-details') ?>" class="card-link">
                  <span>Saiba mais</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </div>
            </div>

            <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
              <div class="service-card">
                <div class="card-header">
                  <div class="icon-circle">
                    <i class="bi bi-terminal"></i>
                  </div>
                  <span class="service-num">02</span>
                </div>
                <div class="card-body">
                  <h4><a href="<?= base_url('service-details') ?>">Sistemas personalizados</a></h4>
                  <p>Desenvolvimento de sistemas sob medida para organizar processos, informações, acessos e rotinas da empresa.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Painéis administrativos</li>
                    <li><i class="bi bi-check2"></i> Funcionalidades sob demanda</li>
                  </ul>
                </div>
                <a href="<?= base_url('service-details') ?>" class="card-link">
                  <span>Saiba mais</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </div>
            </div>

            <div class="col-md-6" data-aos="fade-right" data-aos-delay="250">
              <div class="service-card">
                <div class="card-header">
                  <div class="icon-circle">
                    <i class="bi bi-layers"></i>
                  </div>
                  <span class="service-num">03</span>
                </div>
                <div class="card-body">
                  <h4><a href="<?= base_url('service-details') ?>">Portais e páginas internas</a></h4>
                  <p>Criação de portais para centralizar links, comunicados, documentos e informações importantes em um só lugar.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Organização de acessos</li>
                    <li><i class="bi bi-check2"></i> Comunicação interna</li>
                  </ul>
                </div>
                <a href="<?= base_url('service-details') ?>" class="card-link">
                  <span>Saiba mais</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </div>
            </div>

            <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
              <div class="service-card">
                <div class="card-header">
                  <div class="icon-circle">
                    <i class="bi bi-tools"></i>
                  </div>
                  <span class="service-num">04</span>
                </div>
                <div class="card-body">
                  <h4><a href="<?= base_url('service-details') ?>">Manutenção e melhorias</a></h4>
                  <p>Ajustes, correções, atualizações e evolução de projetos digitais já existentes.</p>
                  <ul class="feature-list">
                    <li><i class="bi bi-check2"></i> Correções técnicas</li>
                    <li><i class="bi bi-check2"></i> Melhorias contínuas</li>
                  </ul>
                </div>
                <a href="<?= base_url('service-details') ?>" class="card-link">
                  <span>Saiba mais</span>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="services-sidebar" data-aos="fade-up" data-aos-delay="350">

            <div class="sidebar-service-item">
              <div class="sidebar-icon">
                <i class="bi bi-search"></i>
              </div>
              <div class="sidebar-content">
                <span class="sidebar-num">05</span>
                <h5><a href="<?= base_url('service-details') ?>">Diagnóstico digital</a></h5>
                <p>Análise da necessidade da empresa para definir a melhor solução antes do desenvolvimento.</p>
              </div>
            </div>

            <div class="sidebar-service-item">
              <div class="sidebar-icon">
                <i class="bi bi-diagram-3"></i>
              </div>
              <div class="sidebar-content">
                <span class="sidebar-num">06</span>
                <h5><a href="<?= base_url('service-details') ?>">Estruturação de projeto</a></h5>
                <p>Planejamento de páginas, funcionalidades, navegação e experiência do usuário.</p>
              </div>
            </div>

            <div class="sidebar-cta">
              <div class="cta-inner">
                <i class="bi bi-rocket-takeoff"></i>
                <h4>Tem uma ideia de sistema?</h4>
                <p>A Telescope Systems pode ajudar você a transformar essa ideia em uma solução funcional.</p>
                <a href="#contact" class="cta-button">
                  Solicitar orçamento
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </section>
  <!-- /Services Section -->


  <!-- Why Us Section -->
  <section id="why-us" class="why-us section">

    <div class="container section-title" data-aos="fade-up">
      <h2>Por que escolher a Telescope Systems?</h2>
      <p>Porque tecnologia precisa ser clara, útil e pensada para gerar resultado no dia a dia da empresa.</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row align-items-center mb-5">

        <div class="col-lg-5" data-aos="fade-right" data-aos-delay="150">
          <div class="intro-content">
            <h3>Não criamos apenas telas. Criamos soluções.</h3>
            <p class="intro-text">
              Cada projeto é desenvolvido com atenção à necessidade real do cliente, buscando unir visual, funcionalidade, organização e facilidade de uso.
            </p>

            <div class="stats-row">
              <div class="stat-item">
                <span class="stat-value">01</span>
                <span class="stat-desc">Diagnóstico antes do desenvolvimento</span>
              </div>
              <div class="stat-item">
                <span class="stat-value">02</span>
                <span class="stat-desc">Entrega com foco em usabilidade</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
          <div class="features-grid">

            <div class="grid-item">
              <div class="grid-icon">
                <i class="bi bi-lightbulb-fill"></i>
              </div>
              <div class="grid-content">
                <h5>Soluções inteligentes</h5>
                <p>Projetos pensados para resolver problemas reais e facilitar processos.</p>
              </div>
            </div>

            <div class="grid-item">
              <div class="grid-icon">
                <i class="bi bi-speedometer2"></i>
              </div>
              <div class="grid-content">
                <h5>Mais agilidade</h5>
                <p>Sistemas e páginas que ajudam a reduzir retrabalho e melhorar a rotina.</p>
              </div>
            </div>

            <div class="grid-item">
              <div class="grid-icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <div class="grid-content">
                <h5>Estrutura confiável</h5>
                <p>Desenvolvimento organizado, com atenção à estabilidade e à manutenção.</p>
              </div>
            </div>

            <div class="grid-item">
              <div class="grid-icon">
                <i class="bi bi-headset"></i>
              </div>
              <div class="grid-content">
                <h5>Atendimento próximo</h5>
                <p>Acompanhamento direto para entender, ajustar e evoluir cada projeto.</p>
              </div>
            </div>

          </div>
        </div>

      </div>

      <div class="highlight-cards">
        <div class="row g-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="highlight-card">
              <div class="card-header">
                <i class="bi bi-palette2"></i>
                <span class="card-badge">Visual</span>
              </div>
              <h4>Presença profissional</h4>
              <p>Um site bem estruturado fortalece a imagem da empresa e transmite mais confiança para o público.</p>
              <a href="#contact" class="card-link">Solicitar projeto <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="highlight-card featured">
              <div class="card-header">
                <i class="bi bi-code-square"></i>
                <span class="card-badge">Sistema</span>
              </div>
              <h4>Processos organizados</h4>
              <p>Sistemas personalizados ajudam a centralizar informações e tornar a operação mais eficiente.</p>
              <a href="#contact" class="card-link">Falar sobre sistema <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="highlight-card">
              <div class="card-header">
                <i class="bi bi-people-fill"></i>
                <span class="card-badge">Suporte</span>
              </div>
              <h4>Construção em parceria</h4>
              <p>Você acompanha o projeto de perto, com alinhamento, testes e ajustes antes da entrega final.</p>
              <a href="#contact" class="card-link">Começar conversa <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>
      </div>

      <div class="row mt-5 pt-4">
        <div class="col-lg-8 offset-lg-2" data-aos="fade-up" data-aos-delay="100">
          <div class="cta-banner">
            <div class="cta-content">
              <h3>Sua empresa precisa de um sistema de respeito?</h3>
              <p>Fale com a Telescope Systems e vamos entender qual solução faz mais sentido para o seu momento.</p>
            </div>
            <div class="cta-actions">
              <a href="#contact" class="btn-cta-primary">Solicitar orçamento</a>
              <a href="#portfolio" class="btn-cta-secondary">Ver possibilidades</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- /Why Us Section -->


<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Portfólio</h2>
    <p>Projetos e soluções digitais que mostram como a Telescope Systems pode ajudar empresas a evoluírem com tecnologia.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <div class="filter-header" data-aos="fade-up" data-aos-delay="100">
        <ul class="portfolio-filters isotope-filters">
          <li data-filter="*" class="filter-active">Todos</li>
          <li data-filter=".filter-web">Sites</li>
          <li data-filter=".filter-branding">Identidade Digital</li>
          <li data-filter=".filter-campaign">Sistemas</li>
          <li data-filter=".filter-print">Portais</li>
        </ul>
      </div><!-- End Filter Header -->

      <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
          <div class="portfolio-card">
            <div class="portfolio-image">
              <img src="<?= base_url('img/portfolio/portfolio-3.webp') ?>" class="img-fluid" alt="Site institucional para empresas" loading="lazy">
              <div class="portfolio-overlay">
                <div class="overlay-actions">
                  <a href="<?= base_url('img/portfolio/portfolio-3.webp') ?>" title="Site institucional" data-gallery="portfolio-gallery-web" class="glightbox action-btn">
                    <i class="bi bi-arrows-fullscreen"></i>
                  </a>
                  <a href="<?= base_url('portfolio-details') ?>" title="Ver projeto" class="action-btn">
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="portfolio-content">
              <span class="portfolio-category">Site institucional</span>
              <h4 class="portfolio-title">Presença digital para empresas</h4>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-branding">
          <div class="portfolio-card">
            <div class="portfolio-image">
              <img src="<?= base_url('img/portfolio/portfolio-7.webp') ?>" class="img-fluid" alt="Identidade digital profissional" loading="lazy">
              <div class="portfolio-overlay">
                <div class="overlay-actions">
                  <a href="<?= base_url('img/portfolio/portfolio-7.webp') ?>" title="Identidade digital" data-gallery="portfolio-gallery-branding" class="glightbox action-btn">
                    <i class="bi bi-arrows-fullscreen"></i>
                  </a>
                  <a href="<?= base_url('portfolio-details') ?>" title="Ver projeto" class="action-btn">
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="portfolio-content">
              <span class="portfolio-category">Identidade Digital</span>
              <h4 class="portfolio-title">Imagem profissional para marcas</h4>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-campaign">
          <div class="portfolio-card">
            <div class="portfolio-image">
              <img src="<?= base_url('img/portfolio/portfolio-11.webp') ?>" class="img-fluid" alt="Sistema personalizado" loading="lazy">
              <div class="portfolio-overlay">
                <div class="overlay-actions">
                  <a href="<?= base_url('img/portfolio/portfolio-11.webp') ?>" title="Sistema personalizado" data-gallery="portfolio-gallery-campaign" class="glightbox action-btn">
                    <i class="bi bi-arrows-fullscreen"></i>
                  </a>
                  <a href="<?= base_url('portfolio-details') ?>" title="Ver projeto" class="action-btn">
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="portfolio-content">
              <span class="portfolio-category">Sistema personalizado</span>
              <h4 class="portfolio-title">Painel administrativo e gestão interna</h4>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-print">
          <div class="portfolio-card">
            <div class="portfolio-image">
              <img src="<?= base_url('img/portfolio/portfolio-5.webp') ?>" class="img-fluid" alt="Portal interno corporativo" loading="lazy">
              <div class="portfolio-overlay">
                <div class="overlay-actions">
                  <a href="<?= base_url('img/portfolio/portfolio-5.webp') ?>" title="Portal interno" data-gallery="portfolio-gallery-print" class="glightbox action-btn">
                    <i class="bi bi-arrows-fullscreen"></i>
                  </a>
                  <a href="<?= base_url('portfolio-details') ?>" title="Ver projeto" class="action-btn">
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="portfolio-content">
              <span class="portfolio-category">Portal interno</span>
              <h4 class="portfolio-title">Central de links, avisos e acessos</h4>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
          <div class="portfolio-card">
            <div class="portfolio-image">
              <img src="<?= base_url('img/portfolio/portfolio-1.webp') ?>" class="img-fluid" alt="Landing page estratégica" loading="lazy">
              <div class="portfolio-overlay">
                <div class="overlay-actions">
                  <a href="<?= base_url('img/portfolio/portfolio-1.webp') ?>" title="Landing page" data-gallery="portfolio-gallery-web" class="glightbox action-btn">
                    <i class="bi bi-arrows-fullscreen"></i>
                  </a>
                  <a href="<?= base_url('portfolio-details') ?>" title="Ver projeto" class="action-btn">
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="portfolio-content">
              <span class="portfolio-category">Landing Page</span>
              <h4 class="portfolio-title">Página estratégica para apresentação e conversão</h4>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-campaign">
          <div class="portfolio-card">
            <div class="portfolio-image">
              <img src="<?= base_url('img/portfolio/portfolio-9.webp') ?>" class="img-fluid" alt="Sistema para organização empresarial" loading="lazy">
              <div class="portfolio-overlay">
                <div class="overlay-actions">
                  <a href="<?= base_url('img/portfolio/portfolio-9.webp') ?>" title="Sistema empresarial" data-gallery="portfolio-gallery-campaign" class="glightbox action-btn">
                    <i class="bi bi-arrows-fullscreen"></i>
                  </a>
                  <a href="<?= base_url('portfolio-details') ?>" title="Ver projeto" class="action-btn">
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="portfolio-content">
              <span class="portfolio-category">Sistema empresarial</span>
              <h4 class="portfolio-title">Solução para organização de processos</h4>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

      </div><!-- End Portfolio Container -->

      <div class="portfolio-cta" data-aos="fade-up" data-aos-delay="300">
        <a href="<?= base_url('portfolio-details') ?>" class="view-all-link">
          Ver mais possibilidades <i class="bi bi-arrow-right"></i>
        </a>
      </div>

    </div>

  </div>

</section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Nosso time</h2>
        <p>Profissionais por trás das soluções da Telescope Systems, unindo tecnologia, estratégia e desenvolvimento para transformar ideias em sistemas funcionais.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 justify-content-center">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="team-card">
              <div class="card-inner">
                <div class="avatar-container">
                  <img src="<?= base_url('img/person/person1.png') ?>" alt="Luccas Luna - Desenvolvedor Web" class="img-fluid">
                  <div class="avatar-ring"></div>
                </div>

                <div class="member-info">
                  <h4>Luccas Luna</h4>
                  <span class="position">Desenvolvedor Web & Fundador</span>
                </div>
                <p class="member-bio">
                  Responsável pelo desenvolvimento das soluções da Telescope Systems.
                </p>
                <div class="social-links">
                  <a href="https://github.com/luccluna/" target="_blank" aria-label="GitHub">
                    <i class="bi bi-github"></i>
                  </a>
                  <a href="https://www.linkedin.com/in/luccluna/" target="_blank" aria-label="LinkedIn">
                    <i class="bi bi-linkedin"></i>
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
          </div><!-- End Team Card -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">
            <div class="team-card">
              <div class="card-inner">
                <div class="avatar-container">
                  <img src="<?= base_url('img/person/andre.png') ?>" alt="Team member" class="img-fluid">
                  <div class="avatar-ring"></div>
                </div>
                <div class="member-info">
                  <h4>André Manoelino</h4>
                  <span class="position">Desenvolvedor Back-End & Sócio</span>
                </div>
                <p class="member-bio">Responsável pelo desenvolvimento das soluções da Telescope Systems.</p>
                <div class="social-links">
                  <a href="https://github.com/AndreManoelino/" target="_blank" aria-label="GitHub">
                    <i class="bi bi-github"></i>
                  </a>
                  <a href="https://www.linkedin.com/in/andre-manoelino-a1519a231/" target="_blank" aria-label="LinkedIn">
                    <i class="bi bi-linkedin"></i>
                  </a>
                  <a href="https://wa.me/5531991070255/" target="_blank" aria-label="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                  <a href="mailto:agmphandre@gmail.com" aria-label="E-mail">
                    <i class="bi bi-envelope-fill"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Card -->

        </div>
        <!--
        <div class="stats-row" data-aos="fade-up" data-aos-delay="200">
          <div class="stat-item">
            <div class="stat-icon">
              <i class="bi bi-people"></i>
            </div>
            <div class="stat-data">
              <span class="stat-value">85+</span>
              <span class="stat-label">Expert Team Members</span>
            </div>
          </div>
          <div class="stat-item">
            <div class="stat-icon">
              <i class="bi bi-geo-alt"></i>
            </div>
            <div class="stat-data">
              <span class="stat-value">18</span>
              <span class="stat-label">Worldwide Offices</span>
            </div>
          </div>
          <div class="stat-item">
            <div class="stat-icon">
              <i class="bi bi-award"></i>
            </div>
            <div class="stat-data">
              <span class="stat-value">40+</span>
              <span class="stat-label">Awards Received</span>
            </div>
          </div>
          <div class="stat-item">
            <div class="stat-icon">
              <i class="bi bi-emoji-smile"></i>
            </div>
            <div class="stat-data">
              <span class="stat-value">96%</span>
              <span class="stat-label">Employee Happiness</span>
            </div>
          </div>
        </div>

        <div class="join-team-banner" data-aos="fade-up" data-aos-delay="250">
          <div class="banner-bg-pattern"></div>
          <div class="banner-content">
            <div class="banner-text">
              <span class="badge-label"><i class="bi bi-stars"></i> Join Our Team</span>
              <h3>Shape the Future With Us</h3>
              <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam eius modi tempora.</p>
            </div>
            <div class="banner-actions">
              <a href="#" class="btn-primary-action">
                <span>View Open Positions</span>
                <i class="bi bi-arrow-right"></i>
              </a>
              <a href="#" class="btn-secondary-action">
                <i class="bi bi-camera-video"></i>
                <span>See Life at Company</span>
              </a>
            </div>
          </div>
        </div>

      </div> -->

    </section><!-- /Team Section -->

<!-- Pricing Section -->
<section id="pricing" class="pricing section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Planos e soluções</h2>
    <p>Escolha o formato ideal para começar seu projeto digital com a Telescope Systems.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-4 justify-content-center">

      <!-- Essential Plan -->
      <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-delay="150">
        <div class="pricing-card">
          <div class="card-header">
            <span class="plan-icon"><i class="bi bi-window"></i></span>
            <h3 class="plan-title">Site Essencial</h3>
            <p class="plan-subtitle">Ideal para empresas que precisam começar com presença digital profissional.</p>
          </div>
          <div class="card-body">
            <div class="price-wrapper custom-pricing">
              <span class="custom-text">Sob consulta</span>
            </div>
            <p class="billing-info">Valor definido conforme estrutura do projeto</p>

            <ul class="feature-list">
              <li><i class="bi bi-check-circle-fill"></i> Página inicial profissional</li>
              <li><i class="bi bi-check-circle-fill"></i> Seções institucionais</li>
              <li><i class="bi bi-check-circle-fill"></i> Layout responsivo</li>
              <li><i class="bi bi-check-circle-fill"></i> Botão para WhatsApp</li>
            </ul>

            <a href="#contact" class="btn-pricing">Solicitar orçamento</a>
          </div>
        </div>
      </div><!-- End Essential Plan -->

      <!-- Growth Plan -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="pricing-card highlighted">
          <div class="card-header">
            <span class="plan-icon"><i class="bi bi-code-square"></i></span>
            <h3 class="plan-title">Sistema Personalizado</h3>
            <p class="plan-subtitle">Para empresas que precisam organizar processos, acessos e informações.</p>
          </div>
          <div class="card-body">
            <div class="price-wrapper custom-pricing">
              <span class="custom-text">Sob medida</span>
            </div>
            <p class="billing-info">Projeto desenvolvido conforme necessidade</p>

            <ul class="feature-list">
              <li><i class="bi bi-check-circle-fill"></i> Painel administrativo</li>
              <li><i class="bi bi-check-circle-fill"></i> Funcionalidades personalizadas</li>
              <li><i class="bi bi-check-circle-fill"></i> Organização de dados</li>
              <li><i class="bi bi-check-circle-fill"></i> Fluxo adaptado à empresa</li>
              <li><i class="bi bi-check-circle-fill"></i> Testes e ajustes</li>
              <li><i class="bi bi-check-circle-fill"></i> Possibilidade de evolução</li>
            </ul>

            <a href="#contact" class="btn-pricing">Falar sobre sistema</a>
            <span class="trial-note">Indicado para projetos com demanda específica</span>
          </div>
        </div>
      </div><!-- End Growth Plan -->

      <!-- Business Plan -->
      <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="250">
        <div class="pricing-card">
          <div class="card-header">
            <span class="plan-icon"><i class="bi bi-briefcase"></i></span>
            <h3 class="plan-title">Projeto Completo</h3>
            <p class="plan-subtitle">Para empresas que desejam site, sistema, estratégia e melhorias digitais.</p>
          </div>
          <div class="card-body">
            <div class="price-wrapper custom-pricing">
              <span class="custom-text">Vamos conversar</span>
            </div>
            <p class="billing-info">Solução personalizada para o seu cenário</p>

            <ul class="feature-list">
              <li><i class="bi bi-check-circle-fill"></i> Diagnóstico inicial</li>
              <li><i class="bi bi-check-circle-fill"></i> Planejamento da estrutura</li>
              <li><i class="bi bi-check-circle-fill"></i> Site ou sistema personalizado</li>
              <li><i class="bi bi-check-circle-fill"></i> Ajustes de experiência do usuário</li>
              <li><i class="bi bi-check-circle-fill"></i> Suporte e melhorias</li>
            </ul>

            <a href="#contact" class="btn-pricing">Solicitar proposta</a>
          </div>
        </div>
      </div><!-- End Business Plan -->

    </div>

    <div class="security-badges" data-aos="zoom-in" data-aos-delay="300">
      <div class="badge-item">
        <i class="bi bi-search"></i>
        <div class="badge-content">
          <strong>Diagnóstico</strong>
          <span>Entendimento da necessidade</span>
        </div>
      </div>

      <div class="badge-item">
        <i class="bi bi-diagram-3"></i>
        <div class="badge-content">
          <strong>Planejamento</strong>
          <span>Estrutura antes do desenvolvimento</span>
        </div>
      </div>

      <div class="badge-item">
        <i class="bi bi-shield-check"></i>
        <div class="badge-content">
          <strong>Organização</strong>
          <span>Projeto claro e funcional</span>
        </div>
      </div>

      <div class="badge-item">
        <i class="bi bi-tools"></i>
        <div class="badge-content">
          <strong>Melhorias</strong>
          <span>Possibilidade de evolução contínua</span>
        </div>
      </div>
    </div>

    <div class="help-links" data-aos="fade-up" data-aos-delay="350">
      <a href="#contact"><i class="bi bi-list-columns-reverse"></i> Comparar opções</a>
      <a href="#faq"><i class="bi bi-question-circle"></i> Tirar dúvidas</a>
      <a href="#contact"><i class="bi bi-headset"></i> Falar com a Telescope</a>
    </div>

  </div>

</section><!-- /Pricing Section -->

  <!-- Faq Section -->
<section id="faq" class="faq section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Dúvidas frequentes</h2>
    <p>Entenda melhor como funciona o desenvolvimento de sites, sistemas e soluções digitais com a Telescope Systems.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="faq-wrapper">

      <div class="faq-categories" data-aos="fade-right" data-aos-delay="150">
        <ul class="nav nav-tabs" role="tablist">

          <li class="nav-item" role="presentation">
            <button class="category-card active" data-bs-toggle="tab" data-bs-target="#faq-general" type="button" role="tab" aria-selected="true">
              <div class="category-icon">
                <i class="bi bi-info-circle"></i>
              </div>
              <div class="category-info">
                <h5>Geral</h5>
                <span>5 perguntas</span>
              </div>
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="category-card" data-bs-toggle="tab" data-bs-target="#faq-billing" type="button" role="tab" aria-selected="false">
              <div class="category-icon">
                <i class="bi bi-credit-card"></i>
              </div>
              <div class="category-info">
                <h5>Orçamento</h5>
                <span>4 perguntas</span>
              </div>
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="category-card" data-bs-toggle="tab" data-bs-target="#faq-technical" type="button" role="tab" aria-selected="false">
              <div class="category-icon">
                <i class="bi bi-gear"></i>
              </div>
              <div class="category-info">
                <h5>Técnico</h5>
                <span>6 perguntas</span>
              </div>
            </button>
          </li>

        </ul>

        <div class="help-box">
          <div class="help-icon">
            <i class="bi bi-headset"></i>
          </div>
          <h4>Ainda tem dúvidas?</h4>
          <p>Entre em contato e explique brevemente o que sua empresa precisa.</p>
          <a href="#contact" class="help-link">
            Falar agora
            <i class="bi bi-arrow-right-circle"></i>
          </a>
        </div>
      </div>

      <div class="faq-content-area" data-aos="fade-left" data-aos-delay="200">

        <div class="faq-header-info">
          <span class="questions-count">15+ dúvidas respondidas</span>
          <div class="search-box">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Buscar dúvida...">
          </div>
        </div>

        <div class="tab-content">

          <!-- General Tab -->
          <div class="tab-pane fade show active" id="faq-general" role="tabpanel">
            <div class="faq-list">

              <div class="faq-item faq-active" data-aos="zoom-in" data-aos-delay="250">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  A Telescope Systems desenvolve apenas sites?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>Não. Além de sites institucionais, também desenvolvemos sistemas personalizados, portais internos, páginas administrativas e soluções digitais sob demanda.</p>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="300">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  O site pode ser feito com base em um template?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>Sim. Dependendo do objetivo, podemos adaptar um template profissional e personalizar textos, cores, imagens, seções e funcionalidades para deixar o projeto alinhado à empresa.</p>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="350">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  Vocês também fazem sistemas internos?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>Sim. Criamos sistemas internos, painéis administrativos e portais para centralizar informações, organizar acessos, melhorar fluxos e reduzir retrabalho.</p>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="400">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  O projeto fica responsivo para celular?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>Sim. A estrutura é pensada para funcionar em diferentes tamanhos de tela, como computador, tablet e celular.</p>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="450">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  Como começo um projeto com a Telescope Systems?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>O primeiro passo é explicar sua necessidade. Depois disso, avaliamos o objetivo, a estrutura ideal, as funcionalidades necessárias e o melhor formato de desenvolvimento.</p>
                </div>
              </div><!-- End FAQ Item -->

            </div>
          </div><!-- End General Tab -->

          <!-- Billing Tab -->
          <div class="tab-pane fade" id="faq-billing" role="tabpanel">
            <div class="faq-list">

              <div class="faq-item faq-active" data-aos="zoom-in" data-aos-delay="250">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  Como é definido o valor do projeto?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>O valor depende da complexidade, quantidade de páginas, funcionalidades, integrações e nível de personalização necessário.</p>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="300">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  Posso começar com um projeto mais simples?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>Sim. Muitas empresas começam com um site institucional ou uma primeira versão do sistema e depois evoluem conforme a necessidade.</p>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="350">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  O orçamento inclui manutenção?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>A manutenção pode ser incluída como serviço separado, dependendo da necessidade do cliente após a entrega do projeto.</p>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="400">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  É possível solicitar melhorias depois da entrega?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>Sim. O projeto pode receber ajustes, novas páginas, novas funcionalidades e melhorias conforme a evolução da empresa.</p>
                </div>
              </div><!-- End FAQ Item -->

            </div>
          </div><!-- End Billing Tab -->

          <!-- Technical Tab -->
          <div class="tab-pane fade" id="faq-technical" role="tabpanel">
            <div class="faq-list">

              <div class="faq-item faq-active" data-aos="zoom-in" data-aos-delay="250">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  Quais tecnologias podem ser usadas?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>Dependendo do projeto, podem ser utilizadas tecnologias como HTML, CSS, JavaScript, Bootstrap, PHP, CodeIgniter e banco de dados.</p>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="300">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  O sistema pode ter área administrativa?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>Sim. Podemos desenvolver áreas administrativas para gerenciar conteúdos, usuários, links, avisos, cadastros e outras informações.</p>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="350">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  É possível integrar WhatsApp e formulários?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>Sim. O site pode ter botões para WhatsApp, formulários de contato e links estratégicos para facilitar o atendimento.</p>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="400">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  O projeto pode ter banco de dados?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>Sim. Sistemas mais completos podem utilizar banco de dados para armazenar informações, cadastros, avisos, conteúdos e registros internos.</p>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="450">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  O site pode ser hospedado depois?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>Sim. Após o desenvolvimento local e os testes, o projeto pode ser publicado em uma hospedagem compatível com PHP e CodeIgniter.</p>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="500">
                <h3 class="faq-question">
                  <span class="question-icon"><i class="bi bi-question-circle"></i></span>
                  O sistema pode crescer com o tempo?
                  <span class="toggle-icon"><i class="bi bi-chevron-down"></i></span>
                </h3>
                <div class="faq-answer">
                  <p>Sim. A ideia é criar uma estrutura que possa evoluir com novas funcionalidades, melhorias e ajustes conforme a demanda.</p>
                </div>
              </div><!-- End FAQ Item -->

            </div>
          </div><!-- End Technical Tab -->

        </div>
      </div>

    </div>

  </div>

</section><!-- /Faq Section -->


<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contato</h2>
    <p>Fale com a Telescope Systems e conte qual solução digital sua empresa precisa.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-5">

      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="150">
        <div class="main-contact-wrapper">

          <div class="row gy-4">

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="info-box">
                <div class="icon-wrap">
                  <i class="bi bi-envelope-heart"></i>
                </div>
                <h5>E-mail</h5>
                <p>telescopesystems@gmail.com</p>
                <span class="availability">Envie sua solicitação</span>
              </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="250">
              <div class="info-box">
                <div class="icon-wrap">
                  <i class="bi bi-whatsapp"></i>
                </div>
                <h5>WhatsApp</h5>
                <p>(00) 00000-0000</p>
                <span class="availability">Atendimento direto</span>
              </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="info-box">
                <div class="icon-wrap">
                  <i class="bi bi-laptop"></i>
                </div>
                <h5>Projetos digitais</h5>
                <p>Sites, sistemas e portais</p>
                <span class="availability">Soluções sob demanda</span>
              </div>
            </div>

          </div>

          <div class="form-section" data-aos="fade-up" data-aos-delay="350">
            <div class="form-intro">
              <h3>Compartilhe sua ideia conosco</h3>
              <p>
                Conte brevemente o que sua empresa precisa. A Telescope Systems analisa sua necessidade para indicar o melhor caminho: site, sistema, portal interno ou melhoria em um projeto já existente.
              </p>
            </div>

            <form action="<?= base_url('contato/enviar') ?>" method="post" class="php-email-form">
              <div class="row gy-3">

                <div class="col-md-4">
                  <div class="input-group-custom">
                    <i class="bi bi-person"></i>
                    <input type="text" name="name" class="form-control" placeholder="Seu nome" required autocomplete="name">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="input-group-custom">
                    <i class="bi bi-envelope"></i>
                    <input type="email" name="email" class="form-control" placeholder="Seu e-mail" required autocomplete="email">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="input-group-custom">
                    <i class="bi bi-tag"></i>
                    <input type="text" name="subject" class="form-control" placeholder="Assunto do projeto" required>
                  </div>
                </div>

                <div class="col-12">
                  <div class="input-group-custom textarea-group">
                    <i class="bi bi-chat-text"></i>
                    <textarea name="message" class="form-control" rows="5" placeholder="Descreva se você precisa de um site, sistema, portal interno ou melhoria em uma estrutura existente." required></textarea>
                  </div>
                </div>

              </div>

              <div class="form-footer">
                <div class="form-messages">
                  <div class="loading">Carregando</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
                </div>

                <button type="submit" class="btn-submit">
                  <i class="bi bi-rocket-takeoff"></i>
                  <span>Enviar mensagem</span>
                </button>
              </div>
            </form>
          </div>

        </div>
      </div>

      <div class="col-lg-4" data-aos="fade-left" data-aos-delay="200">
        <div class="sidebar-panel">

          <div class="panel-header">
            <div class="header-badge">
              <i class="bi bi-lightning-charge-fill"></i>
            </div>
            <h4>Por que escolher a Telescope?</h4>
          </div>

          <div class="metrics-grid">

            <div class="metric-item" data-aos="fade-up" data-aos-delay="250">
              <div class="metric-value">01</div>
              <div class="metric-desc">Diagnóstico antes do desenvolvimento</div>
            </div>

            <div class="metric-item" data-aos="fade-up" data-aos-delay="300">
              <div class="metric-value">02</div>
              <div class="metric-desc">Soluções pensadas para cada empresa</div>
            </div>

            <div class="metric-item" data-aos="fade-up" data-aos-delay="350">
              <div class="metric-value">03</div>
              <div class="metric-desc">Sites, sistemas e portais personalizados</div>
            </div>

            <div class="metric-item" data-aos="fade-up" data-aos-delay="400">
              <div class="metric-value">04</div>
              <div class="metric-desc">Acompanhamento próximo do projeto</div>
            </div>

          </div>

          <div class="testimonial-mini" data-aos="fade-up" data-aos-delay="450">
            <div class="quote-icon">
              <i class="bi bi-quote"></i>
            </div>

            <p>
              Tecnologia precisa ser clara, funcional e feita para resolver problemas reais. É assim que a Telescope Systems desenvolve cada projeto.
            </p>

            <div class="client-info">
              <img src="<?= base_url('img/person/person1.png') ?>" alt="Telescope Systems" class="client-avatar">
              <div class="client-details">
                <span class="client-name">Luccas Luna</span>
                <span class="client-role">Web Developer & CEO</span>
              </div>
            </div>
          </div>

          <div class="social-bar" data-aos="fade-up" data-aos-delay="500">
            <span class="social-label">Acompanhe a Telescope</span>

            <div class="social-icons">
              <a href="#" aria-label="LinkedIn">
                <i class="bi bi-linkedin"></i>
              </a>

              <a href="#" aria-label="Instagram">
                <i class="bi bi-instagram"></i>
              </a>

              <a href="#" aria-label="GitHub">
                <i class="bi bi-github"></i>
              </a>

              <a href="https://wa.me/5500000000000" target="_blank" aria-label="WhatsApp">
                <i class="bi bi-whatsapp"></i>
              </a>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

</section><!-- /Contact Section -->


</main>

<?= $this->include('footer') ?>