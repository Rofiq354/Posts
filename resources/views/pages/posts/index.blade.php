@extends('welcome')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="content">
        <div class="d-flex align-items-center justify-content-between">
            <h1>Posts</h1>
            <a href="/posts/create" class="btn btn-primary">Tambah Post</a>
        </div>
        <div class="row row-cols-1 row-cols-lg-5 g-3 my-3">
            @foreach ($posts as $p)
                <div class="col">
                    <div class="card">
                        {{-- @dd($p->image) --}}
                        <img src="{{ asset('storage/' . $p->image) }}" class="card-img-top" alt="...">

                        {{-- edit --}}
                        <a href="posts/{{ $p->id }}/edit" class="edit-btn btn btn-light position-absolute rounded-pill" style="filter:opacity(50%); top: 5px; right: 5px;" data-id="{{ $p->id }}" data-title="{{ $p->title }}" data-image="{{ $p->image }}" data-description="{{ $p->description }}"><i class="bi bi-vector-pen"></i></a>

                        <div class="card-body">
                            <h5 class="card-title">{{ $p->title }}</h5>
                            <p class="card-text">{{ $p->description }}</p>
                        </div>
                        <div class="card-footer">
                            <form action="/posts/{{ $p->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </div>
                    </div>
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