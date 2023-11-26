@extends('layouts.main')

@section('container')

<article>

    <h2>{{ $post->title }}</h2>

    <p>
        By.
        @if ($post->author)
            <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
        @else
            Unknown Author
        @endif

        in

        @if ($post->category)
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        @else
            Uncategorized
        @endif
    </p>

    {!! $post->body !!}

</article>

<a href="/posts" class="d-block mt-3">Back to Posts</a>

@endsection
