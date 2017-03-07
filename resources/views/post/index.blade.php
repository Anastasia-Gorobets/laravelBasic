@extends('app')

@section('content')

    <?php
    echo link_to_route('posts', $title = 'Published');
    echo "<br>".link_to_route('posts.unpublished', $title = 'unPublished');
    echo "<br>".link_to_route('post.create', $title = 'New post');
    ?>



    @foreach($posts as $post)
    <article>
        <h2>{{$post->title}}</h2>
        <p>{!! $post->excerpt !!}</p>
        <p>{{$post->published_at}}</p>
    </article>
    @endforeach

    @stop