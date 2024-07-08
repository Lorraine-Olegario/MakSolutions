@extends('/layouts/main')
@section('title', 'Mak Solutions - Outsourcing de Notebooks e Desktops')
@section('css')
    <link rel="stylesheet" href="/css/services_desktop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@stop

@section('content')

    <div class="jumbotron jumbotron-fluid banner-desktop"></div>

    <section class="desktop">
        <div class="container">
            <div class="row mt-5 col">
                <div class="desktop-container-description">
                    <h1>CONTRATE NOSSO SERVIÇOS DE ALUGUEL DE <strong class="desktop-container-description-text-highlight">NOTEBOOKS</strong> E <strong class="desktop-container-description-text-highlight">COMPUTADORES</strong> </h1>
                    <p class="text-justify mt-4">Atendemos nossos clientes de acordo com suas necessidades específicas, oferecendo a possibilidade de escolher as configurações ideais para seus notebooks e computadores. Você decide quais componentes e acessórios melhor atendem suas demandas, e nossa equipe se encarrega de realizar todas as instalações necessárias.</p>
                    <ul>
                        <li>
                            <img
                                src="/img/icon-checkmark-right.jpg"
                                alt="Imagem certo - Nosso serviço contem Configurações Personalizadas">
                            <p>Configurações Personalizadas</p>
                        </li>
                        <li>
                            <img
                                src="/img/icon-checkmark-right.jpg"
                                alt="Imagem certo - Atendimento Sob Demanda"
                            >
                            <p>Atendimento Sob Demanda</p>
                        </li>
                        <li>
                            <img
                                src="/img/icon-checkmark-right.jpg"
                                alt="Imagem certo - Instalação Completa"
                            >
                            <p>Instalação Completa</p>
                        </li>
                        <li>
                            <img
                                src="/img/icon-checkmark-right.jpg"
                                alt="Imagem certo - Equipamentos Atualizados"
                            >
                            <p>Equipamentos Atualizados</p>
                        </li>
                        <li>
                            <img
                                src="/img/icon-checkmark-right.jpg"
                                alt="Imagem certo - Redução de Custo"
                            >
                            <p>Redução de Custo</p>
                        </li>
                        <li>
                            <img
                                src="/img/icon-checkmark-right.jpg"
                                alt="Imagem certo - Suporte Técnico"
                            >
                            <p>Suporte Técnico</p>
                        </li>
                    </ul>
                    <p>Garantimos uma experiência personalizada e eficiente, assegurando que você tenha exatamente o que precisa para alcançar seus objetivos empresariais.</p>
                    <button class="btn desktop-container-btn-quote">SOLICITAR COTAÇÃO</button>
                </div>

                <div class="col text-center">
                    <img
                        class="desktop-img-primary rounded mx-auto d-block"
                        src="/img/man.png"
                        alt="Imagem representativa de compuatores"
                    >
                </div>
            </div>
        </div>
    </section>

    <section class="component-elements">
        <div class="container">
            <div class="row">
                <h2 class="centralizado">Personalize Seu Equipamento para Máxima Eficiência</h2>
                <p class="centralizado mt-4">Ao alugar nossos notebooks e computadores, você tem a opção de personalizar seu equipamento para atender exatamente às suas necessidades. Seja para aumentar a potência, expandir o armazenamento ou adicionar acessórios que facilitam seu trabalho, oferecemos diversas opções para otimizar seu desempenho.</p>
                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <img src="/img/icon-computer.jpg" class="component-elements-img-carousel" alt="Imagem de um ilustrativa  computador" />
                        </div>
                        <div class="slide">
                            <img src="/img/icone-laptop.webp" class="component-elements-img-carousel" alt="Imagem ilustrativa de um Notebook" />
                        </div>
                        <div class="slide">
                            <img src="/img/icon-mouse.jpg" class="component-elements-img-carousel" alt="Imagem ilustrativa de um Mouse" />
                        </div>
                        <div class="slide">
                            <img src="/img/icon-monitor.jpg" class="component-elements-img-carousel" alt="Imagem Monitor de Computador" />
                        </div>
                        <div class="slide">
                            <img src="/img/icon-teclado.png" class="component-elements-img-carousel" alt="Imagem ilustrativa  de um Tecaldo" />
                        </div>
                        <div class="slide">
                            <img src="/img/icon-ssd.jpg" class="component-elements-img-carousel" alt="Imagem ilustrativa de um SSD" />
                        </div>
                        <div class="slide">
                            <img src="/img/icon-webcam.jpg" class="component-elements-img-carousel" alt="Imagem ilustrativa  de uma Webcam" />
                        </div>
                        <div class="slide">
                            <img src="/img/icon-computer.jpg" class="component-elements-img-carousel" alt="Imagem de um ilustrativa  computador" />
                        </div>
                        <div class="slide">
                            <img src="/img/icone-laptop.webp" class="component-elements-img-carousel" alt="Imagem ilustrativa de um Notebook" />
                        </div>
                        <div class="slide">
                            <img src="/img/icon-mouse.jpg" class="component-elements-img-carousel" alt="Imagem ilustrativa de um Mouse" />
                        </div>
                        <div class="slide">
                            <img src="/img/icon-monitor.jpg" class="component-elements-img-carousel" alt="Imagem Monitor de Computador" />
                        </div>
                        <div class="slide">
                            <img src="/img/icon-teclado.png" class="component-elements-img-carousel" alt="Imagem ilustrativa  de um Tecaldo" />
                        </div>
                        <div class="slide">
                            <img src="/img/icon-ssd.jpg" class="component-elements-img-carousel" alt="Imagem ilustrativa de um SSD" />
                        </div>
                        <div class="slide">
                            <img src="/img/icon-webcam.jpg" class="component-elements-img-carousel" alt="Imagem ilustrativa  de uma Webcam" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12 block-info-1-content-1">
                <h4> Solicite já seu orçamento personalizado! 
                    <a href="#">
                        <button type="button" class="block-info-1-content-1-btn btn text-left">Solicitar Cotação</button>
                    </a>
                </h4>
            </div>
        </div>
    </div>




@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('#carrosselImagens').carousel({
                interval: 3000
            });
        });
    </script>
@stop
