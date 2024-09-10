@extends('/layouts/main')
@section('title', 'Mak Solutions - Quem Somos? | Nossa História')
@section('css')
    <link rel="stylesheet" href="{{ asset('build/assets/company.css') }}">
@stop

@section('content')

    <div class="jumbotron jumbotron-fluid banner-company"></div>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-5">
                    <h3>NOSSA HISTÓRIA</h3>
                    <p class="mt-4">A Mak Solutions atua a mais de 30 anos em todo Brazil no segmento de
                        produção e gerenciamento de documentos, tendo como foco de negócio oferecer as mais
                        modernas soluções em impressão e gestão de documentos para empresas, governos e
                        instituições de ensino.
                        Com o intuito de oferecer um atendimento personalizado, a Mak Solutions tem
                        demonstrado flexibilidade nos processos para atendimento a uma demanda exclusiva,
                        sem prejuízo da qualidade nos serviços prestados.
                    </p>
                </div>

                <div class="col-lg-6 col-md-12 mt-5">
                    <h3>QUEM SOMOS</h3>
                    <p class="mt-4">A Mak Solutios possui uma grande estrutura voltada principalmente
                        para Outsourcing de impressão, ativos de TI e equipamentos de atomação. A empresa conta
                        com uma equipe de profissionais devidamente treinados para oferecer agilidade e qualidade
                        a clientes, dando todo o suporte técnico necessário ao pós venda e aos clientes
                        que contratam nossos serviços. A empresa atua em todo Brazil, tendo como principal
                        objetivo o respeito ao cliente e a busca de melhorias constantes visando sempre a
                        excelência em vendas e prestação de serviços.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper text-center">
                            <article class="icon-box2">
                                <img src="<?=env('APP_URL')?>/img/company/missao.png" width="80" title="Missão" alt="Missão">
                                <h4 class="mt-4 mb-3">Missão</h4>
                                <p>Oferecer soluções tecnológicas em produção e gerenciamento de documentos, ativos em TI e equipamentos
                                     de automação, dando suporte ao cliente auxiliando seus processos de produção e serviços.</p>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="wpb_wrapper text-center">
                        <article class="icon-box2">
                            <img src="<?=env('APP_URL')?>/img/company/visao.png" width="120" title="Visão" alt="Visão">
                            <h4 class="mt-4 mb-3">Visão</h4>
                            <p>Ser líder, em todo estado de Minas Gerais, em outsourcing de impressão, ativos de TI e equipamentos de
                                automação, com excelência na prestação de serviços.</p>
                        </article>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="wpb_wrapper text-center">
                        <article class="icon-box2">
                            <img src="<?=env('APP_URL')?>/img/company/valores.png" width="150" title="Valores" alt="Valores">
                            <h4 class="mt-4 mb-3">Valores</h4>
                            <p>Integridade, Comprometimento, Valorização humana, Superação dos resultados,
                                Melhoria contínua, Inovação e Sustentabilidade.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="contact text-muted">
            <div class="container">
                <div class="row">
                    <h3 class="mb-5">FALE <strong class="contact-text-highlight">CONOSCO</strong></h3>
                    <div class="col-lg-4 col-md-4 col-sm-12 contact-block-1">
                        <i class="fa fa-phone contact-icon" aria-hidden="true"></i>
                        <h5 class="text-left contact-telephone-title">Telefone</h5>
                        <p class="text-left contact-telephone-subtitle">
                            {{ $company->telephone_1 }}
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 contact-block-1">
                        <i class="fa fa-envelope contact-icon" aria-hidden="true"></i>
                        <h5 class="text-left contact-email-title">Email</h5>
                        <p class="text-left contact-email-subtitle">{{ $company->email }}</p>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 contact-block-1">
                        <i class="fa fa-map-marker contact-icon" aria-hidden="true"></i>
                        <h5 class="text-left contact-address-title">Endereço</h5>
                        <p class="text-left contact-address-subtitle">{{ $company->street }} {{ $company->number }} ({{ $company->neighborhood }})
                        </br>{{ $company->municipality }} - {{ $company->uf }}, {{ $company->cep }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="company-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.535190399288!2d-42.566770024025224!3d-19.475597081813007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa55540156aca41%3A0x4beb30471f5ada6b!2sMak%20Solutions%20Sistemas%20de%20impress%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1717371418350!5m2!1spt-BR!2sbr"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
@endsection
