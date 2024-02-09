@extends('welcome')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="content">
        <h1>Posts</h1>
        <div class="row row-cols-1 row-cols-lg-5 g-3">
            @foreach ($posts as $p)
                <div class="col">
                    <div class="card">
                        {{-- @dd($p->image) --}}
                        <img src="{{ asset('storage/' . $p->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->title }}</h5>
                            <p class="card-text">{{ $p->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection

@push('script')
    
@endpush