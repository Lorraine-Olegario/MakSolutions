@extends('/layouts/main')
@section('title', 'Mak Solutions - Gestão de Documentos')
@section('css')
    <link rel="stylesheet" href="{{ asset('build/assets/services_document_management.css') }}">
@stop

@section('content')

    <div class="jumbotron jumbotron-fluid banner-documental"></div>

    <section class="documental">
        <div class="container mt-5">
            <div class="row">
                <h1 class="text-center">Gerenciamento Eletrônico de Documentos (GED)</h1>

                <div class="col-12">
                    <div class="documental-container-text mx-auto">

                        <p class="mt-4">Na era digital, a eficiência na gestão de documentos tornou-se essencial para o sucesso e competitividade
                            das empresas. O <strong class="documental-container-text-highlight">Dok Viewer</strong>, uma solução avançada de Gestão Eletrônica de Documentos (GED), transforma a maneira como
                            sua organização lida com informações, proporcionando inúmeros benefícios que vão além do simples armazenamento
                            digital.</p>


                        <h3 class="mt-5"> O que é  <strong class="documental-container-text-highlight">GED?</strong> </h3>
                        <p class="mt-4"> GED é um sistema que permite a digitalização, armazenamento, organização, compartilhamento e recuperação
                            de documentos de forma eletrônica. Com ele, sua empresa pode substituir arquivos físicos por documentos
                            digitais, acessíveis de qualquer lugar e a qualquer momento, com apenas alguns cliques.
                        </p>

                        <ul class="mt-3">
                            <li>
                                <img
                                    src="<?=env('APP_URL')?>/img/icon-checkmark-right.jpg"
                                    alt="Imagem certa - Nosso serviço contem Configurações Personalizadas">
                                <p><strong>Acesso Rápido e Facilitado:</strong> Com o GED, localizar um documento específico
                                    torna-se uma tarefa rápida e simples. Em vez de vasculhar pilhas de papéis, seus funcionários
                                    podem encontrar o que precisam em segundos, utilizando palavras-chave ou filtros de pesquisa.
                                </p>
                            </li>
                            <li>
                                <img
                                    src="<?=env('APP_URL')?>/img/icon-checkmark-right.jpg"
                                    alt="Imagem certa - Atendimento Sob Demanda"
                                >
                                <p><strong>Segurança e Conformidade: </strong>A segurança das informações é uma prioridade. O
                                    GED oferece diversas camadas de proteção, como criptografia de dados e controles de acesso,
                                    garantindo que somente pessoas autorizadas possam visualizar ou editar determinados documentos.
                                    Além disso, facilita a conformidade com regulamentos de privacidade e proteção de dados.
                                </p>
                            </li>
                            <li>
                                <img
                                    src="<?=env('APP_URL')?>/img/icon-checkmark-right.jpg"
                                    alt="Imagem certa - Instalação Completa"
                                >
                                <p><strong>Redução de Custos: </strong> Eliminando a necessidade de armazenamento físico e
                                    reduzindo o tempo gasto em buscas manuais, o GED contribui para uma significativa redução
                                    de custos operacionais. Menos espaço ocupado por arquivos físicos significa menos despesas
                                    com aluguel de espaço e material de escritório.
                                </p>
                            </li>
                        </ul>

                        <h3 class="mt-5">Implantando <strong class="documental-container-text-highlight">DOK VIEWER</strong> na Sua Empresa </h3>
                        <p class="mt-4"> Implementar um sistema de GED pode parecer uma tarefa complexa, mas com a parceria
                            certa, o processo é simplificado. Nossa equipe está pronta para auxiliar sua empresa em todas as
                            etapas, desde a escolha da solução adequada até a customização e treinamento dos usuários.
                        </p>

                        <p>Transforme a maneira como sua empresa lida com documentos e informações. Adote o Dok Viewer
                            e veja a diferença na produtividade, segurança e eficiência do seu negócio.
                        </p>

                    </div>
                </div>

               <img class="mt-5 mb-5 w-100" src="<?=env('APP_URL')?>/img/banners/processo-gestao-documental.png" alt="Imagem processo de gestão de documentos">
            </div>
        </div>
    </section>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 block-info-1-content-1">
                <h4>Contate-nos para impulsionar sua empresa com organização e segurança!
                    <a href="https://api.whatsapp.com/send?phone={{ $company->whatsapp_suporte }}&text=Olá, gostaria de agendar uma apresentção do sistema de Gerenciamento Eletrônico Documentos (GED).">
                        <button type="button" class="block-info-1-content-1-btn btn text-left">Agendar Apresentação</button>
                    </a>
                </h4>
            </div>
        </div>
    </div>

@endsection
