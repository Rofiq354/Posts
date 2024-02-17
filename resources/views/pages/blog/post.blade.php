@extends('welcome')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="content">
        <h1>{{ $post->title }}</h1>
        {!! $post->body !!}
        <a href="/posts">Kembali</a>
    </div>
@endsection

@push('script')
<script>
    console.log('cleo');

</script>
@endpush