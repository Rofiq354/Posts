@extends('welcome')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="container" style="padding: 0 150px">
        <div class="content">
            <h1 class="my-4">{{ $post->title }}</h1>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" class="img-fluid">

            <article class="my-4 fs-5">
                {!! $post->body !!}
            </article>
        </div>
        {{-- edit --}}
        <a href="/dashboard/posts/{{ $post->id }}/edit" class="edit-btn btn btn-success mt-4" data-id="{{ $post->id }}" data-title="{{ $post->title }}" data-image="{{ $post->image }}" data-excerpt="{{ $post->excerpt }}"><i class="bi bi-vector-pen"> Edit</i></a>
        <a href="/post" class="btn btn-primary mt-4">Kembali</a>
    </div>
@endsection

@push('script')
<script>
    console.log('cleo');

</script>
@endpush