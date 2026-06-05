<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Telescope Systems</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= base_url('assets/home/style.css') ?>">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="logo">
        <img src="<?= base_url('assets/home/logo.png') ?>">
        <span>Telescope Systems</span>
    </div>
    <ul class="menu">
        <li><a href="#sobre">Produto</a></li>
        <li><a href="#problema">Solução</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#analytics">Analytics</a></li>
        <li><a href="#planos">Planos</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="#equipe">Equipe</a></li>
    </ul>
    <div class="actions">
        <a href="<?= base_url('login') ?>" class="btn ghost">Entrar</a>
        <a href="<?= base_url('cadastro-empresa') ?>" class="btn primary">Começar</a>
    </div>
</nav>

<!-- HERO -->
<header class="hero">
    <div class="hero-content">
        <h1>O Sistema que Escala Empresas como AWS</h1>
        <p>Gestão completa de empresas, usuários, permissões e automações. Construído para performance, controle e crescimento real.</p>
        <div class="cta">
            <a href="<?= base_url('cadastro-empresa') ?>" class="btn primary big">Criar minha empresa</a>
            <a href="<?= base_url('login') ?>" class="btn outline big">Acessar sistema</a>
        </div>
        <div class="stats">
            <div><h2>+2.450</h2><span>Empresas simuladas</span></div>
            <div><h2>99.99%</h2><span>Uptime</span></div>
            <div><h2>1.2M</h2><span>Operações/dia</span></div>
        </div>
    </div>
</header>
<section id="sobre" class="section">

    <h2>Produto</h2>

    <p class="section-text">
        O Telescope Systems é uma plataforma SaaS desenvolvida para
        centralizar a gestão de empresas, usuários, permissões,
        departamentos e indicadores operacionais em um único ambiente.
    </p>

    <div class="grid">

        <div class="card">
            <h3>Gestão Empresarial</h3>
            <p>Controle total da estrutura organizacional.</p>
        </div>

        <div class="card">
            <h3>Usuários</h3>
            <p>Controle de acesso por perfil e permissões.</p>
        </div>

        <div class="card">
            <h3>Segurança</h3>
            <p>Criptografia de senhas e auditoria completa.</p>
        </div>

        <div class="card">
            <h3>Dashboards</h3>
            <p>Indicadores em tempo real.</p>
        </div>

    </div>

</section>

<section id="problema" class="section dark">

    <h2>Solução</h2>

    <div class="grid">

        <div class="card">
            <h3>Centralização</h3>
            <p>Todos os processos em uma única plataforma.</p>
        </div>

        <div class="card">
            <h3>Escalabilidade</h3>
            <p>Preparado para pequenas e grandes empresas.</p>
        </div>

        <div class="card">
            <h3>Automação</h3>
            <p>Fluxos automatizados para reduzir trabalho manual.</p>
        </div>

        <div class="card">
            <h3>Performance</h3>
            <p>Arquitetura inspirada em plataformas cloud modernas.</p>
        </div>

    </div>

</section>
<!-- FEATURES -->
<section id="features" class="section">
    <h2>Features Enterprise</h2>
    <div class="grid">
        <div class="card">Login seguro JWT</div>
        <div class="card">Controle por empresa</div>
        <div class="card">Permissões por nível</div>
        <div class="card">Auditoria completa</div>
        <div class="card">Dashboard dinâmico</div>
        <div class="card">Logs de sistema</div>
    </div>
