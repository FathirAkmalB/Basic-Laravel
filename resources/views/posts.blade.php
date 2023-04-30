{{-- @dd($posts) --}}

@extends('layouting.main')

@section('container')
    <h3>Blog</h3>
    <br>
    @foreach ($posts as $posts)
        <article class="mb-5">
            <h4 style="color:rgba(1, 132, 219, 0.733); text-decoration: none;"><a href="/posts/{{ $posts["slug"] }}">{{ $posts['title'] }}</a></h4>
            <p>Author : {{ $posts['author'] }}</p>
            <p>{{ $posts['content'] }}</p>
        </article>
    @endforeach
@endsection
