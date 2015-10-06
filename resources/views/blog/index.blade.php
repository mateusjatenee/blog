@extends('blog.app')

@section('title', 'Início')

@section('content')
<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{ route('blog.post', [$post->slug]) }}">
                        <h2 class="post-title">
                            {{ $post->title }}
                        </h2>
                    </a>
                        <h3 class="post-subtitle">
                            {{ Illuminate\Support\Str::limit(Markdown::parse($post->content), 40) }}
                        </h3>
                    </a>
                    <p class="post-meta">{{ $post->user->name }} {{ $post->date->diffForHumans() }}</p>
                    <ul class="pager">
                        <li class="previous"><a href="{!! route('blog.post', [$post->slug]) !!}" style="background: #0085a1; border: 1px solid #0085a1; color: #fff">Ver mais</a>
</li>
                    </ul>
                </div>
            @endforeach
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    @if($posts->previousPageUrl())
                    <li class="previous">
                        <a href="#">Voltar</a>
                    </li>
                    @endif
                    @if($posts->hasMorePages())
                    <li class="next"><a href="{!! $posts->nextPageUrl() !!}">Próxima página</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
@stop
