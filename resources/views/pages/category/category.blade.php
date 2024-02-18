@extends('welcome')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="content">
        <h1 class="mb-5">Post Category : {{ $category }}</h1>
        
        @foreach ($posts as $post)
            <article>
                <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                <p>{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </div>
@endsection

@push('script')
<script>
    console.log('cleo');

</script>
@endpush