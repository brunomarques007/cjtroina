@extends('layouts.frontend')


@section('conteudo')
    
    @include('components.navbar-frontend')

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Gestão dos processos que envolvem a obra em busca da melhoria contínua.</h1>
                <hr>
                <p id="desc">Somos capazes de entender as suas necessidades para apresentamos soluções adequadas e assim, realizar nossas obras com excelência.</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Descubra mais</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading wow bounceIn">Nós temos o que você precisa!</h2>
                    <hr class="light">
                    <p class="text-faded">Somos uma empresa especializada em gestão de processos, atuamos nas áreas de arquitetura, gerenciamento, engenharia, consultoria e construção, e contamos com uma gama completa de serviços integrados que planejam e efetivam todas as fases de um projeto, da concepção à entrega. Com ética e transparência a nossa empresa conquista clientes e constrói relacionamentos duradouros.</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Iniciar!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">A seu serviço</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-university text-primary sr-icons"></i>
                        <h3>Arquitetura</h3>
                        <p class="text-muted">Soluções de design inteligente para ambientes internos.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-building-o text-primary sr-icons"></i>
                        <h3>Reformas</h3>
                        <p class="text-muted">Reformas com rapidez e capricho, como deve ser sempre!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-street-view text-primary sr-icons"></i>
                        <h3>Urbanismo</h3>
                        <p class="text-muted">Soluções de design inteligente para ambientes Externos.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-map-o text-primary sr-icons"></i>
                        <h3>Construção</h3>
                        <p class="text-muted">Planejamento e cumprimento de prazo, este é o nosso lema!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark wow fadeIn">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Portfólio</h2>
                <p>Conheça alguns de nossos trabalhos...</p>
            </div>
        </div>
    </aside>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6 wow zoomIn">
                    <a href="images/portfolio/01.jpg" class="portfolio-box">
                        <img src="images/portfolio/01.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    PROJAC
                                </div>
                                <div class="project-name">
                                    Casa do Big Brother Brasil 3
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow zoomIn">
                    <a href="images/portfolio/02.jpg" class="portfolio-box">
                        <img src="images/portfolio/02.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Cidade do samba
                                </div>
                                <div class="project-name">
                                    Gerenciamento das construções dos galpões
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow zoomIn">
                    <a href="images/portfolio/03.jpg" class="portfolio-box">
                        <img src="images/portfolio/03.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Acadêmicos da Rocinha
                                </div>
                                <div class="project-name">
                                    Construção, reforma e pintura
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow zoomIn">
                    <a href="images/portfolio/04.jpg" class="portfolio-box">
                        <img src="images/portfolio/04.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    OUTER Shoes
                                </div>
                                <div class="project-name">
                                    Shopping Leblon
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow zoomIn">
                    <a href="images/portfolio/05.jpg" class="portfolio-box">
                        <img src="images/portfolio/05.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Loteria da Caixa
                                </div>
                                <div class="project-name">
                                    Bangu Shopping
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow zoomIn">
                    <a href="images/portfolio/06.jpg" class="portfolio-box">
                        <img src="images/portfolio/06.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    ATRIUM
                                </div>
                                <div class="project-name">
                                    Bangu Shopping 
                                </div>
                            </div>
                        </div>
                    </a>
                </div><!-- Original -->

                <div class="col-lg-4 col-sm-6 wow zoomIn">
                    <a href="images/portfolio/07.jpg" class="portfolio-box">
                        <img src="images/portfolio/07.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    CHILLI BEANS
                                </div>
                                <div class="project-name">
                                    Shopping Rio Sul
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow zoomIn">
                    <a href="images/portfolio/08.jpg" class="portfolio-box">
                        <img src="images/portfolio/08.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Metrô Rio
                                </div>
                                <div class="project-name">
                                    Acessibilidade
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow zoomIn">
                    <a href="images/portfolio/09.jpg" class="portfolio-box">
                        <img src="images/portfolio/09.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Redes IBEU
                                </div>
                                <div class="project-name">
                                    Unidade Tijuca 1 (Maria Amália)
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow zoomIn">
                    <a href="images/portfolio/10.jpg" class="portfolio-box">
                        <img src="images/portfolio/10.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Base da Baker
                                </div>
                                <div class="project-name">
                                    Gerenciamento e fiscalização da obra
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow zoomIn">
                    <a href="images/portfolio/11.jpg" class="portfolio-box">
                        <img src="images/portfolio/11.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Base da Halliburton
                                </div>
                                <div class="project-name">
                                    Gerenciamento e fiscalização da obra
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow zoomIn">
                    <a href="images/portfolio/12.jpg" class="portfolio-box">
                        <img src="images/portfolio/12.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Restaurante Stambul
                                </div>
                                <div class="project-name">
                                    Caxias Shopping
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Entre em contato!</h2>
                    <hr class="primary">
                    <p>Por que não falar conosco e pedir nossa orientação? Entraremos em contato contigo o mais breve possível!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <ul>
                        <li><a href="tel:+552135989779">(21) 3598-9779</a></li>
                        <li><a href="tel:+5521986100017">(21) 98610-0017</a></li>
                        <li><a href="tel:+5521987523393">(21) 98752-3393</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:cj@cjtroina.com.br">cj@cjtroina.com.br</a></p>
                    <h4>Endereço:</h4>
                    <p>Estrada do Galeão, 1271, sala 304.</p>
                </div>
            </div>
        </div>
    </section>

    @section('js')
    @parent
        <script>
            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: true,
                live: true
            });
            wow.init();
        </script>
    @stop
@stop