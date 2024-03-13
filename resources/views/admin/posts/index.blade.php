@extends('admin.index')

@section('content')

    <h2 class="my-4">My Posts</h2>
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Tambah Post</a>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Kategori</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        {{-- edit --}}
                        <a href="/dashboard/posts/{{ $post->id }}/edit" class="edit-btn" data-id="{{ $post->id }}" data-title="{{ $post->title }}" data-image="{{ $post->image }}" data-excerpt="{{ $post->excerpt }}"><i class="bi bi-vector-pen"></i></a>

                        {{-- Hapus --}}
                        <form action="/dashboard/posts/{{ $post->id }}" class="d-inline p-0" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn text-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection