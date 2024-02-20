@extends('welcome')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="content">
        <div class="d-flex align-items-center justify-content-between">
            <h1>{{ $title }}</h1>
            <a href="/posts/create" class="btn btn-primary">Tambah Post</a>
        </div>

        {{-- <a href="/posts">all</a> --}}
    
        {{-- @foreach ($authore as $a)
            <a href="/authors/{{ $a->id }}" class="text-decoration-none text-danger">{{ $a->name }}</a>
        @endforeach --}}
        <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 g-3 my-3">
            
            @if ($posts->count())
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="card text-center" style="height: 100%;">
                        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
    
                        {{-- edit --}}
                        <a href="posts/{{ $posts[0]->id }}/edit" class="edit-btn btn btn-light position-absolute rounded-pill" style="filter:opacity(50%); top: 5px; right: 5px;" data-id="{{ $posts[0]->id }}" data-title="{{ $posts[0]->title }}" data-image="{{ $posts[0]->image }}" data-excerpt="{{ $posts[0]->excerpt }}"><i class="bi bi-vector-pen"></i></a>
    
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
                            <p>By. <a href="/authors/{{ $posts[0]->author->id }}" class="text-decoration-none text-danger">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none text-danger" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> <span class="text-secondary">{{ $posts[0]->created_at->diffForHumans() }}</span></p>
                            <p class="card-text">{{ $posts[0]->excerpt }}</p>
                        </div>
                        <div class="mt-2 mb-4">
                            <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read more</a>
                            <form action="/posts/{{ $posts[0]->id }}" class="d-inline" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </div>
                        {{-- <div class="card-footer">
                        </div> --}}
                    </div>
                </div>
                @foreach ($posts->skip(1) as $p)
                    <div class="col">
                        <div class="card" style="height: 100%;">
                            {{-- @dd($p->image) --}}
                            <img src="https://source.unsplash.com/500x400?{{ $p->category->name }}" class="card-img-top" alt="...">

                            {{-- edit --}}
                            <a href="posts/{{ $p->id }}/edit" class="edit-btn btn btn-light position-absolute rounded-pill" style="filter:opacity(50%); top: 5px; right: 5px;" data-id="{{ $p->id }}" data-title="{{ $p->title }}" data-image="{{ $p->image }}" data-excerpt="{{ $p->excerpt }}"><i class="bi bi-vector-pen"></i></a>

                            <div class="card-body">
                                <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $p->slug }}">{{ $p->title }}</a></h5>
                                <p>By. <a href="/authors/{{ $p->author->id }}" class="text-decoration-none text-danger">{{ $p->author->name }}</a> <span class="text-secondary">{{ $p->created_at->diffForHumans() }}</span></p>
                                <p class="card-text">{{ $p->excerpt }}</p>
                            </div>
                            <div class="mt-2 mb-4 px-3">
                                <a href="/posts/{{ $p->slug }}" class="btn btn-primary">Read more</a>
                                <form action="/posts/{{ $p->id }}" class="d-inline" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </div>
                            {{-- <div class="card-footer">
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            @else
                <p>No post Found.</p>
            @endif

        </div>
    </div>
@endsection

@push('script')
<script>
    console.log('cleo');

</script>
@endpush