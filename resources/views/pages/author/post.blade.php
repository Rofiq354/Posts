@extends('welcome')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="content">
        <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 g-3 my-3">
            
            @if ($posts->count())
                {{-- Heading Blog --}}
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="card text-center" style="height: 100%;">
                        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
    
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-decoration-none text-dark" href="/post/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
                            <p><span class="text-secondary">{{ $posts[0]->created_at->diffForHumans() }}</span></p>
                            <p class="card-text">{{ $posts[0]->excerpt }}</p>
                        </div>
                        <div class="mt-2 mb-4">
                            <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Read more</a>
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

                            <div class="card-body">
                                <h5 class="card-title"><a class="text-decoration-none text-dark" href="/post/{{ $p->slug }}">{{ $p->title }}</a></h5>
                                <p><span class="text-secondary">{{ $p->created_at->diffForHumans() }}</span></p>
                                <p class="card-text">{{ $p->excerpt }}</p>
                            </div>
                            <div class="mt-2 mb-4 px-3">
                                <a href="/post/{{ $p->slug }}" class="btn btn-primary">Read more</a>
                                
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