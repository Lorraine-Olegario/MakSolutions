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
                <div class="carousel-item active"><img src="/img/banners/banner_01.jpeg" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src="/img/banners/etiquetadoras.png" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src="/img/banners/banner_01.jpeg" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src="/img/banners/banner_01.jpeg" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src="/img/banners/banner_01.jpeg" class="d-block w-100" alt="..."></div>
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
            <div class="row justify-content-center">
                <h2 class="mt-5 mb-5 text-center">NOSSAS SOLUÇÕES PERSONALIZADAS</h2>
                <div class="service col-xl-3 col-md-6 col-sm-12 col-lg-3 col-xxl-3 mb-4 mx-auto">
                    <a href="./locacao-impressoras-multifuncionais">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img
                                    src="/img/service-image-3.png"
                                    alt=""
                                    height="90"
                                    width="90"
                                />
                            </figure>
                            <div class="service-box_body">
                                <h2 class="title text-muted"><strong>Outsourcing de impressoras e multifuncionais</strong></h2>
                                <div class="service-box_txt">Venda, locação, assistência técnica e outsourcing de equipamentos multimarcas.</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="service col-xl-3 col-md-6 col-sm-12 col-lg-3 col-xxl-3 mb-4 mx-auto">
                    <a href="/locacao-notebooks-e-desktops">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img
                                    src="/img/service-image-1.png"
                                    alt=""
                                    height="90"
                                    width="90"
                                />
                            </figure>
                            <div class="service-box_body">
                                <h2 class="title text-muted"><strong>Outsourcing de notebooks e desktops</strong></h2>
                                <div class="service-box_txt">Configurações personalizadas, instalação completa, equipamentos atualizados e suporte técnico, tudo adaptado às suas necessidades.</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="service col-xl-3 col-md-6 col-sm-12 col-lg-3 col-xxl-3 mb-4 mx-auto">
                    <a href="/locacao-etiquetadoras">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img
                                    src="/img/service-image-2.png"
                                    alt=""
                                    height="90"
                                    width="90"
                                />
                            </figure>
                            <div class="service-box_body">
                                <h2 class="title text-muted"><strong>Locação de Etiquetadoras</strong></h2>
                                <div class="service-box_txt">Simplifique sua operação com nosso serviço de locação de impressoras e etiquetadoras, que oferece personalização, suporte técnico, e redução de custos</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="service col-xl-3 col-md-6 col-sm-12 col-lg-3 col-xxl-3 mb-4 mx-auto">
                    <a href="#">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img
                                    src="/img/service-image-4.png"
                                    alt=""
                                    height="90"
                                    width="90"
                                />
                            </figure>
                            <div class="service-box_body">
                                <h2 class="title text-muted"><strong>Gerenciamento Eletronico Documentos</strong></h2>
                                <div class="service-box_txt">Soluções criativas e personalizadas para gestão de processos e documentos.</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="locacao">
        <div class="container mt-5 mb-5">
            <div class="row">
                <h2 class="col-12 text-center">EQUIPAMENTOS PARA <strong class="locacao-text-highlight">LOCAÇÃO</strong></h2>
                <div class="col-12 d-flex justify-content-center mt-5">
                    <ul class="nav nav-pills align-items-center nav-pills-locacao">
                        <li class="nav-item">
                            <h5>
                                <a class="nav-link" href="#div1" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="div1">Locação de Impressoras</a>
                                <div class="active-indicator" id="indicator1"></div>
                            </h5>
                        </li>
                        <li class="nav-item">
                            <h5>
                                <a class="nav-link" href="#div2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="div2">Locação de Multifuncionais</a>
                                <div class="active-indicator" id="indicator2"></div>
                            </h5>
                        </li>
                        <li class="nav-item">
                            <h5>
                                <a class="nav-link" href="#div3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="div3">Locação de Copiadoras</a>
                                <div class="active-indicator" id="indicator3"></div>
                            </h5>
                        </li>
                    </ul>
                </div>
                <div class="col-12 mt-4 mb-5">
                    <div id="accordion">
                        <div id="div1" class="collapse show mt-3" data-parent="#accordion">
                            <div class="collapse-content row">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <img class="rounded" src="/img/impressoras/img01.png" alt="Equipamento Impressoras para Locação" width="280">
                                </div>
                                <div class="col-md-8 d-flex align-items-center">
                                    <p>A locação de impressoras é uma solução prática e econômica para empresas de todos os portes,
                                        órgãos públicos e até mesmo para pessoas físicas. Com essa opção, é possível ter acesso
                                        a equipamentos de qualidade, sem a necessidade de um grande investimento inicial.
                                        Além disso, a locação geralmente inclui serviços de suporte técnico e manutenção, garantindo
                                        o bom funcionamento dos equipamentos. Essa alternativa permite que as organizações foquem em
                                        suas atividades principais, enquanto deixam a gestão de impressão nas mãos de especialistas,
                                        otimizando recursos e aumentando a eficiência operacional.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="div2" class="collapse mt-3" data-parent="#accordion">
                            <div class="collapse-content row">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <img class="rounded" src="/img/impressoras/img02.png" alt="Locação de Multifuncionais" width="280">
                                </div>
                                <div class="col-md-8 d-flex align-items-center">
                                    <p>A locação de copiadoras oferece uma solução conveniente e econômica para empresas de todos os tamanhos,
                                        órgãos governamentais e indivíduos. Com essa opção, é possível ter acesso a equipamentos de alta
                                        qualidade sem um grande investimento inicial. Além disso, a locação geralmente inclui suporte técnico
                                        e manutenção, permitindo que as organizações e indivíduos foquem em suas atividades principais,
                                        enquanto deixam a gestão de cópias nas mãos de especialistas, aumentando a eficiência operacional.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="div3" class="collapse mt-3" data-parent="#accordion">
                            <div class="collapse-content row">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <img class="rounded" src="/img/impressoras/img03.jpg" alt="Locação de Copiadoras" width="220">
                                </div>
                                <div class="col-md-8 d-flex align-items-center">
                                    <p>A locação de multifuncionais é uma solução versátil e econômica para empresas de todos os portes,
                                        órgãos governamentais e indivíduos. Com essa opção, é possível ter acesso a equipamentos multifuncionais
                                        de alta qualidade sem um grande investimento inicial. Além disso, a locação geralmente inclui suporte
                                        técnico e manutenção, permitindo que as organizações e indivíduos foquem em suas atividades principais,
                                        enquanto deixam a gestão dos equipamentos nas mãos de especialistas, aumentando a eficiência operacional.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <h2 class="mt-5 mb-5 text-center">EQUIPAMENTOS PARA <strong class="product-info-menu-locacao-text-highlight">LOCAÇÃO</strong></h2>--}}

