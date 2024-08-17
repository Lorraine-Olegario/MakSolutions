@php
    use Carbon\Carbon;
    Carbon::setLocale('pt_BR');
@endphp

@extends('/layouts/main')
@section('title', 'Mak Solutions - Outsourcing de impressão, locação de impressoras| Outsourcing de notebooks e desktops | BPO, ECM, MPS')
@section('css')
    <link rel="stylesheet" href="<?=env('APP_URL')?>/css/index.css">
@stop


@section('content')

    <div class="flex-fill">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-indicators">
                @php
                    $item = 0;
                @endphp
                @foreach ($banners as $banner)
                    <button type="button" data-target="#carouselExampleIndicators" data-slide-to="{{ $item }}" class="btn-slide-carrousel active" aria-labelledby="Slides Serviços" aria-current="Slide {{ $item }}"></button>
                    @php $item++; @endphp
                @endforeach
            </div>

            <div class="carousel-inner">
                @php
                    $first = true;
                @endphp

                @foreach ($banners as $banner)
                    @php
                        $imagePath = public_path('/storage/' . $banner->image); // Ajuste o caminho conforme a localização das imagens
                    @endphp
                    @if (file_exists($imagePath))
                        <div class="carousel-item {{ $first ? 'active' : '' }}">
                            <img src="<?=env('APP_URL')?>/storage/{{ $banner->image }}" class="d-block w-100" alt="{{ $banner->description }}">
                        </div>

                        @php $first = false; @endphp
                    @endif
                @endforeach
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
                <h2 class="mt-5 mb-5 text-center">NOSSAS <strong class="services-text-highlight">SOLUÇÕES</strong>
                    PERSONALIZADAS</h2>
                <div class="service col-xl-3 col-md-6 col-sm-12 col-lg-3 col-xxl-3 mb-4 mx-auto">
                    <a href="<?=env('APP_URL')?>/locacao-impressoras-multifuncionais">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img
                                    src="<?=env('APP_URL')?>/img/service-image-3.png"
                                    alt="Outsourcing de impressoras e multifuncionais"
                                    height="90"
                                    width="90"
                                />
                            </figure>
                            <div class="service-box_body">
                                <h2 class="title text-muted"><strong>Outsourcing de impressoras e
                                        multifuncionais</strong></h2>
                                <div class="service-box_txt">Venda, locação, assistência técnica e outsourcing de
                                    equipamentos multimarcas.
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="service col-xl-3 col-md-6 col-sm-12 col-lg-3 col-xxl-3 mb-4 mx-auto">
                    <a href="<?=env('APP_URL')?>/locacao-notebooks-e-desktops">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img
                                    src="<?=env('APP_URL')?>/img/service-image-1.png"
                                    alt="Outsourcing de notebooks e desktops"
                                    height="90"
                                    width="90"
                                />
                            </figure>
                            <div class="service-box_body">
                                <h2 class="title text-muted"><strong>Outsourcing de notebooks e desktops</strong></h2>
                                <div class="service-box_txt">Configurações personalizadas, instalação completa,
                                    equipamentos atualizados e suporte técnico, tudo adaptado às suas necessidades.
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="service col-xl-3 col-md-6 col-sm-12 col-lg-3 col-xxl-3 mb-4 mx-auto">
                    <a href="<?=env('APP_URL')?>/locacao-etiquetadoras">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img
                                    src="<?=env('APP_URL')?>/img/service-image-2.png"
                                    alt="Locação de Etiquetadoras"
                                    height="90"
                                    width="90"
                                />
                            </figure>
                            <div class="service-box_body">
                                <h2 class="title text-muted"><strong>Locação de Etiquetadoras</strong></h2>
                                <div class="service-box_txt">Simplifique sua operação com nosso serviço de locação de
                                    impressoras e etiquetadoras, que oferece personalização, suporte técnico, e redução
                                    de custos
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="service col-xl-3 col-md-6 col-sm-12 col-lg-3 col-xxl-3 mb-4 mx-auto">
                    <a href="<?=env('APP_URL')?>/gestao-documental">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img
                                    src="<?=env('APP_URL')?>/img/service-image-4.png"
                                    alt="Gerenciamento Eletrônico Documentos"
                                    height="90"
                                    width="90"
                                />
                            </figure>
                            <div class="service-box_body">
                                <h2 class="title text-muted"><strong>Gerenciamento Eletrônico Documentos</strong></h2>
                                <div class="service-box_txt">Soluções criativas e personalizadas para gestão de
                                    processos e documentos.
                                </div>
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
                <h2 class="col-12 text-center">EQUIPAMENTOS PARA <strong class="locacao-text-highlight">LOCAÇÃO</strong>
                </h2>
                <div class="col-12 d-flex justify-content-center mt-5">
                    <ul class="nav nav-pills align-items-center nav-pills-locacao">
                        <li class="nav-item">
                            <h5>
                                <a class="nav-link" href="#div1" data-toggle="collapse" role="button" aria-labelledby="Locação de Impressoras"
                                   aria-expanded="true" aria-controls="div1">Locação de Impressoras</a>
                                <div class="active-indicator" id="indicator1"></div>
                            </h5>
                        </li>
                        <li class="nav-item">
                            <h5>
                                <a class="nav-link" href="#div2" data-toggle="collapse" role="button" aria-labelledby="Locação de Multifuncionais"
                                   aria-expanded="false" aria-controls="div2">Locação de Multifuncionais</a>
                                <div class="active-indicator" id="indicator2"></div>
                            </h5>
                        </li>
                        <li class="nav-item">
                            <h5>
                                <a class="nav-link" href="#div3" data-toggle="collapse" role="button" aria-labelledby="Locação de Copiadoras"
                                   aria-expanded="false" aria-controls="div3">Locação de Copiadoras</a>
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
                                    <img class="rounded" src="<?=env('APP_URL')?>/img/impressoras/img01.png"
                                         alt="Equipamento Impressoras para Locação" width="280">
                                </div>
                                <div class="col-md-8 d-flex align-items-center">
                                    <p>A locação de impressoras é uma solução prática e econômica para empresas de todos
                                        os portes,
                                        órgãos públicos e até mesmo para pessoas físicas. Com essa opção, é possível ter
                                        acesso
                                        a equipamentos de qualidade, sem a necessidade de um grande investimento
                                        inicial.
                                        Além disso, a locação geralmente inclui serviços de suporte técnico e
                                        manutenção, garantindo
                                        o bom funcionamento dos equipamentos. Essa alternativa permite que as
                                        organizações foquem em
                                        suas atividades principais, enquanto deixam a gestão de impressão nas mãos de
                                        especialistas,
                                        otimizando recursos e aumentando a eficiência operacional.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="div2" class="collapse mt-3" data-parent="#accordion">
                            <div class="collapse-content row">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <img class="rounded" src="<?=env('APP_URL')?>/img/impressoras/img02.png"
                                         alt="Locação de Multifuncionais" width="280">
                                </div>
                                <div class="col-md-8 d-flex align-items-center">
                                    <p>A locação de copiadoras oferece uma solução conveniente e econômica para empresas
                                        de todos os tamanhos,
                                        órgãos governamentais e indivíduos. Com essa opção, é possível ter acesso a
                                        equipamentos de alta
                                        qualidade sem um grande investimento inicial. Além disso, a locação geralmente
                                        inclui suporte técnico
                                        e manutenção, permitindo que as organizações e indivíduos foquem em suas
                                        atividades principais,
                                        enquanto deixam a gestão de cópias nas mãos de especialistas, aumentando a
                                        eficiência operacional.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="div3" class="collapse mt-3" data-parent="#accordion">
                            <div class="collapse-content row">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <img class="rounded" src="<?=env('APP_URL')?>/img/impressoras/img03.jpg" alt="Locação de Copiadoras"
                                         width="220">
                                </div>
                                <div class="col-md-8 d-flex align-items-center">
                                    <p>A locação de multifuncionais é uma solução versátil e econômica para empresas de
                                        todos os portes,
                                        órgãos governamentais e indivíduos. Com essa opção, é possível ter acesso a
                                        equipamentos multifuncionais
                                        de alta qualidade sem um grande investimento inicial. Além disso, a locação
                                        inclui suporte
                                        técnico e manutenção, permitindo que as organizações e indivíduos foquem em suas
                                        atividades principais,
                                        enquanto deixam a gestão dos equipamentos nas mãos de especialistas, aumentando
                                        a eficiência operacional.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="information">
        <div class="container">
            <div class="row s-banner-section c-white">
                <div class="col-md-6 information-banner-text">
                    <h1>Contate Nossas Atendentes!</h1>
                    <p class="mt-4">A nível organizacional, o consenso sobre a necessidade de qualificação
                        assume uma posição crucial no estabelecimento do processo de comunicação como um todo.
                    </p>

                    <p>Tel: (31) 3824-9060</p>

                    <a href="<?=env('APP_URL')?>" class="btn information-banner-btn mb-3" aria-labelledby="Conversar Time Vendas">Conversar Time Vendas</a>
                </div>
                <div class="col-md-6 information-banner-img">
                    <img
                        class="information-banner-contact-img"
                        src="<?=env('APP_URL')?>/img/woman-transperent.png"
                        alt="Contate nossas atendentes"
                    >
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

                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <article class="icon-box20">
                                    <img
                                        src="<?=env('APP_URL')?>/img/service-image-ty-1.png"
                                        alt=""
                                        class="mb-3"
                                        height="90"
                                        width="90"
                                    />
                                    <h4>GESTÃO DE PROCESSOS E DOCUMENTOS</h4>
                                    <p>Soluções criativas e personalizadas para gestão de processos e documentos.</p>
                                </article>
                            </div>
                            <div class="col-md-4 mb-4">
                                <article class="icon-box20">
                                    <img
                                        src="<?=env('APP_URL')?>/img/service-image-ty-2.png"
                                        alt=""
                                        class="mb-3"
                                        height="90"
                                        width="90"
                                    />
                                    <h4>GESTÃO DE IMPRESSÃO</h4>
                                    <p>Venda, locação, assistência técnica e outsourcing de equipamentos
                                        multimarcas.</p>
                                </article>
                            </div>
                            <div class="col-md-4 mb-4">
                                <article class="icon-box20">
                                    <img
                                        src="<?=env('APP_URL')?>/img/service-image-ty-3.png"
                                        alt=""
                                        class="mb-3"
                                        height="90"
                                        width="90"
                                    />
                                    <i class="icon-focus" style=" color:#e30613;"></i>
                                    <h4>CAPTURA INTELIGENTE</h4>
                                    <p>Digitalização de documentos aliada ao Sistema ECM.</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="news">
        <div class="container my-5">
            <h4 class="title-blog text-center">BLOG</h4>
            <h2 class="mb-5 text-center">Últimas Notícias</h2>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($news as $displayNews)
                            <div class="col-md-6">
                                <div class="card mb-4 custom-card">
                                    <img src="<?=env('APP_URL')?>/storage/{{ $displayNews->cover_image }}" class="card-img-top" alt="News Image">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $displayNews->title }}</h5>
                                        <p class="card-text"><small class="text-muted">Publicação: {{ Carbon::parse($displayNews->publication_data)->translatedFormat('d F Y') }}</small></p>
                                        {{-- <p class="card-text">{{ $displayNews->sub_title }}</p> --}}
                                        <a href="{{ url('noticias/' . $displayNews->slug) }}" class="btn btn-primary">Continuar Lendo ...</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @if($otherNews->isNotEmpty())
                    <div class="col-lg-4 more-news">
                        <h3>Todas Notícias</h3>
                        <ul class="list-group">
                            @foreach($otherNews as $_news)
                                <li class="list-group-item">
                                    <a href="{{ url('noticias/' . $_news->slug) }}">{{ $_news->title }}</a>
                                    <br>
                                    <span class="text-muted"> Data Publicação: {{ Carbon::parse($_news->publication_data)->translatedFormat('d F Y') }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script>
        //seção de equipamentos para locação
        $(document).ready(function () {
            $('.show').each(function () {
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
@stop
