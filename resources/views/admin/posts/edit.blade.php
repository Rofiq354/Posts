@extends('admin.index')

@push('style')
    <style>
    </style>
@endpush

@section('content')
    <div class="content mt-4">
        <h2 class="mb-4">Halaman Edit</h2>
        <form action="/posts/{{ $post->id }}" class="my-3" method="POST" enctype="multipart/form-data" id="edit-form">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Masukkan Judul</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($post) ? $post->title : old('title') }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="image" name="image">
                <label for="image" class="input-group-text">Upload</label>
            </div>
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Descripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ isset($post) ? $post->description : old('description') }}</textarea>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <a href="{{ url()->previous() }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
    </div>
@endsection

@push('script')
    <script>
        console.log('edit')
        
    </script>
@endpush
