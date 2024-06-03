@extends('/layouts/main')
@section('title', 'Mak Solutions - Outsourcing de impressão, locação de impressoras| Outsourcing de notebooks e desktops | BPO, ECM, MPS')
@section('css')
    <link rel="stylesheet" href="/css/index.css">
@stop


@section('content')

    <div class="flex-fill">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-target="#carouselExampleIndicators" data-slide-to="0" class="active" aria-current="Slide 0"></button>
                <button type="button" data-target="#carouselExampleIndicators" data-slide-to="1" aria-label="Slide 1"></button>
                <button type="button" data-target="#carouselExampleIndicators" data-slide-to="2" aria-label="Slide 2"></button>
                <button type="button" data-target="#carouselExampleIndicators" data-slide-to="3" aria-label="Slide 3"></button>
                <button type="button" data-target="#carouselExampleIndicators" data-slide-to="4" aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active"><img src="/storage/banners/banner_01.jpeg" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src="/storage/banners/etiquetadoras.png" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src="/storage/banners/banner_01.jpeg" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src="/storage/banners/banner_01.jpeg" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src="/storage/banners/banner_01.jpeg" class="d-block w-100" alt="..."></div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    {{--SERVICES--}}
    <section class="services">
        <div class="container mt-5 mb-5">
            <div class="row">
                <h2 class="mt-5 mb-5 text-center">NOSSAS SOLUÇÕES PERSONALIZADAS</h2>
                <div class="service service-1 col-xs-12 col-sm-6 col-md-3 mb-4">
                    <a href="./locacao-impressoras-multifuncionais">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img
                                    src="/storage/service-image-3.png"
                                    alt=""
                                    height="90"
                                    width="90"
                                />
                            </figure>
                            <div class="service-box_body">
                                <h2 class="title text-muted"><strong>Outsourcing de impressoras e multifuncionais</strong></h2>
                                <div class="service-box_txt">Praesent vestibulum aenean non ummy hendrerit mauris. Hasellus porta. Fusce suscipit varius mi.</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="service service-2 col-xs-12 col-sm-6 col-md-3 mb-4">
                    <a href="/locacao-notebooks-e-desktops">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img
                                    src="/storage/service-image-1.png"
                                    alt=""
                                    height="90"
                                    width="90"
                                />
                            </figure>
                            <div class="service-box_body">
                                <h2 class="title text-muted"><strong>Outsourcing de notebooks e desktops</strong></h2>
                                <div class="service-box_txt">Praesent vestibulum aenean non ummy hendrerit mauris. Hasellus porta. Fusce suscipit varius mi.</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="service service-3 col-xs-12 col-sm-6 col-md-3 mb-4">
                    <a href="/locacao-etiquetadoras">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img
                                    src="/storage/service-image-ty-2.png"
                                    alt=""
                                    height="90"
                                    width="90"
                                />
                            </figure>
                            <div class="service-box_body">
                                <h2 class="title text-muted"><strong>Locação de Etiquetadoras</strong></h2>
                                <div class="service-box_txt">Praesent vestibulum aenean non ummy hendrerit mauris. Hasellus porta. Fusce suscipit varius mi.</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="service service-4 col-xs-12 col-sm-6 col-md-3 mb-4">
                    <a href="#">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img
                                    src="/storage/service-image-ty-1.png"
                                    alt=""
                                    height="90"
                                    width="90"
                                />
                            </figure>
                            <div class="service-box_body">
                                <h2 class="title text-muted"><strong>Gerenciamento Eletronico Documentos</strong></h2>
                                <div class="service-box_txt">Praesent vestibulum aenean non ummy hendrerit mauris. Hasellus porta. Fusce suscipit varius mi.</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>




    <section class="information">
        <div class="container-fluid p-0">
            <div class="parallax position-relative">
                <div class="overlay"></div> <!-- Adiciona uma div para o fundo azul -->
                <div class="container content text-white float-right">
                    <div class="row">
                        <h1>Contate Nossas Atendentes!</h1>
                        <p>Descubra nossas soluções de locação de equipamentos! </p>

                        <p class="custom-paragraph">A nível organizacional, o consenso sobre a necessidade de qualificação
                            assume uma posição crucial no estabelecimento do processo de comunicação como um todo.
                        </p>

                        <p>Tel: (99) 99999-9999</p>

                    </div>
                    <button class="btn btn-quote">Solicite Orçamento</button>
                </div>
            </div>
        </div>
    </section>



