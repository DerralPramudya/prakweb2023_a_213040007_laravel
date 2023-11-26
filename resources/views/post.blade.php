@section('container')
<article>
    <h2>{{ $post->title }}</h2>

    <p>By. Derral Pramudya<a href="/categories/{{ $post->category->slug }}">{{ $post->category->name}}</a></p>
    {!! $post->body !!}
</article>