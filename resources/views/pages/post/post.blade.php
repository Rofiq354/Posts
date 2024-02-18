@extends('welcome')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="content">
        <h1>{{ $post->title }}</h1>
        <p>By. <a href="" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
        <a href="/posts">Kembali</a>
    </div>
@endsection

@push('script')
<script>
    console.log('cleo');

</script>
@endpush