</section>
<section id="analytics" class="section">

    <h2>Analytics</h2>

    <div class="dashboard-grid">

        <div class="empresa-card">

            <img src="<?= base_url('assets/home/empresas/tw-espumas.png') ?>"
            class="empresa-logo">

            <h4>TW Espumas</h4>

            <p>
                Especializada na fabricação de espumas técnicas,
                revestimentos automotivos e materiais para personalização
                de veículos.
            </p>

            <button class="btn primary"
            onclick="openModal('modalTwEspumas')">
                Conhecer Empresa
            </button>

        </div>

        <div class="empresa-card">

            <img src="<?= base_url('assets/home/usuarios/usuario-sistema.jpg') ?>"
            class="empresa-logo">

            <h4>Usuários da Plataforma</h4>

            <p>
                Administradores, gestores, supervisores e colaboradores
                que utilizam diariamente o Telescope Systems para
                gerenciar operações, equipes e processos empresariais.
            </p>

            <button class="btn primary"
            onclick="openModal('modalUsuarios')">
                Conhecer Usuários
            </button>

        </div>
        <div class="empresa-card">

            <img src="<?= base_url('assets/home/analytics/crescimento.png') ?>"
            class="empresa-logo">

            <h4>Crescimento Mensal</h4>

            <p>
                Indicadores que demonstram a evolução da plataforma,
                novos usuários cadastrados, empresas ativas e expansão
                operacional ao longo dos meses.
            </p>

            <button class="btn primary"
            onclick="openModal('modalCrescimento')">
                Ver Crescimento
            </button>

        </div>
        <div class="empresa-card">

            <img src="<?= base_url('assets/home/analytics/distribuicao.png') ?>"
            class="empresa-logo">

            <h4>Distribuição das Empresas</h4>

            <p>
                Visualização da quantidade de empresas cadastradas
                e sua participação dentro do ecossistema
                Telescope Systems.
            </p>

            <button class="btn primary"
            onclick="openModal('modalDistribuicao')">
                Ver Distribuição
            </button>

        </div>

    </div>

</section>
<!-- PLANOS -->
<section id="planos" class="section">
    <h2>Planos</h2>
    <div class="plans">
        <div class="plan">
            <h3>Básico</h3>
            <p class="old">R$ 89</p>
            <p class="price">R$ 70</p>
            <span>Ideal para pequenas empresas</span>
            <button class="btn outline btn-andre" onclick="openModal('modalBasico')">Ver mais</button>
        </div>
        <div class="plan highlight">
            <h3>Pro</h3>
            <p class="old">R$ 200,00</p>
            <p class="price">R$ 129</p>
            <span>Empresas em crescimento</span>
            <button class="btn outline btn-andre" onclick="openModal('modalPro')">Ver mais</button>
        </div>
        <div class="plan">
            <h3>Enterprise</h3>
            <p class="old">R$300,00</p>
            <p class="price">R$ 199</p>
            <span>Escala global</span>
            <button class="btn outline btn-andre" onclick="openModal('modalEnterprise')">Ver mais</button>
        </div>
    </div>
</section>

<section id="faq" class="section dark">

    <h2>Perguntas Frequentes</h2>

    <div class="faq-item">
        <button class="faq-question"
        onclick="openModal('faqCadastro')">
            Como funciona o cadastro?
        </button>
    </div>

    <div class="faq-item">
        <button class="faq-question"
        onclick="openModal('faqEmpresas')">
            Posso ter várias empresas?
        </button>
    </div>

    <div class="faq-item">
        <button class="faq-question"
        onclick="openModal('faqSeguranca')">
            O sistema possui segurança?
        </button>
    </div>

    <div class="faq-item">
        <button class="faq-question"
        onclick="openModal('faqSuporte')">
            Existe suporte?
        </button>
    </div>

    <div class="faq-item">
        <button class="faq-question"
        onclick="openModal('faqNavegador')">
            Posso utilizar em qualquer navegador?
        </button>
    </div>

    <div class="faq-item">
        <button class="faq-question"
        onclick="openModal('faqApp')">
            Existe aplicativo?
        </button>
    </div>

</section>

<!-- EQUIPE -->
<section id="equipe" class="section">
    <h2>Equipe</h2>
    <div class="grid">
        <div class="card">
            <img src="<?= base_url('assets/home/andre.png') ?>" alt="André Manoelino">
            <h3>André Manoelino</h3>
            <p>
            Desenvolvedor Full Stack e DevOps com sólida experiência em C#, ASP.NET e PHP. Atua na criação de sistemas web, arquitetura de software, bancos de dados, automação de processos, integração de APIs e implantação de soluções de alta performance e segurança.
            </p>

            <button class="btn outline btn-andre"onclick="openModal('modalAndre')">Ver mais</button>
        </div>
        <div class="card">
            <img src="<?= base_url('assets/home/luccas.jpg') ?>" alt="Luccas Luna">
            <h3>Luccas Luna</h3>
            <p>CEO • Estratégia Corporativa</p>
            <button class="btn outline btn-luccas" onclick="openModal('modalLuccas')">Ver mais</button>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <p>Telescope Systems © <?= date('Y') ?></p>
    <p>André Manoelino • Luccas Luna</p>
