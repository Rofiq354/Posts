@extends('welcome')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="content">
        <h1 class="mb-5">Nama Nama Penulis</h1>
        
        @foreach ($users as $u)
            <ul>
                <li>
                    <h2><a href="/authors/{{ $u->id }}">{{ $u->name }}</a></h2>
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