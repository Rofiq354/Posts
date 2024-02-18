@extends('welcome')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="content">
        <h1 class="mb-5">Post Categories</h1>
        
        @foreach ($category as $c)
            <ul>
                <li>
                    <h2><a href="/categories/{{ $c->slug }}">{{ $c->name }}</a></h2>
                </li>
            </ul>
        @endforeach
    </div>
@endsection

@push('script')
<script>
    console.log('cleo');

</script>
@endpush