</footer>

<div id="faqCadastro" class="modal">
    <div class="modal-content">
        <span class="close"
        onclick="closeModal('faqCadastro')">&times;</span>

        <h2>Como funciona o cadastro?</h2>

        <p>
            A empresa cria sua conta, define administradores,
            departamentos, usuários e permissões de acesso.
        </p>
    </div>
</div>

<div id="faqEmpresas" class="modal">
    <div class="modal-content">
        <span class="close"
        onclick="closeModal('faqEmpresas')">&times;</span>

        <h2>Posso ter várias empresas?</h2>

        <p>
            Sim. O Telescope Systems possui arquitetura
            multiempresa permitindo o gerenciamento de
            diversas organizações.
        </p>
    </div>
</div>

<div id="faqSeguranca" class="modal">
    <div class="modal-content">
        <span class="close"
        onclick="closeModal('faqSeguranca')">&times;</span>

        <h2>O sistema possui segurança?</h2>

        <p>
            Sim. Utilizamos criptografia de senhas,
            controle de permissões, auditoria e
            autenticação segura.
        </p>
    </div>
</div>

<div id="faqSuporte" class="modal">
    <div class="modal-content">
        <span class="close"
        onclick="closeModal('faqSuporte')">&times;</span>

        <h2>Existe suporte?</h2>

        <p>
            Todos os clientes possuem suporte.
            Os planos superiores possuem atendimento prioritário.
        </p>
    </div>
</div>

<div id="faqNavegador" class="modal">
    <div class="modal-content">
        <span class="close"
        onclick="closeModal('faqNavegador')">&times;</span>

        <h2>Posso utilizar em qualquer navegador?</h2>

        <p>
            Sim. Chrome, Edge, Firefox, Opera e Safari
            são compatíveis.
        </p>
    </div>
</div>

<div id="faqApp" class="modal">
    <div class="modal-content">
        <span class="close"
        onclick="closeModal('faqApp')">&times;</span>

        <h2>Existe aplicativo?</h2>

        <p>
            Atualmente a plataforma funciona diretamente
            pelo navegador sem necessidade de instalação.
        </p>
    </div>
</div>
<!-- MODAIS -->
<div id="modalBasico" class="modal">

    <div class="modal-content">

        <span class="close" onclick="closeModal('modalBasico')">&times;</span>

        <h2>Plano Básico</h2>

        <ul>
            <li>Até 20 usuários</li>
            <li>Dashboard completo</li>
            <li>Controle de permissões</li>
            <li>Cadastro de departamentos</li>
            <li>Suporte por e-mail</li>
        </ul>

        <a href="<?= base_url('cadastro-empresa') ?>" class="btn primary">
            Contratar Plano
        </a>

    </div>

</div>
<div id="modalPro" class="modal">

    <div class="modal-content">

        <span class="close" onclick="closeModal('modalPro')">&times;</span>

        <h2>Plano PRO</h2>

        <ul>
            <li>Usuários ilimitados</li>
            <li>Automações avançadas</li>
            <li>Relatórios inteligentes</li>
            <li>Auditoria completa</li>
            <li>Suporte prioritário</li>
        </ul>

        <a href="<?= base_url('cadastro-empresa') ?>" class="btn primary">
            Contratar Plano
        </a>

    </div>

</div>
<div id="modalEnterprise" class="modal">

    <div class="modal-content">

        <span class="close" onclick="closeModal('modalEnterprise')">&times;</span>

        <h2>Plano Enterprise</h2>

        <ul>
            <li>Multiempresa</li>
            <li>API própria</li>
            <li>Integrações externas</li>
            <li>Alta disponibilidade</li>
            <li>Suporte Premium 24h</li>
        </ul>

        <a href="<?= base_url('cadastro-empresa') ?>" class="btn primary">
            Contratar Plano
        </a>

    </div>

