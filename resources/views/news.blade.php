@php
    use Carbon\Carbon;
    Carbon::setLocale('pt_BR');
@endphp

@extends('/layouts/main')
@section('title', 'Mak Solutions - Outsourcing de Impressoras e Multifuncionais')
@section('css')
    <link rel="stylesheet" href="/css/news.css">
@stop


@section('content')

    <section class="printing">
        <div class="container mt-5">
            <div class="row">
                <h1 class="text-highlight text-center mb-5">BLOG</h1>
                <h1 class="mb-5">{{ $news->title }}</h1>
                <h6 class="title-date">Data Publicação: <?= date('d-m-Y', strtotime($news->publication_data)) ?></h6>

                <div>
                    {!! $news->description !!}
                </div>

                <div class="col-lg-4 more-news">
                    <h3>Mais Notícias</h3>
                    <ul class="list-group">
                        @foreach($otherNews as $_news)
                            <li class="list-group-item">
                                <a href="/noticias/{{ $_news->id }}" class="truncate" title="{{ $_news->title }}">{{ $_news->title }}</a>
                                <br>
                                <span class="text-muted">Data Publicação: {{ Carbon::parse($_news->publication_data)->translatedFormat('d F Y') }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