{{--    <section class="print_control">--}}
{{--        <div class="wpb_row vc_row-fluid full-row">--}}
{{--            <div class="container">--}}
{{--                <div class="wpb_column vc_column_container vc_col-sm-12">--}}
{{--                    <div class="vc_column-inner ">--}}
{{--                        <div class="wpb_wrapper">--}}
{{--                            <div class="max-title max-title4">--}}
{{--                                <h2>Tenha o controle total de tudo que a <strong>sua empresa imprime </strong></h2>--}}
{{--                            </div>--}}
{{--                            <div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
{{--                                <div class="wpb_column vc_column_container vc_col-sm-4">--}}
{{--                                    <div class="vc_column-inner ">--}}
{{--                                        <div class="wpb_wrapper">--}}
{{--                                            <article class="icon-box20">--}}
{{--                                                <h4>GESTÃO DE PROCESSOS E DOCUMENTOS</h4>--}}
{{--                                                <p>Soluções criativas e personalizadas para gestão de processos e documentos.</p>--}}
{{--                                            </article>--}}
{{--                                            <hr class="vertical-space2">--}}
{{--                                            <article class="icon-box20">--}}
{{--                                                <h4>ASSISTÊNCIA TÉCNICA AUTORIZADA</h4>--}}
{{--                                                <p>Atendimento nacional para equipamentos de pequeno, médio e grande porte.</p>--}}
{{--                                            </article>--}}
{{--                                            <hr class="vertical-space2">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="wpb_column vc_column_container vc_col-sm-4">--}}
{{--                                    <div class="vc_column-inner ">--}}
{{--                                        <div class="wpb_wrapper">--}}
{{--                                            <article class="icon-box20">--}}
{{--                                                <i class="icon-focus" style=" color:#e30613;"></i>--}}
{{--                                                <h4>CAPTURA INTELIGENTE</h4>--}}
{{--                                                <p>Digitalização de documentos aliada ao Sistema ECM.</p>--}}
{{--                                            </article>--}}
{{--                                            <hr class="vertical-space2">--}}
{{--                                            <article class="icon-box20">--}}
{{--                                                <h4>SUPRIMENTOS E PEÇAS ORIGINAIS</h4>--}}
{{--                                                <p>Estoque próprio de peças e insumos originais com garantia de atendimento</p>--}}
{{--                                            </article>--}}
{{--                                            <hr class="vertical-space2">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="wpb_column vc_column_container vc_col-sm-4">--}}
{{--                                    <div class="vc_column-inner ">--}}
{{--                                        <div class="wpb_wrapper">--}}
{{--                                            <article class="icon-box20">--}}
{{--                                                <h4>GESTÃO DE IMPRESSÃO</h4>--}}
{{--                                                <p>Venda, locação, assistência técnica e outsourcing de equipamentos multimarcas.</p>--}}
{{--                                            </article>--}}
{{--                                            <hr class="vertical-space2">--}}
{{--                                            <article class="icon-box20">--}}
{{--                                                <i class="icon-target" style=" color:#e30613;"></i>--}}
{{--                                                <h4>MARKETING MULTICANAL</h4>--}}
{{--                                                <p>Comunicação integrada e campanhas personalizadas Cross Media.</p>--}}
{{--                                            </article>--}}
{{--                                            <hr class="vertical-space2">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}



    <section class="news">
        <div class="container-fostrap">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <h4 class="title-blog text-center">BLOG</h4>
                        <h2 class="mb-5 text-center">Últimas Notícias</h2>

                        <div class="new col-xs-12 col-sm-6 col-md-3 mb-4">
                            <div class="card-news card float-left">
                                <a class="img-card">
                                    <img src="https://i0.wp.com/www.techbr.com.br/wp-content/uploads/2016/09/hp-inc-original.jpg?ssl=1" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-news-title">HP compra divisão de impressoras da Samsung por US$ 1,05 bilhão</h4>
                                    <p class="card-news-text">
                                        A HP fechou um acordo para comprar a divisão de impressoras da Samsung Electronics
                                        por US$ 1,05 bilhão. O acordo busca auxiliar a empresa do Vale do Silício a crescer
                                        no setor de dispositivos com grande volume de negócios, que lidam com a impressão
                                        e as cópias para grupos de funcionários de escritórios.
                                    </p>
                                </div>
                                <div class="card-link-news">
                                    <a href="#">
                                        LEIA MAIS &#11166;
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="new col-xs-12 col-sm-6 col-md-3 mb-4">
                            <div class="card-news card">
                                <a class="img-card">
                                    <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-news-title">HP compra divisão de impressoras da Samsung para reinventar o mercado</h4>
                                    <p class="card-news-text">
                                        Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                    </p>
                                </div>
                                <div class="card-link-news">
                                    <a href="#">
                                        LEIA MAIS &#11166;
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="new col-xs-12 col-sm-6 col-md-3 mb-4">
                            <div class="card-news card">
                                <a class="img-card">
                                    <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" />
                                </a>

                                <div class="card-content">
                                    <h4 class="card-news-title">HP compra divisão de impressoras da Samsung para reinventar o mercado</h4>
                                    <p class="card-news-text">
                                        Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                    </p>
                                </div>
                                <div class="card-link-news">
                                    <a href="#">
                                        LEIA MAIS &#11166;
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="new col-xs-12 col-sm-6 col-md-3 mb-4">
                            <div class="card-news card">
                                <a class="img-card">
                                    <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-news-title">HP compra divisão de impressoras da Samsung para reinventar o mercado</h4>
                                    <p class="card-news-text">
                                        Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                    </p>
                                </div>
                                <div class="card-link-news">
                                    <a href="#">
                                        LEIA MAIS &#11166;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