</div>

<div id="modalAndre" class="modal">

    <div class="modal-content">

        <span class="close" onclick="closeModal('modalAndre')">&times;</span>

        <img src="<?= base_url('assets/home/andre.png') ?>" class="perfil-modal">

        <h2>André Manoelino</h2>

        <p>
            Fundador e CTO da Telescope Systems, liderando a estratégia tecnológica,
            pesquisa, arquitetura de software e desenvolvimento de soluções empresariais
            de alta performance voltadas para transformação digital, automação e escalabilidade.
        </p>

        <p>
            Especialista em desenvolvimento Full Stack e DevOps com ampla experiência
            em C#, ASP.NET, PHP, JavaScript, SQL Server e MySQL. Responsável pela
            arquitetura de sistemas SaaS, segurança da informação, infraestrutura,
            integração de APIs, microsserviços e ambientes Microsoft corporativos,
            incluindo Microsoft Azure, Microsoft Entra ID (Azure Active Directory),
            Active Directory, Microsoft Intune, Microsoft Defender, Windows Server,
            gerenciamento de identidades, políticas de acesso, dispositivos corporativos,
            monitoramento, observabilidade, banco de dados, cloud computing e soluções
            empresariais focadas em disponibilidade, segurança, governança e crescimento sustentável.
        </p>
    </div>

</div>

<div id="modalLuccas" class="modal">

    <div class="modal-content">

        <span class="close" onclick="closeModal('modalLuccas')">&times;</span>

        <img src="<?= base_url('assets/home/luccas.jpg') ?>" class="perfil-modal">

        <h2>Luccas Luna</h2>

        <p>
            Criador e desenvolvedor da  Telescope Systems.
        </p>

        <p>
            Responsável pelo crescimento,
            estratégia corporativa,
            experiência dos clientes
            e expansão da plataforma.
        </p>

    </div>

</div>

<div id="modalTwEspumas" class="modal">

    <div class="modal-content empresa-modal">

        <span class="close"
        onclick="closeModal('modalTwEspumas')">
            &times;
        </span>

        <img
        src="<?= base_url('assets/home/empresas/tw-espumas.png') ?>"
        class="empresa-modal-logo">

        <h2>TW Espumas</h2>

        <p class="empresa-subtitulo">
            Indústria de Espumas e Soluções para o Setor Automotivo
        </p>

        <p>
            A TW Espumas atua no desenvolvimento e fabricação de
            espumas técnicas utilizadas em aplicações automotivas,
            industriais e personalizadas.
        </p>

        <p>
            A empresa oferece soluções para revestimentos internos,
            acabamento automotivo, isolamento, proteção e projetos
            personalizados para clientes de diversos segmentos.
        </p>

        <p>
            Utilizando o Telescope Systems, a empresa realiza o
            gerenciamento de usuários, setores, permissões,
            relatórios operacionais, indicadores de desempenho,
            processos internos e controle administrativo em uma
            única plataforma integrada.
        </p>

        <h3>Áreas Utilizadas</h3>

        <ul>
            <li>Gestão Administrativa</li>
            <li>Controle de Funcionários</li>
            <li>Relatórios Gerenciais</li>
            <li>Controle de Acessos</li>
            <li>Dashboards Operacionais</li>
            <li>Indicadores de Produção</li>
        </ul>

    </div>

</div>

<div id="modalUsuarios" class="modal">

    <div class="modal-content">

        <span class="close"
        onclick="closeModal('modalUsuarios')">
        &times;
        </span>

        <img src="<?= base_url('assets/home/usuarios/usuario-sistema.jpg') ?>"
        class="perfil-modal">

        <h2>Usuários da Plataforma</h2>

        <p>
            O Telescope Systems é utilizado por profissionais de
            diferentes áreas e níveis hierárquicos dentro das empresas.
        </p>

        <p>
            Administradores possuem acesso completo ao ambiente,
            podendo gerenciar usuários, permissões, departamentos,
            configurações e acompanhar indicadores estratégicos.
        </p>

        <p>
            Gestores e supervisores acompanham equipes,
            produtividade, relatórios e resultados em tempo real,
            utilizando dashboards inteligentes para tomada de decisão.
        </p>

        <p>
            Colaboradores utilizam a plataforma para executar
            atividades operacionais, registrar informações,
            consultar dados e participar dos processos internos
            da organização.
        </p>

        <p>
            Todo acesso é protegido por mecanismos de segurança,
            auditoria e controle de permissões, garantindo que
            cada usuário visualize apenas as informações
            autorizadas pela empresa.
        </p>

    </div>

</div>

<div id="modalCrescimento" class="modal">

    <div class="modal-content">

        <span class="close"
        onclick="closeModal('modalCrescimento')">
        &times;
        </span>

        <img src="<?= base_url('assets/home/analytics/crescimento.png') ?>"
        class="perfil-modal">

        <h2>Crescimento Mensal</h2>

        <p>
            O crescimento mensal representa a evolução constante
            da plataforma Telescope Systems.
        </p>

        <p>
            Através dos indicadores é possível acompanhar o aumento
            de empresas cadastradas, usuários ativos, departamentos,
            movimentações e utilização dos recursos disponíveis.
        </p>

        <p>
            Os gráficos permitem identificar tendências,
            períodos de maior utilização e oportunidades
            para expansão dos negócios.
        </p>

        <p>
            Todas as informações são processadas em tempo real,
            fornecendo uma visão estratégica para tomada
            de decisões.
        </p>

    </div>

</div>
<div id="modalDistribuicao" class="modal">

    <div class="modal-content">

        <span class="close"
        onclick="closeModal('modalDistribuicao')">
        &times;
        </span>

        <img src="<?= base_url('assets/home/analytics/distribuicao.png') ?>"
        class="perfil-modal">

        <h2>Distribuição das Empresas</h2>

        <p>
            Esta área apresenta a distribuição das empresas
            cadastradas na plataforma.
        </p>

        <p>
            Os dados permitem visualizar a participação
            de cada organização no ambiente,
            facilitando análises administrativas
            e estratégicas.
        </p>

        <p>
            O recurso auxilia na identificação
            de crescimento, concentração de usuários,
            expansão de departamentos e utilização
            dos recursos corporativos.
        </p>

        <p>
            Todas as informações são atualizadas
            automaticamente conforme novas empresas
            ingressam na plataforma.
        </p>

    </div>

</div>
<script>

function openModal(id)
{
    const modal = document.getElementById(id);

    if(modal)
    {
        modal.style.display = 'flex';
    }
}


document.querySelectorAll('.faq-question').forEach(button => {

    button.addEventListener('click', () => {

        const item = button.parentElement;

        item.classList.toggle('active');

    });

});



function closeModal(id)
{
    document.getElementById(id).style.display = 'none';
}

window.onclick = function(event)
{
    document.querySelectorAll('.modal').forEach(modal => {

        if(event.target === modal)
        {
            modal.style.display = 'none';
        }

    });
}
document.addEventListener('keydown', function(e){

    if(e.key === 'Escape')
    {
        document.querySelectorAll('.modal').forEach(modal => {
            modal.style.display = 'none';
        });
    }

});
</script>

<style>
.modal{
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.75);
    justify-content:center;
    align-items:center;
    z-index:9999;
    padding:20px;
}

.modal-content{
    background:black;
    width:100%;
    max-width:650px;
    border-radius:20px;
    padding:35px;
    position:relative;
    animation:modalShow .3s ease;
}

@keyframes modalShow{
    from{
        opacity:0;
        transform:translateY(-20px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.close{
    position:absolute;
    top:15px;
    right:20px;
    font-size:30px;
    cursor:pointer;
}

.modal-content h2{
    margin-bottom:20px;
}

.modal-content ul{
    margin:20px 0;
    padding-left:20px;
}

.modal-content li{
    margin-bottom:10px;
}

.perfil-modal{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:20px;
}
</style>

</body>
</html>
