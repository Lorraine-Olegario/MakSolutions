@extends('/layouts/main')
@section('title', 'Mak Solutions - Outsourcing de Etiquetadoras')
@section('css')
    <link rel="stylesheet" href="{{ asset('build/assets/services_labeling_machines.css') }}">
@stop

@section('content')

    <div class="jumbotron jumbotron-fluid banner-labeling_machines" title="Imagem Impressora Etiquetadora - https://www.zebra.com/br/pt/products/printers.html"></div>

    <section class="labeling_machines">
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="labeling_machines-description ">
                        <div class="labeling_machines-container-description-text">
                            <h2 class="font-weight-bold labeling_machines-description-title">LOCAÇÃO DE IMPRESSORAS DE <strong class="labeling_machines-container-description-text-highlight">ETIQUETAS</strong></h2>
                            <p>Escolher a solução certa para suas necessidades de impressão e etiquetagem pode ser um desafio, mas nós estamos aqui para facilitar essa decisão. Oferecemos um serviço de locação que não só atende às suas demandas operacionais, como também proporciona benefícios financeiros e técnicos inigualáveis.</p>
                            <p>A locação elimina a necessidade de um grande investimento inicial, permitindo que sua empresa aloque recursos financeiros de forma mais eficiente. Além disso, todos os custos com manutenção e atualizações tecnológicas ficam por conta da locadora, proporcionando mais tranquilidade e foco no que realmente importa: o seu negócio.</p>
                            <a href="https://api.whatsapp.com/send?phone={{ $company->whatsapp_comercial }}&text=Olá, preciso falar com o comercial." target="_blank">
                                <button class="btn labeling_machines-container-btn-quote">SOLICITAR COTAÇÃO</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="labeling_machines-image col-xl-6 col-lg-12 text-center">
                    <div class="labeling_machines-container-image-1 rounded mx-auto d-block">
                        <img src="<?=env('APP_URL')?>/img/impressoras/etiquetadora_zebra.jpg" class="img-fluid mt-4 mb-3" title="Imagem Impressora Etiquetadora - https://www.zebra.com/br/pt/products/printers.html" alt="Imagem Impressora Etiquetadora - https://www.zebra.com/br/pt/products/printers.html">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="labeling_machines-differentials">
                        <h5 class="mt-4 mb-4">NOSSOS <strong class="labeling_machines-container-description-text-highlight">DIFERENCIAIS</strong></h5>
                        <ul>
                            <li>
                                <img
                                    src="<?=env('APP_URL')?>/img/icon-checkmark-right.jpg"
                                    alt="Imagem certa - Nosso serviço contém Configurações Personalizadas">
                                <p><strong>Capacidade de Cortar Etiquetas em Tamanhos Personalizados:</strong> Atendemos às suas necessidades específicas com etiquetas sob medida.</p>
                            </li>
                            <li>
                                <img
                                    src="<?=env('APP_URL')?>/img/icon-checkmark-right.jpg"
                                    alt="Imagem certa - Atendimento Sob Demanda"
                                >
                                <p><strong>Etiquetas Personalizáveis:</strong> Dê um toque único ao seu produto com etiquetas feitas especialmente para você.</p>
                            </li>
                            <li>
                                <img
                                    src="<?=env('APP_URL')?>/img/icon-checkmark-right.jpg"
                                    alt="Imagem certa - Instalação Completa"
                                >
                                <p><strong>Fornecimento de Suprimentos:</strong> Garantimos que você nunca fique sem o que precisa para manter suas operações em pleno funcionamento.</p>
                            </li>
                            <li>
                                <img
                                    src="<?=env('APP_URL')?>/img/icon-checkmark-right.jpg"
                                    alt="Imagem certa - Equipamentos Atualizados"
                                >
                                <p><strong>Suporte Técnico Especializado:</strong> Conte com nossa equipe de especialistas sempre pronta para ajudar.</p>
                            </li>
                            <li>
                                <img
                                    src="<?=env('APP_URL')?>/img/icon-checkmark-right.jpg"
                                    alt="Imagem certa - Redução de Custo"
                                >
                                <p><strong>Treinamentos:</strong> Oferecemos treinamentos completos para que você e sua equipe aproveitem ao máximo nossas soluções.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 block-info-1-content-1">
                <h4>Impressão e etiquetagem simplificadas: eficiência e economia na medida certa!
                    <a href="https://api.whatsapp.com/send?phone={{ $company->whatsapp_comercial }}&text=Olá, preciso falar com o comercial." target="_blank">
                        <button type="button" class="block-info-1-content-1-btn btn text-left">Solicitar Proposta</button>
                    </a>
                </h4>
            </div>
        </div>
    </div>
@endsection
