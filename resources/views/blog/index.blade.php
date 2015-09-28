@extends('blog.app')

@section('title', 'Início')

@section('contact')
<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{ route('blog.post', [$post->slug])">
                        <h2 class="post-title">
                            {{ $post->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ Illuminate\Support\Str::limit($post->content, 50) }}
                        </h3>
                    </a>
                    <p class="post-meta"><a href="{{ route('user.show', [$post->user->slug]) }}">{{ $post->user->name }}</a> em {{ $post->created_at->format('d/m/Y') }}</p>
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
