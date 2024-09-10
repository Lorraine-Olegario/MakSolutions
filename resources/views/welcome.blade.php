@php
    use Carbon\Carbon;
    Carbon::setLocale('pt_BR');
@endphp

@extends('/layouts/main')
@section('title', 'Mak Solutions - Outsourcing de impressão, locação de impressoras| Outsourcing de notebooks e desktops
    | BPO, ECM, MPS')
@section('css')
    <link rel="stylesheet" href="{{ asset('build/assets/index.css') }}">
@stop


@section('content')

    <div class="flex-fill">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-indicators">
                @php
                    $item = 0;
                @endphp
                @foreach ($banners as $banner)
                    <button type="button" data-target="#carouselExampleIndicators" data-slide-to="{{ $item }}"
                        class="btn-slide-carrousel active" aria-labelledby="Slides Serviços"
                        aria-current="Slide {{ $item }}"></button>
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
                            <img src="<?= env('APP_URL') ?>/storage/{{ $banner->image }}" class="d-block w-100"
                                alt="{{ $banner->description }}">
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


    {{-- SERVICES --}}
    <section class="services">
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <h2 class="mt-5 mb-5 text-center">NOSSAS <strong class="services-text-highlight">SOLUÇÕES</strong>
                    PERSONALIZADAS</h2>
                <div class="service col-xl-3 col-md-6 col-sm-12 col-lg-3 col-xxl-3 mb-4 mx-auto">
                    <a href="<?= env('APP_URL') ?>/locacao-impressoras-multifuncionais">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img src="<?= env('APP_URL') ?>/img/service-image-3.png"
                                    alt="Outsourcing de impressoras e multifuncionais" height="90" width="90" />
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
                    <a href="<?= env('APP_URL') ?>/locacao-notebooks-e-desktops">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img src="<?= env('APP_URL') ?>/img/service-image-1.png"
                                    alt="Outsourcing de notebooks e desktops" height="90" width="90" />
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
                    <a href="<?= env('APP_URL') ?>/locacao-etiquetadoras">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img src="<?= env('APP_URL') ?>/img/service-image-2.png" alt="Locação de Etiquetadoras"
                                    height="90" width="90" />
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
                    <a href="<?= env('APP_URL') ?>/gestao-documental">
                        <div class="service-box extra">
                            <figure class="icon">
                                <img src="<?= env('APP_URL') ?>/img/service-image-4.png"
                                    alt="Gerenciamento Eletrônico Documentos" height="90" width="90" />
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

                <div class="row align-items-center mt-3">
                    <!-- Imagem -->
                    <div class="col-md-6 text-center">
                        <img src="<?= env('APP_URL') ?>/img/impressoras/impressora-hp-1.png.jpg" alt="Equipamentos para Locação"
                            class="img-fluid img-fluid-locacao">
                    </div>
                    <!-- Texto e botão -->
                    <div class="col-md-6 justify-content-center align-items-center">
                        <p class="container-locacao-section-text mb-4">
                            A locação de equipamentos é uma solução prática e econômica para empresas,
                            órgãos públicos e pessoas físicas. Com acesso a <strong>impressoras, copiadoras e
                            multifuncionais</strong> de alta qualidade, você evita grandes investimentos iniciais.
                            O serviço inclui <strong>suporte técnico e manutenção</strong>, permitindo que você se concentre
                            no que faz de melhor enquanto especialistas cuidam da gestão dos equipamentos,
                            aumentando sua eficiência operacional.
                        </p>

                        <!-- Botão de chamada para ação -->
                        <div class="row mt-4">
                            <div class="col text-center">
                                <a href="https://api.whatsapp.com/send?phone={{ $company->whatsapp_suporte }}&text=Olá, preciso falar com o comercial."
                                    class="btn btn-outline-light btn-lg rounded-pill px-5" target="_blank">
                                    Solicitar Orçamento!
                                </a>
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

                    <p>Tel: {{ $company->telephone_1 }}</p>

                    <a href="https://api.whatsapp.com/send?phone={{ $company->whatsapp_suporte }}&text=Olá, preciso falar com o comercial." class="btn information-banner-btn mb-3"
                        aria-labelledby="Conversar Time Vendas">Conversar Time Vendas</a>
                </div>
                <div class="col-md-6 information-banner-img">
                    <img class="information-banner-contact-img" src="<?= env('APP_URL') ?>/img/woman-transperent.png"
                        alt="Contate nossas atendentes">
                </div>
            </div>
        </div>
    </section>

    <section class="curso-section py-5">
        <div class="container">
            <h4 class="curso-section-title">Tenha o controle total de tudo que a sua empresa imprime</h4>
            <div class="row">
                <div class="row g-3"> <!-- g-3 para ajustar o espaçamento entre os cards -->
                    <div class="col-md-4">
                        <div class="card curso-card text-gray">
                            <div class="card-strip"></div>
                            <img src="<?= env('APP_URL') ?>/img/service-image-ty-1.png" alt="" class="mb-3"
                                height="60" width="60" />
                            <h4 class="gestao-titulo">GESTÃO DE PROCESSOS E DOCUMENTOS</h4>
                            <i class="bi bi-arrow-right-circle-fill fs-5"></i> <!-- Ícone menor -->
                            <p class="mt-1">Soluções <strong>criativas e personalizadas</strong> para gestão de processos
                                e documentos.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card curso-card text-gray">
                            <div class="card-strip"></div>
                            <img src="<?= env('APP_URL') ?>/img/service-image-ty-3.png" alt="" class="mb-3"
                                height="60" width="60" />
                            <h4 class="gestao-titulo">CAPTURA INTELIGENTE</h4>
                            <i class="bi bi-arrow-right-circle-fill fs-5"></i>
                            <p class="mt-1"><strong>Digitalização de documentos</strong> aliada ao Sistema ECM.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card curso-card text-gray">
                            <div class="card-strip"></div>
                            <img src="<?= env('APP_URL') ?>/img/service-image-ty-2.png" alt="" class="mb-3"
                                height="60" width="60" />
                            <h4 class="gestao-titulo">ASSISTÊNCIA TÉCNICA AUTORIZADA</h4>
                            <i class="bi bi-arrow-right-circle-fill fs-5"></i>
                            <p class="mt-1">Atendimento nacional para <strong>equipamentos de pequeno, médio e
                                    grande</strong> porte.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="news">
        <div class="container mt-2 mb-5">
            <h4 class="title-blog text-center">BLOG</h4>
            <h2 class="mb-5 text-center">Últimas Notícias</h2>
            <div class="row">
                @foreach ($news as $displayNews)
                    <div class="col-md-4">
                        <div class="card mb-4 custom-card">
                            <img src="<?= env('APP_URL') ?>/storage/{{ $displayNews->cover_image }}" class="card-img-top"
                                alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title" title="{{ $displayNews->title }}">{{ $displayNews->title }} </h5>
                                <p class="card-text"><small class="text-muted">Publicação:
                                        {{ Carbon::parse($displayNews->publication_data)->translatedFormat('d F Y') }}</small>
                                </p>
                                <a href="{{ url('noticias/' . $displayNews->slug) }}" class="btn btn-primary">Continuar
                                    Lendo ...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script>
        //seção de equipamentos para locação
        $(document).ready(function() {
            $('.show').each(function() {
                let targetId = $(this).attr('id'); // Obtém o ID da seção expandida
                $('#indicator' + targetId.substr(3)).show(); // Mostra o indicador correspondente
            });
        });

        // Script para controlar a exibição do indicador ao abrir uma seção
        $('#accordion').on('show.bs.collapse', function(e) {
            let targetId = $(e.target).attr('id'); // Obtém o ID do elemento que está sendo expandido
            $('#indicator1, #indicator2, #indicator3').hide(); // Oculta todos os indicadores
            $('#indicator' + targetId.substr(3)).show(); // Mostra o indicador correspondente ao elemento expandido
        });
    </script>
@stop
