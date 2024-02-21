@extends('welcome')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="container" style="padding: 0 150px">
        <div class="content">
            <h1 class="my-4">{{ $post->title }}</h1>
            <p class="mt-3">By. <a href="/authors/{{ $post->author->id }}" class="text-decoration-none text-danger">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-danger">{{ $post->category->name }}</a></p>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" class="img-fluid">

            <article class="my-4 fs-5">
                {!! $post->body !!}
            </article>
        </div>
        <a href="/posts" class="btn btn-primary mt-4">Kembali</a>
    </div>
@endsection

@push('script')
<script>
    console.log('cleo');

</script>
@endpush