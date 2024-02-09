@extends('welcome')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="content">
        <h1>Tambah Posts</h1>
        <form action="{{ url('posts') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Masukkan Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
                <label for="image" class="input-group-text">Upload</label>
            </div>
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Descripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@push('script')
    
@endpush