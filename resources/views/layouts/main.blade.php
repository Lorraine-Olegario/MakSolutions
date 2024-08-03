<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Mak Solutions">
        <meta name="keywords" content="Impressoras, Locação impressoras, Aluguel de impressoras, Locação Computadores">
        <meta name="description" content="Locação de impressoras, Aluguel de impressoras, Locação Computadores">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/menu.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
        @yield('css')

        <title>@yield('title')</title>
    </head>

    <body>
        <div class="d-flex flex-column min-vh-100">
            <header>
                <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand ms-lg-5" href="/">
                        <img src="/img/company/logo/logo.png" width="130" height="60" alt="Logo Mak Solutions">
                    </a>

                    <button
                        class="navbar-toggler me-lg-5"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse me-lg-5 d-lg-flex justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">

                            <li class="nav-item active">
                                <a class="nav-link" href="/">HOME</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"
                                   href="#" id="navbarDropdownMenuLink"
                                   data-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                >
                                    SOLUÇÕES
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="/locacao-impressoras-multifuncionais">Impressoras e Multifuncionais</a>
                                    <a class="dropdown-item" href="/locacao-notebooks-e-desktops">Locação de Notebooks e Desktops</a>
                                    <a class="dropdown-item" href="/locacao-etiquetadoras">Locação de Etiquetadoras</a>
                                    <a class="dropdown-item" href="/gestao-documental">Gerenciamento Eletronico Documentos</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/empresa">EMPRESA</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">ABERTURA DE CHAMADOS</a>
                            </li>

                            <li>
                                <button type="button" class="btn" id="btn-phone-header">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    (31) 3824-9060
                                </button>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <main class="main flex-grow-1">
                @yield('content')
            </main>

            <a href="https://api.whatsapp.com/send?phone=553138249060&text=Olá, preciso falar com o comercial"
               target="_blank"
               style="position:fixed;bottom:20px;right:30px;z-index:1;">
                <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50" />
                    <path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA" />
                </svg>
            </a>

            <footer class="bg-dark text-center p-3 mt-4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-12 mt-5">
                            <img
                                src="/img/company/logo/logo.png"
                                class="pt-3"
                                width="280"
                                height="140"
                                alt="Logo Mak Solutions"
                            >
                        </div>

                        <div class="col-lg-4 col-md-12 mt-5">
                            <h5>Entre em contato</h5>
                            <p class="text-justify">Av. José Júlio da Costa 2080 (Ideal)</br>Ipatinga, MG, 35160-294</p>
                            <p class="text-justify">(31) 3824-9060 | (31) 3824-9060</p>
                            <p class="text-justify">contato@maksolutions.com.br</p>
                        </div>


                        <div class="col-lg-4 col-md-12 mt-5 d-flex flex-column align-items-center">
                            <h5>Redes Sociais</h5>
                            <p>Sua solução está a um clique de distância – fale com nossos especialistas agora!</p>

                            <div class="d-flex gap-2">
                                <ul class="list-unstyled d-flex">
                                    <li class="ps-4">
                                        <a href="/" target="_blank">
                                            <i class="fa fa-facebook fa-2x facebook-icon"></i>
                                        </a>
                                    </li>

                                    <li class="ps-4">
                                        <a href="/" target="_blank">
                                            <i class="fa fa-instagram fa-2x instagram-icon"></i>
                                        </a>
                                    </li>

                                    <li class="ps-4">
                                        <a href="/" target="_blank">
                                            <i class="fa fa-whatsapp fa-2x whatsapp-icon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <p class="text-center text-light py-4 my-4 border-top">&copy; <?=date('Y')?> Copyright - Mak Solutions</p>
                </div>
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        @yield('js')
    </body>
</html>
