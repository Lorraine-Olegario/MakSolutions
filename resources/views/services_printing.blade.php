@extends('/layouts/main')
@section('title', 'Mak Solutions - Outsourcing de Impressoras e Multifuncionais')
@section('css')
    <link rel="stylesheet" href="{{ asset('build/assets/services_printing.css') }}">
@stop

@section('content')

    <div class="jumbotron jumbotron-fluid banner-printing">
        <div class="container p-5">
            <h1 class="display-4">Outsourcing de impressoras e multifuncionais</h1>
        </div>
    </div>

    <section class="printing">
        <div class="container mt-5">
            <div class="row">
                <h1 class="mb-5"><strong class="printing-container-description-text-highlight">Vantagens</strong> para sua Empresa ao Implantar o <strong>Outsourcing de Impressão.</strong></h1>

                <div class="col-xs-12 col-sm-6 col-md-6 mb-6">
                    <ul class="list-unstyled">
                        <li class="mb-4">
                            <div class="list-item-header">
                                <img src="<?=env('APP_URL')?>/img/estrela.jfif" class="img-fluid inline-img" alt="Equipamentos">
                                <h5>Atualização tecnológica de equipamentos</h5>
                            </div>
                            <p class="printing-container-description-text">Com o outsourcing de impressão, o cliente pode contar com equipamentos de última geração sem a necessidade de um investimento inicial significativo. Isso permite que os recursos financeiros sejam direcionados para as atividades principais da empresa, aumentando a eficiência e a competitividade no mercado.</p>
                        </li>
                        <li class="mb-4">
                            <div class="list-item-header">
                                <img src="<?=env('APP_URL')?>/img/estrela.jfif" class="img-fluid inline-img" alt="Impressão">
                                <h5>Impressão sustentável e redução de custos</h5>
                            </div>
                            <p class="printing-container-description-text">O outsourcing permite um controle rigoroso sobre tudo o que é impresso, possibilitando retenção de impressões quando necessário e armazenamento eletrônico de documentos. Dessa forma, há uma redução significativa no uso de papel e uma gestão correta de resíduos e insumos, contribuindo para a sustentabilidade ambiental e a redução de custos operacionais.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 mb-6">
                    <ul class="list-unstyled">
                        <li class="mb-4">
                            <div class="list-item-header">
                                <img src="<?=env('APP_URL')?>/img/estrela.jfif" class="img-fluid inline-img" alt="Impressão Segura">
                                <h5>Impressão segura</h5>
                            </div>
                            <p class="printing-container-description-text">A segurança na impressão é garantida por meio da autenticação pessoal do usuário, que deve se identificar com crachá, senha ou biometria para liberar a impressão. Isso evita que documentos sejam esquecidos nas bandejas de saída, garantindo que informações sensíveis não fiquem expostas indevidamente.</p>
                        </li>
                        <li class="mb-4">
                            <div class="list-item-header">
                                <img src="<?=env('APP_URL')?>/img/estrela.jfif" class="img-fluid inline-img" alt="Gestão Eficiente">
                                <h5>Gestão eficiente de impressão</h5>
                            </div>
                            <p class="printing-container-description-text">Com máquinas modernas e softwares de bilhetagem, a empresa pode monitorar detalhadamente o que é impresso, por quem e em que quantidade. Relatórios detalhados ajudam os gestores a entender o impacto dos documentos impressos nos custos e a implementar políticas de cotas por usuário ou setor, otimizando os recursos de impressão.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="elementor-images-printing">
            <div class="background-image"></div>
            <div class="content">
                <div class="row">
                    <div class="col-12 elementor-images-printing-info">
                        <h1>Impressão Inteligente</h1>
                        <p>A gestão inteligente de recursos é essencial nos negócios modernos. O outsourcing de impressão oferece uma solução eficaz, proporcionando benefícios que vão desde a atualização tecnológica sem investimentos iniciais pesados até práticas sustentáveis e controle total sobre os documentos produzidos. Essa abordagem não apenas otimiza processos, mas também impulsiona a inovação e a responsabilidade corporativa.</p>
                        <a href="https://api.whatsapp.com/send?phone={{ $company->whatsapp_comercial }}&text=Olá, preciso falar com o comercial">
                            <button class="elementor-images-printing-button">SOLICITAR COTAÇÃO</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-image"></div>
        </div>
    </section>
@endsection
