@extends('blog.app')

@section('title', 'Início')

@section('contact')
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
                            {!! Illuminate\Support\Str::limit(Markdown::parse($post->content), 20) !!}
                        </h3>
                    </a>
                    <p class="post-meta">{{ $post->user->name }} em {{ $post->created_at->format('d/m/Y') }}</p>
                </div>
            @endforeach
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop
