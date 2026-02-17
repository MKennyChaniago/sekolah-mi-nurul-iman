@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Sejarah Sekolah</h4>
                <p class="card-description">Update sejarah singkat sekolah dan fotonya</p>
                
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form class="forms-sample" action="{{ route('admin.sejarah.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="history">Isi Sejarah</label>
                        <textarea class="form-control @error('history') is-invalid @enderror" id="history" name="history" rows="15" required>{{ old('history', $profile->history) }}</textarea>
                        @error('history')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="history_image">Foto / Ilustrasi Sejarah</label>
                        <input type="file" class="form-control @error('history_image') is-invalid @enderror" id="history_image" name="history_image" accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                        @if($profile->history_image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $profile->history_image) }}" alt="Current History Image" style="max-height: 200px; border-radius: 4px;">
                            </div>
                        @endif
                        @error('history_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection