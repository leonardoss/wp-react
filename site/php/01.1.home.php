<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125950803-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-125950803-1');
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Leonardo Silva - Senior Frontend Developer</title>
  <meta name="description" content="FrontEnd Developer in Porto Alegre, React and WordPress">
  <link rel="stylesheet" href="assets/css/main.css?s">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono|Inconsolata" rel="stylesheet">
  <link href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
</head>

<body>

  <!--Switcher-->
  <div class="style-switcher">
    <span class="style-switcher__control"></span>
    <div class="style-switcher__list">
      <a class="style-switcher__link style-switcher__link--color"></a>
      <a class="style-switcher__link style-switcher__link--mono"></a>
    </div>
  </div>
  <!--Switcher-->

  <!--Main menu-->
  <div class="menu">
    <div class="container">
      <div class="row">
        <div class="menu__wrapper d-none d-lg-block col-md-12">
          <nav class="">
            <ul>
              <li><a href="#hello">Hello</a></li>
              <li><a href="#resume">Resume</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <!-- <li><a href="#testimonials">testimonials</a></li>
              <li><a href="#blog">blog</a></li> -->
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="menu__wrapper col-md-12 d-lg-none">
          <button type="button" class="menu__mobile-button">
            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--Main menu-->

  <!-- Mobile menu -->
  <div class="mobile-menu d-lg-none">
    <div class="container">
      <div class="mobile-menu__close">
        <span><i class="mdi mdi-close" aria-hidden="true"></i></span>
      </div>
      <nav class="mobile-menu__wrapper">
        <ul>
          <li><a href="#hello">Hello</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <!-- <li><a href="#testimonials">testimonials</a></li> -->
          <!-- <li><a href="#blog">blog</a></li> -->
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- Mobile menu -->

  <!--Header-->
  <header class="main-header" style="background-image: url(assets/img/leonardo-souza-da-silva-family.jpg)">
    <div class="container">
      <div class="row personal-profile">
        <div class="col-md-4 personal-profile__avatar">
          <img class="" src="assets/img/leonardo-souza-da-silva.png" alt="Leonardo Souza da Silva - Frontend Developer" />
        </div>
        <div class="col-md-8">
          <p class="personal-profile__name">Leonardo Silva</p>
          <p class="personal-profile__work">Senior Frontend developer</p>
          <div class="personal-profile__contacts">
            <dl class="contact-list contact-list__opacity-titles">
              <dt>Age:</dt>
              <dd>33</dd>
              <dt>Phone:</dt>
              <dd><a href="tel:82344563333">55 (51) 9 9808 7053</a></dd>
              <dt>Email:</dt>
              <dd><a href="mailto:leonardo@santopixel.com.br">leonardo@santopixel.com.br</a></dd>
              <dt>Address:</dt>
              <dd>Rua Pau-Brasil 514 - Porto Alegre - Brazil </dd>
            </dl>
          </div>
          <p class="personal-profile__social">
            <a href="https://github.com/leonardoss" target="_blank"><i class="fa fa-github"></i></a>
            <a href="https://www.linkedin.com/in/leonardosouzadasilva/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
            <a href="https://www.facebook.com/leonardo.souzadasilva" target="_blank"><i class="fa fa-facebook-square"></i></a>
          </p>
        </div>
      </div>
    </div>
  </header>
  <!--Header-->

  <!--Hello-->
  <section id="hello" class="container section">
    <div class="row">
      <div class="col-md-10">
        <h2 id="hello_header" class="section__title">Hi_</h2>
        <p class="section__description">
          I'm Technical leader & Senior Front End Developer at <a href="http://www.gruporbs.com.br/" title="Grupo RBS">Grupo
            RBS</a> | Founder & Developer at <a href="http://www.santopixel.com.br" title="SantoPixel - Design & Code">SantoPixel</a>
          <br />
          Analytical and problem-solving oriented software developer. Experience with entrepreneurship since 2013.
          <br />
          My main areas of expertise include JavaScript, React/Redux, jQuery, CSS3, HTML5, responsive layouts and
          WordPress theme creation.
          <br />
          Long time working with agile and Scrum methodologies.
        </p>
        <a href="assets/docs/Resume-LeonardoSilva.pdf" class="section_btn site-btn" target="_blank"><img src="assets/img/img_btn_icon.png"
            alt="">Download CV</a>
      </div>
    </div>
  </section>
  <!--Hello-->

  <hr>

  <!--Resume-->
  <section id="resume" class="container section">
    <div class="row">
      <div class="col-md-10">
        <h2 id="resume_header" class="section__title">Resume_</h2>
        <p class="section__description">
          I’ve been working with web development since 2008 working on agile teams building websites with millions of
          visitors per month, with the latest trends in the website industry
          <br />
          I'm a technical leader, always try to understand all the scenario to help everyone who has problems. Work
          closely together to support and motivate each other to achieve our goals.
          <br />
          Strong skills to adapt to any language. My experience with entrepreneurship gave me ability of management of
          quality control, patterns creation and diagnose problems and propose solutions.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 section__resume resume-list">
        <h3 class="resume-list_title">education</h3>
        <div class="resume-list__block">
          <p class="resume-list__block-title"><a href="http://www.unisinos.br/" title="Unisinos">Unisinos</a>, São
            Leopoldo - Brazil</p>
          <p class="resume-list__block-date">2005 - 2012</p>
          <p>
            Bachelor of Computer Science
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 section__resume resume-list">
        <h3 class="resume-list_title">employment</h3>
        <div class="resume-list__block">
          <p class="resume-list__block-title">Grupo RBS</p>
          <p class="resume-list__block-date">04/2016 - Present</p>
          <p>
            <strong>Senior Frontend Developer</strong>
            <br />
            Frontend Technical Leader responsible for PaidContent solutions and digital subscription. Working with the
            Customer acquisition and Retention teams. Also in maintaining the company login system. A/B Tests,
            React/Redux, JavaScript (ES6), HTML, SCSS, jQuery, Wordpress.
          </p>
        </div>
        <div class="resume-list__block">
          <p class="resume-list__block-title">SantoPixel</p>
          <p class="resume-list__block-date">08/2013 - Present</p>
          <p>
            <strong>Senior Developer</strong>
            <br />
            Partner and development leader of the company. Management of quality control team. Accumulation of
            administrative / commercial / financial functions of the company. Focused in Wordpress development,
            JavaScript, jQuery, CSS3, HTML5 and responsive layouts.
          </p>
        </div>
        <div class="resume-list__block">
          <p class="resume-list__block-title">KingHost</p>
          <p class="resume-list__block-date">08/2012 - 08/2013</p>
          <p>
            <strong>Senior Developer</strong>
            <br />
            Frontend Developer responsible to construct all the frontend of the new website of the company. Working with HTML+CSS+JavaScript, Joomla, PHP (Zend)
          </p>
        </div>
        <div class="resume-list__block">
          <p class="resume-list__block-title">Grupo RBS</p>
          <p class="resume-list__block-date">04/2007 - 08/2012</p>
          <p>
            <strong>Frontend Developer</strong>
            <br />
            Frontend Developer responsible for creation of layout and integration with internal company CMS. Landing
            Pages, Email marketing, Facebook APP's. HTML, JS, CSS, XSLT, JSTL, Wordpress.
          </p>
        </div>
      </div>
    </div>

    <div class="row section__resume progress-list js-progress-list">
      <div class="col-md-12">
        <h3 class="progress-list__title">general skills</h3>
      </div>
      <div class="col-md-5 mr-auto">
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">React + Redux</span>
            <span class="progress-list__skill-value">80%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">javaScript (ES6)</span>
            <span class="progress-list__skill-value">75%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">Webpack</span>
            <span class="progress-list__skill-value">70%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">GraphQL</span>
            <span class="progress-list__skill-value">60%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">Docker (SWARM)</span>
            <span class="progress-list__skill-value">60%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">NodeJS</span>
            <span class="progress-list__skill-value">70%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">Unit Testing (Jest)</span>
            <span class="progress-list__skill-value">70%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">WordPress (Theme creation)</span>
            <span class="progress-list__skill-value">85%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">GIT (Git flow)</span>
            <span class="progress-list__skill-value">90%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 mr-auto">
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">html5 (Bootstrap)</span>
            <span class="progress-list__skill-value">95%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">css3 (SASS)</span>
            <span class="progress-list__skill-value">95%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">Responsive layouts (mobile first)</span>
            <span class="progress-list__skill-value">95%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">javaScript (jQuery)</span>
            <span class="progress-list__skill-value">90%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">Agile (Scrum)</span>
            <span class="progress-list__skill-value">90%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">Task Runners (Gulp,Grunt)</span>
            <span class="progress-list__skill-value">85%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">Cross-Browser Development</span>
            <span class="progress-list__skill-value">95%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">Image editors (PS + Zeplin + FW)</span>
            <span class="progress-list__skill-value">90%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Resume-->

  <!--Portfolio-->
  <section id="portfolio" class="container section">
    <div class="row">
      <div class="col-md-12">
        <h2 id="portfolio_header" class="section__title">My projects_</h2>
      </div>
    </div>
    <div class="row portfolio-menu">
      <div class="col-md-12">
        <nav>
          <ul>
            <li><a href="" data-portfolio-target-tag="all">all</a></li>
            <li><a href="" data-portfolio-target-tag="React">React</a></li>
            <li><a href="" data-portfolio-target-tag="WordPress">WordPressp</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="portfolio-cards">
      <div class="row project-card" data-portfolio-tag="React">
        <div class="col-md-6 col-lg-5 project-card__img">
          <img class="" src="assets/img/gzh-easy-checkout-1.jpg" alt="project-img">
        </div>
        <div class="col-md-6 col-lg-7 project-card__info">
          <h3 class="project-card__title">Payment Gateway of Grupo RBS</h3>
          <p class="project-card__description">
            Project created based on Creat React App. It's a generic solutions for payments. We have a loader that implements the gateway wherever we want.<br />
            Currently we sell digital subscriptions of the newspapper Zero Hora.<br />
            In this project i was the technical leader, helping others developers to achieve the best technical solution for the project and being a channel of the bussiness area with the team.
          </p>
          <p class="project-card__stack">Used stack:</p>
          <ul class="tags">
            <li>React</li>
            <li>Redux</li>
            <li>JavaScript (ES6)</li>
            <li>Webpack</li>
            <li>GraphQL</li>
          </ul>
          <div class="links">
            <div class="link">
                <a href="https://gauchazh.clicrbs.com.br/#EC-13054" target="_blank" class="project-card__link">Payment in GaúchaZH</a> <br/>
            </div>
            <div class="link">
              <a href="https://pagamento.clicrbs.com.br/oferta/13054" target="_blank" class="project-card__link">Payment Standalone</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row project-card" data-portfolio-tag="React">
        <div class="col-md-6 col-lg-5 project-card__img">
          <img class="" src="assets/img/gzh-paidcontent-1.jpg" alt="project-img">
        </div>
        <div class="col-md-6 col-lg-7 project-card__info">
          <h3 class="project-card__title">GaúchaZH - Login and PaidContent System </h3>
          <p class="project-card__description">
              Internal login system adapted for react stack. <br />
              Paidcontent system that implements a count of articles read by the user and presents a paywall. 
              It aims to bring in more paid subscribers of digital signatures.
          </p>
          <p class="project-card__stack">Used stack:</p>
          <ul class="tags">
            <li>React</li>
            <li>Redux</li>
            <li>JavaScript (ES6)</li>
            <li>Webpack</li>
            <li>GraphQL</li>
          </ul>
          <div class="links">
            <div class="link">
                <a href="https://gauchazh.clicrbs.com.br/colunistas/marcos-bertoncello/noticia/2018/09/ha-um-ano-barrios-marcava-o-gol-mais-importante-do-gremio-no-tri-da-america-cjmazkh9f04xa01pxilfyn2db.html" target="_blank" class="project-card__link">GaúchaZH - Article</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row project-card" data-portfolio-tag="WordPress">
        <div class="col-md-6 col-lg-5 project-card__img">
          <img class="" src="assets/img/almap-1.jpg" alt="project-img">
        </div>
        <div class="col-md-6 col-lg-7 project-card__info">
          <h3 class="project-card__title">Almap Intranet</h3>
          <p class="project-card__description">
              Intranet of agency in Brazil. <br />
              It works with a feed (like facebook). Features of vacation schedule and material CRUD. 
              All wp based on ACF PRO. It also have a LDAP integration and a calendar feature.
          </p>
          <p class="project-card__stack">Used stack:</p>
          <ul class="tags">
            <li>html5</li>
            <li>SASS</li>
            <li>JavaScript</li>
            <li>Gulp</li>
            <li>Wordpress</li>
          </ul>
          <div class="links">
            <div class="link">
                <a href="http://almap.santodev.com/" class="project-card__link">Almap - DEV environment</a>
                <span class="tip">(User: bigbear241/Pass: 789789)</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row project-card" data-portfolio-tag="WordPress">
        <div class="col-md-6 col-lg-5 project-card__img">
          <img class="" src="assets/img/vestibular-1.jpg" alt="project-img">
        </div>
        <div class="col-md-6 col-lg-7 project-card__info">
          <h3 class="project-card__title">Vestibular.com.br</h3>
          <p class="project-card__description">
              Vestibular is a WP theme for a subscription course online.
              Created with Woocommerce, Gateway payment vindi/Paypal and user subscriptions. Scaled to <a href="http://www.concurseria.com.br">Concurseria</a>.              
          </p>
          <p class="project-card__stack">Used stack:</p>
          <ul class="tags">
            <li>html5</li>
            <li>SASS</li>
            <li>JavaScript</li>
            <li>Gulp</li>
            <li>Wordpress</li>
            <li>Woocommerce</li>
            <li>Woocommerce Subscription</li>
          </ul>
          <div class="links">
            <div class="link">
                <a href="http://www.vestibular.com.br" class="project-card__link">www.vestibular.com.br</a><br/>
            </div>
            <div class="link">
                <a href="http://www.concurseria.com.br" class="project-card__link">www.concurseria.com.br</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Portfolio-->

  <!--Testimonials-->
  <!-- <div id="testimonials" class="section">
    <div class="background slider-carousel" style="background-image: url(assets/img/img_bg_main.jpg);">
      <div class="container">
        <div id="carouselTestimonials" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselTestimonials" data-slide-to="0" class="active"></li>
            <li data-target="#carouselTestimonials" data-slide-to="1"></li>
            <li data-target="#carouselTestimonials" data-slide-to="2"></li>
            <li data-target="#carouselTestimonials" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                  <p class="slider-carousel__title">Antonio Anderson</p>
                  <p class="slider-carousel__caption">Project: Landin page for travel company</p>
                  <hr>
                  <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                    sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                    it match. By or blushes between besides offices noisier as. Sending do brought winding
                    compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                    cease too the decay. </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                  <p class="slider-carousel__title">Antonio Anderson</p>
                  <p class="slider-carousel__caption">Project: Landin page for travel company</p>
                  <hr>
                  <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                    sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                    it match. By or blushes between besides offices noisier as. Sending do brought winding
                    compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                    cease too the decay. </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                  <p class="slider-carousel__title">Antonio Anderson</p>
                  <p class="slider-carousel__caption">Project: Landin page for travel company</p>
                  <hr>
                  <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                    sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                    it match. By or blushes between besides offices noisier as. Sending do brought winding
                    compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                    cease too the decay. </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                  <p class="slider-carousel__title">Antonio Anderson</p>
                  <p class="slider-carousel__caption">Project: Landin page for travel company</p>
                  <hr>
                  <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                    sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                    it match. By or blushes between besides offices noisier as. Sending do brought winding
                    compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                    cease too the decay. </p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#testimonials" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#testimonials" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <div class="slider-carousel__circle">
            <p><i class="fa fa-quote-right" aria-hidden="true"></i></p>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!--Testimonials-->

  <!--Blog-->
  <!-- <section id="blog" class="container section">
    <div class="row">
      <div class="col-md-12">
        <h2 id="blog_header" class="section__title">Latest Posts_</h2>
      </div>
    </div>

    <div class="row post-cards">
      <div class="col-md-4">
        <a href="blog.html">
          <div class="post-cards__card">
            <div class="post-cards__img">
              <img src="assets/img/img_blog_1.png" alt="blog_img">
            </div>
            <div class="post-cards__info">
              <p class="post-cards__date">October 22, 2017</p>
              <h3 class="post-cards_title">How to use css-preprocessor</h3>
              <p class="post-cards_description">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempr incididunt...
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="blog.html">
          <div class="post-cards__card">
            <div class="post-cards__img">
              <img src="assets/img/img_blog_2.png" alt="blog_img">
            </div>
            <div class="post-cards__info">
              <p class="post-cards__date">October 22, 2017</p>
              <h3 class="post-cards_title">How I organize my work with code</h3>
              <p class="post-cards_description">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempr incididu...
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="blog.html">
          <div class="post-cards__card">
            <div class="post-cards__img">
              <img src="assets/img/img_blog_3.png" alt="blog_img">
            </div>
            <div class="post-cards__info">
              <p class="post-cards__date">October 22, 2017</p>
              <h3 class="post-cards_title">SVG sprites vs Icon Font</h3>
              <p class="post-cards_description">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempr incididu...
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section> -->
  <!--Blog-->

  <!--Contact-->
  <div class="background" style="background-image: url(assets/img/img_bg_main.jpg)">
    <div id="contact" class="container section">
      <div class="row">
        <div class="col-md-12">
          <p id="contacts_header" class="section__title">Get in touch_</p>
        </div>
      </div>
      <div class="row contacts">
        <div class="col-md-5 col-lg-4">
          <div class="contacts__list">
            <dl class="contact-list">
              <dt>Phone:</dt>
              <dd><a href="tel:5551998087053">55 (51) 9 9808 7053</a></dd>
              <dt>Skype:</dt>
              <dd><a href="skype:leonardo-3009">leonardo-3009</a></dd>
              <dt>Email:</dt>
              <dd><a href="mailto:leonardo@santopixel.com.br">leonardo@santopixel.com.br</a></dd>
            </dl>
          </div>
          <div class="contacts__social">
            <ul>
              <li><a href="https://www.facebook.com/leonardo.souzadasilva">Facebook</a></li>
              <li><a href="https://www.linkedin.com/in/leonardosouzadasilva">Linkedin</a></li>
              <li><a href="https://github.com/leonardoss">GitHub</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-7 col-lg-5">
          <div class="contacts__form">
            <p class="contacts__form-title">Or just write me a letter here_</p>
            <form class="js-form">
              <div class="form-group">
                <input class="form-field js-field-name" type="text" placeholder="Your name" required>
                <span class="form-validation"></span>
                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
              </div>
              <div class="form-group">
                <input class="form-field js-field-email" type="email" placeholder="Your e-mail" required>
                <span class="form-validation"></span>
                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
              </div>
              <div class="form-group">
                <textarea class="form-field js-field-message" placeholder="Type the message here" required></textarea>
                <span class="form-validation"></span>
                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
              </div>
              <button class="site-btn site-btn--form" type="submit" value="Send">Send</button>
            </form>
          </div>
          <!-- <div class="footer">
            <p>© 2016 Ivan Susanin. All Rights Reserved</p>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!--Contact-->

  <!-- Portfolio Modal -->
  <!-- <div class="modal fade portfolio-modal" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body col-md-11 col-lg-9 ml-auto mr-auto">
          <p class="portfolio-modal__title">Mobile and desktop app for London hostel store</p>
          <img class="portfolio-modal__img" src="assets/img/img_project_1_mono.png" alt="modal_img">
          <p class="portfolio-modal__description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utlabore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum. Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremque
            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
            dicta sunt explicabo.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
            conse.
          </p>
          <div class="portfolio-modal__link">
            <a href="">www.superapp.com</a>
          </div>
          <div class="portfolio-modal__stack">
            <p class="portfolio-modal__stack-title">Using stack:</p>
            <ul class="tags">
              <li>html5</li>
              <li>css3</li>
              <li>JavaScript</li>
              <li>bower</li>
              <li>grunt</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Portfolio Modal -->

  <script src="assets/js/jquery-2.2.4.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/menu.js"></script>
  <script src="assets/js/jquery.waypoints.js"></script>
  <script src="assets/js/progress-list.js"></script>
  <script src="assets/js/section.js"></script>
  <script src="assets/js/portfolio-filter.js"></script>
  <script src="assets/js/slider-carousel.js"></script>
  <script src="assets/js/mobile-menu.js"></script>
  <script src="assets/js/contacts.js"></script>
  <script src="assets/js/mbclicker.min.js"></script>
  <script src="assets/js/site-btn.js"></script>
  <script src="assets/js/style-switcher.js"></script>
</body>

</html>