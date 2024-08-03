@extends('/layouts/main')
@section('title', 'Mak Solutions - Outsourcing de Etiquetadoras')
@section('css')
    <link rel="stylesheet" href="/css/services_labeling_machines.css">
@stop

@section('content')

    <div class="jumbotron jumbotron-fluid banner-labeling_machines"></div>

    <section class="labeling_machines">
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="labeling_machines-description ">
                        <div class="labeling_machines-container-description-text">
                            <h2 class="font-weight-bold labeling_machines-description-title">LOCAÇÃO DE IMPRESSORAS DE <strong class="labeling_machines-container-description-text-highlight">ETIQUETAS</strong></h2>
                            <p>Escolher a solução certa para suas necessidades de impressão e etiquetagem pode ser um desafio, mas nós estamos aqui para facilitar essa decisão. Oferecemos um serviço de locação que não só atende às suas demandas operacionais, como também proporciona benefícios financeiros e técnicos inigualáveis.</p>
                            <p>A locação elimina a necessidade de um grande investimento inicial, permitindo que sua empresa aloque recursos financeiros de forma mais eficiente. Além disso, todos os custos com manutenção e atualizações tecnológicas ficam por conta da locadora, proporcionando mais tranquilidade e foco no que realmente importa: o seu negócio.</p>
                            <button class="btn labeling_machines-container-btn-quote">SOLICITAR COTAÇÃO</button>
                        </div>
                    </div>
                </div>

                <div class="labeling_machines-image col-xl-6 col-lg-12 text-center">
                    <div class="labeling_machines-container-image-1 rounded mx-auto d-block">
                        <img src="/img/impressoras/etiquetadora.png" class="img-fluid mb-3" alt="Imagem Impressora Etiquetadora">
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
                                    src="/img/icon-checkmark-right.jpg"
                                    alt="Imagem certo - Nosso serviço contem Configurações Personalizadas">
                                <p><strong>Capacidade de Cortar Etiquetas em Tamanhos Personalizados:</strong> Atendemos às suas necessidades específicas com etiquetas sob medida.</p>
                            </li>
                            <li>
                                <img
                                    src="/img/icon-checkmark-right.jpg"
                                    alt="Imagem certo - Atendimento Sob Demanda"
                                >
                                <p><strong>Etiquetas Personalizáveis:</strong> Dê um toque único ao seu produto com etiquetas feitas especialmente para você.</p>
                            </li>
                            <li>
                                <img
                                    src="/img/icon-checkmark-right.jpg"
                                    alt="Imagem certo - Instalação Completa"
                                >
                                <p><strong>Fornecimento de Suprimentos:</strong> Garantimos que você nunca fique sem o que precisa para manter suas operações em pleno funcionamento.</p>
                            </li>
                            <li>
                                <img
                                    src="/img/icon-checkmark-right.jpg"
                                    alt="Imagem certo - Equipamentos Atualizados"
                                >
                                <p><strong>Suporte Técnico Especializado:</strong> Conte com nossa equipe de especialistas sempre pronta para ajudar.</p>
                            </li>
                            <li>
                                <img
                                    src="/img/icon-checkmark-right.jpg"
                                    alt="Imagem certo - Redução de Custo"
                                >
                                <p><strong>Treinamentos:</strong> Oferecemos treinamentos completos para que você e sua equipe aproveitem ao máximo nossas soluções.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="wrapper-grey padded">
            <div class="container">
                <h4 class="mt-5 mb-4 text-center">GALERIA</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://gainscha.mx/wp-content/uploads/2023/07/8.jpg');">
                            <div class="card-category">Etiqetadora</div>
                            <img class="card-user avatar avatar-large" src="/img/impressoras/etiquetadora.png" alt="Imagem Etiquetadora">
                            <a class="card-link" href="#" ></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('/img/impressoras/etiquetadora_2.png');">
                            <div class="card-category">Etiqetadora</div>
                            <img class="card-user avatar avatar-large" src="/img/impressoras/etiquetadora.png" alt="Imagem Etiquetadora">
                            <a class="card-link" href="#" ></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('/img/impressoras/etiquetadora-open.jfif');">
                            <div class="card-category">Etiqetadora</div>
                            <img class="card-user avatar avatar-large" src="/img/impressoras/etiquetadora-open.jfif" alt="Imagem Etiquetadora Aberta">
                            <a class="card-link" href="#" ></a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 gallery-image-none">
                        <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('/img/impressoras/etiquetadora.png');">
                            <div class="card-category">Etiqetadora</div>
                            <img class="card-user avatar avatar-large" src="/img/impressoras/etiquetadora.png" alt="Imagem Etiquetadora">
                            <a class="card-link" href="#" ></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 gallery-image-none">
                        <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('/img/impressoras/etiquetadora_2.png');">
                            <div class="card-category">Etiqetadora</div>
                            <img class="card-user avatar avatar-large" src="/img/impressoras/etiquetadora_2.png" alt="Imagem Etiquetadora">
                            <a class="card-link" href="#" ></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 gallery-image-none">
                        <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('/img/impressoras/etiquetadora-open.jfif');">
                            <div class="card-category">Etiqetadora</div>
                            <img class="card-user avatar avatar-large" src="/img/impressoras/etiquetadora-open.jfif" alt="Imagem Etiquetadora">
                            <a class="card-link" href="#" ></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <button id="show-more" class="btn btn-primary">Exibir Mais</button>
                            <button id="show-less" class="btn btn-secondary d-none">Exibir Menos</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let showMoreButton = document.getElementById('show-more');
            let showLessButton = document.getElementById('show-less');
            let galleryImages = document.querySelectorAll('.gallery-image-none');

            showMoreButton.addEventListener('click', function() {
                galleryImages.forEach(function(image) {
                    image.style.display = 'block';
                });
                showMoreButton.classList.add('d-none');
                showLessButton.classList.remove('d-none');
            });

            showLessButton.addEventListener('click', function() {
                galleryImages.forEach(function(image) {
                    image.style.display = 'none';
                });
                showLessButton.classList.add('d-none');
                showMoreButton.classList.remove('d-none');
            });
        });
    </script>
@stop