{{--                <div class="container text-muted">--}}
{{--                    <ul class="product-info-menu-locacao-marcadores">--}}
{{--                        <li class="product-info-menu-locacao-marcadores product-info-menu-locacao">--}}
{{--                            <a class="product-info-menu-locacao-name" href="div1">Locação de Impressoras</a>--}}
{{--                        </li>--}}
{{--                        <li class="product-info-menu-locacao-marcadores product-info-menu-locacao">--}}
{{--                            <a class="product-info-menu-locacao-name" href="div2">Locação de Multifuncionais</a>--}}
{{--                        </li>--}}
{{--                        <li class="product-info-menu-locacao-marcadores product-info-menu-locacao">--}}
{{--                            <a class="product-info-menu-locacao-name" href="div3">Locação de Copiadoras</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                    <div class="product-info mt-3 mb-5">--}}
{{--                        <div class="product-info-menu-locacao-group" id="div1">--}}
{{--                            <div class="product-info-menu-locacao-1-line"></div>--}}

{{--                            <div class="col text-center">--}}
{{--                                <img--}}
{{--                                    class="product-info-menu-locacao-img rounded mx-auto d-block"--}}
{{--                                    src="/img/impressoras/img01.png"--}}
{{--                                    width="280"--}}
{{--                                    alt="Equipamento Impressoras para Locação"--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                            <div class="product-info-menu-locacao-desc">--}}
{{--                                <p>A locação de impressoras é uma solução prática e econômica para empresas de todos os portes,--}}
{{--                                    órgãos públicos e até mesmo para pessoas físicas. Com essa opção, é possível ter acesso--}}
{{--                                    a equipamentos de qualidade, sem a necessidade de um grande investimento inicial.--}}
{{--                                    Além disso, a locação geralmente inclui serviços de suporte técnico e manutenção, garantindo--}}
{{--                                    o bom funcionamento dos equipamentos. Essa alternativa permite que as organizações foquem em--}}
{{--                                    suas atividades principais, enquanto deixam a gestão de impressão nas mãos de especialistas,--}}
{{--                                    otimizando recursos e aumentando a eficiência operacional.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="product-info-menu-locacao-group" id="div2">--}}
{{--                            <div class="product-info-menu-locacao-2-line"></div>--}}
{{--                            <div class="col text-center">--}}
{{--                                <img--}}
{{--                                    class="product-info-menu-locacao-img rounded mx-auto d-block"--}}
{{--                                    src="/img/impressoras/img02.png"--}}
{{--                                    width="280"--}}
{{--                                    alt="Locação de Multifuncionais"--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                            <div class="product-info-menu-locacao-desc">--}}
{{--                                <p>A locação de copiadoras oferece uma solução conveniente e econômica para empresas de todos os tamanhos,--}}
{{--                                    órgãos governamentais e indivíduos. Com essa opção, é possível ter acesso a equipamentos de alta--}}
{{--                                    qualidade sem um grande investimento inicial. Além disso, a locação geralmente inclui suporte técnico--}}
{{--                                    e manutenção, permitindo que as organizações e indivíduos foquem em suas atividades principais,--}}
{{--                                    enquanto deixam a gestão de cópias nas mãos de especialistas, aumentando a eficiência operacional.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="product-info-menu-locacao-group" id="div3">--}}
{{--                            <div class="product-info-menu-locacao-3-line"></div>--}}
{{--                            <img--}}
{{--                                class="product-info-menu-locacao-img rounded mx-auto d-block"--}}
{{--                                src="/img/impressoras/img03.jpg"--}}
{{--                                width="220"--}}
{{--                                alt="Locação de Copiadoras"--}}
{{--                            >--}}
{{--                            <div class="product-info-menu-locacao-desc">--}}
{{--                                <p>A locação de multifuncionais é uma solução versátil e econômica para empresas de todos os portes,--}}
{{--                                    órgãos governamentais e indivíduos. Com essa opção, é possível ter acesso a equipamentos multifuncionais--}}
{{--                                    de alta qualidade sem um grande investimento inicial. Além disso, a locação geralmente inclui suporte--}}
{{--                                    técnico e manutenção, permitindo que as organizações e indivíduos foquem em suas atividades principais,--}}
{{--                                    enquanto deixam a gestão dos equipamentos nas mãos de especialistas, aumentando a eficiência operacional.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
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



    <section class="print_control">
        <div class="wpb_row vc_row-fluid full-row">
            <div class="container">
                <div class="row">
                    <div class="max-title max-title4">
                        <h2>Tenha o controle total de tudo que a <strong>sua empresa imprime </strong></h2>
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-6 col-lg-3 col-xxl-3 mb-4 mx-auto">
                        <article class="icon-box20">
                            <h4>GESTÃO DE PROCESSOS E DOCUMENTOS</h4>
                            <p>Soluções criativas e personalizadas para gestão de processos e documentos.</p>
                        </article>
                        <hr class="vertical-space2">
                    </div>

                    <div class="col-xl-3 col-md-3 col-sm-6 col-lg-3 col-xxl-3 mb-4 mx-auto">
                        <article class="icon-box20">
                            <h4>ASSISTÊNCIA TÉCNICA AUTORIZADA</h4>
                            <p>Atendimento nacional para equipamentos de pequeno, médio e grande porte.</p>
                        </article>
                        <hr class="vertical-space2">
                    </div>

                    <div class="col-xl-3 col-md-3 col-sm-6 col-lg-3 col-xxl-3 mb-4 mx-auto">
                        <article class="icon-box20">
                            <i class="icon-focus" style=" color:#e30613;"></i>
                            <h4>CAPTURA INTELIGENTE</h4>
                            <p>Digitalização de documentos aliada ao Sistema ECM.</p>
                        </article>
                        <hr class="vertical-space2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-3 col-sm-6 col-lg-3 col-xxl-3 mb-4 mx-auto">
                        <article class="icon-box20">
                            <h4>SUPRIMENTOS E PEÇAS ORIGINAIS</h4>
                            <p>Estoque próprio de peças e insumos originais com garantia de atendimento</p>
                        </article>
                        <hr class="vertical-space2">
                    </div>

                    <div class="col-xl-3 col-md-3 col-sm-6 col-lg-3 col-xxl-3 mb-4 mx-auto">
                        <article class="icon-box20">
                            <h4>GESTÃO DE IMPRESSÃO</h4>
                            <p>Venda, locação, assistência técnica e outsourcing de equipamentos multimarcas.</p>
                        </article>
                        <hr class="vertical-space2">
                    </div>

                    <div class="col-xl-3 col-md-3 col-sm-6 col-lg-3 col-xxl-3 mb-4 mx-auto">
                        <article class="icon-box20">
                            <i class="icon-target" style=" color:#e30613;"></i>
                            <h4>MARKETING MULTICANAL</h4>
                            <p>Comunicação integrada e campanhas personalizadas Cross Media.</p>
                        </article>
                        <hr class="vertical-space2">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="news">
        <div class="content">
                <div class="container">
                        <h4 class="title-blog text-center">BLOG</h4>
                        <h2 class="mb-5 text-center">Últimas Notícias</h2>
                    <div class="row row-cols-1 row-cols-md-2">

                        <div class="new col-xl-3 col-md-6 col-sm-12 col-lg-3 col-xxl-3 mb-4 mx-auto">
                            <div class="card-news card">
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

                        <div class="new col-xl-3 col-md-6 col-sm-12 col-lg-3 col-xxl-3 mb-4 mx-auto">
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

                        <div class="new col-xl-3 col-md-6 col-sm-12 col-lg-3 col-xxl-3 mb-4 mx-auto d-none d-md-block">
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

                        <div class="new col-xl-3 col-md-6 col-sm-12 col-lg-3 col-xxl-3 mb-4 mx-auto d-none d-md-block">
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
    </section>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.show').each(function() {
                let targetId = $(this).attr('id'); // Obtém o ID da seção expandida
                $('#indicator' + targetId.substr(3)).show(); // Mostra o indicador correspondente
            });
        });

        // Script para controlar a exibição do indicador ao abrir uma seção
        $('#accordion').on('show.bs.collapse', function (e) {
            let targetId = $(e.target).attr('id'); // Obtém o ID do elemento que está sendo expandido
            $('#indicator1, #indicator2, #indicator3').hide(); // Oculta todos os indicadores
            $('#indicator' + targetId.substr(3)).show(); // Mostra o indicador correspondente ao elemento expandido
        });
    </script>

{{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}
@stop
