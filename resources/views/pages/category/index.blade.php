@extends('welcome')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="content">
        <h1 class="mb-5">Post Categories</h1>
        <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 g-3 my-3">
            @foreach ($category as $c)
                <div class="col">
                    <a href="/categories/{{ $c->slug }}" class="text-decoration-none text-light position-relative d-flex align-items-center justify-content-center">
                        <img src="https://source.unsplash.com/500x700?{{ $c->name }}" alt="" class="img-fluid">
                        <h2 class="position-absolute bg-dark p-5 text-center" style="width: 100%; opacity: 30%;">{{ $c->name }}</h2>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('script')
<script>
    console.log('cleo');

</script>
@endpush