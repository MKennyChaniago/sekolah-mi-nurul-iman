@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title">Galeri Foto Sekolah</h4>
                    <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary btn-sm">
                        <i class="mdi mdi-plus"></i> Tambah Foto
                    </a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="row">
                    @forelse($galleries as $gallery)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top" alt="{{ $gallery->title }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h6 class="card-title mb-1">{{ Str::limit($gallery->title, 30) }}</h6>
                                <p class="text-muted small mb-2">
                                    <i class="mdi mdi-calendar"></i> {{ $gallery->event_date ? date('d M Y', strtotime($gallery->event_date)) : '-' }}
                                </p>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('admin.galeri.edit', $gallery->id) }}" class="btn btn-warning btn-sm btn-icon-text">
                                        <i class="mdi mdi-pencil"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.galeri.destroy', $gallery->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus foto ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm btn-icon-text">
                                            <i class="mdi mdi-delete"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center py-5">
                        <h4 class="text-muted">Belum ada foto di galeri.</h4>
                    </div>
                    @endforelse
                </div>
                
                <div class="mt-3">
                    {{ $galleries->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection