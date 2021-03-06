@extends('blog.app')
    @section('title')
    {{ $post->title }}
@stop
@section('additional_head')
@include('parsedownextra::highlightjs-stylesheet')
@stop

@section('content')
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {!! Markdown::parse($post->content) !!}
                    <hr>
                    <a href="http://twitter.com/home?status={{ $post->title }} por @mateusjatenee - {{ route('blog.post', [$post->slug]) }}" title="Clique para compartilhar no twitter">Compartilhar no <i class="fa fa-twitter fa-2x"></i></a>
                    <a href="http://www.facebook.com/sharer.php?u={{ route('blog.post', [$post->slug]) }}"> ou no <i class="fa fa-facebook fa-2x"></i></a>


                </div>
            </div>
        </div>
    </article>
    <hr>
    <div class="container">
        <div class="row">
            <div id="disqus_thread"></div>
        </div>
    </div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'mguimaraes';

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
@stop

@section('additional_scripts')
@include('parsedownextra::highlightjs-script')
@include('parsedownextra::highlightjs-init')
@stop
