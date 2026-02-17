@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title">Daftar Berita</h4>
                    <a href="{{ route('admin.berita.create') }}" class="btn btn-primary btn-sm">
                        <i class="mdi mdi-plus"></i> Tambah Berita
                    </a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Thumbnail</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Penulis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($beritas as $index => $berita)
                            <tr>
                                <td>{{ $index + $beritas->firstItem() }}</td>
                                <td>
                                    @if($berita->thumbnail)
                                        <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="Thumbnail" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px;">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>{{ Str::limit($berita->title, 40) }}</td>
                                <td><label class="badge badge-info">{{ $berita->category }}</label></td>
                                <td>
                                    @if($berita->status == 'published')
                                        <label class="badge badge-success">Published</label>
                                    @else
                                        <label class="badge badge-warning">Draft</label>
                                    @endif
                                </td>
                                <td>{{ $berita->author }}</td>
                                <td>
                                    <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn btn-warning btn-sm">
                                        <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Belum ada data berita.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-3">
                    {{ $beritas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection