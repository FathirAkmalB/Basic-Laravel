@extends('layouting.main')

@section('container')
    <h2>Posts</h2>
    <br>
    <article class="mb-5">
        <h3>{{ $post["title"] }}</h3>
        <p>{{ $post["author"] }}</p>
        <p>{{ $post["content"] }}</p>
    </article>
@endsection
