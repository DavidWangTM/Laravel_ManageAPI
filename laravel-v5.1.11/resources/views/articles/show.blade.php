@extends('app')
@section('content')
    <article class="format-image group">
        <h2 class="post-title pad">
            <a href="/articles/{{ $article->id }}"> {{ $article->title }}</a>
        </h2>
        <div class="post-inner">
            <div class="post-deco">
                <div class="hex hex-small">
                    <div class="hex-inner"><i class="fa"></i></div>
                    <div class="corner-1"></div>
                    <div class="corner-2"></div>
                </div>
            </div>
            <div class="post-content pad">
                <div class="entry custome">
                    {{ $article->content }}
                </div>
                <a class="more-link-custom" href="/articles/{{ $article->id }}/edit"><span><i>编辑</i></span></a>

                <a class="more-link-custom" href="/articles/{{ $article->id }}/destroy"><span><i>删除</i></span></a>
            </div>
        </div>
    </article>
@stop