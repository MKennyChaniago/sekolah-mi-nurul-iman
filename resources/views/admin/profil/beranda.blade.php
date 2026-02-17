@extends('layouts.admin')

@section('title', 'Pengaturan Beranda (Kepala Madrasah & PPDB)')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pengaturan Beranda & Kepala Madrasah</h4>
                <p class="card-description">
                    Atur informasi Kepala Madrasah dan Link PPDB yang tampil di Halaman Depan.
                </p>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="forms-sample" action="{{ route('admin.beranda.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <h5 class="mt-4 mb-3 text-primary">Informasi Kepala Madrasah</h5>
                    <div class="form-group">
                        <label for="headmaster_name">Nama Kepala Madrasah</label>
                        <input type="text" class="form-control" id="headmaster_name" name="headmaster_name" value="{{ old('headmaster_name', $profile->headmaster_name) }}" placeholder="Contoh: Ahmad Hanafi">
                    </div>

                    <div class="form-group">
                        <label for="headmaster_welcome">Kata Sambutan</label>
                        <textarea class="form-control" id="headmaster_welcome" name="headmaster_welcome" rows="6" placeholder="Masukkan kata sambutan lengkap...">{{ old('headmaster_welcome', $profile->headmaster_welcome) }}</textarea>
                        <small class="text-muted">Teks ini akan muncul sepenuhnya di Halaman Depan.</small>
                    </div>

                    <div class="form-group">
                        <label>Foto Kepala Madrasah</label>
                        <input type="file" name="headmaster_photo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                        @if($profile->headmaster_photo)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $profile->headmaster_photo) }}" alt="Foto Kepala" style="max-width: 200px; border-radius: 10px;">
                            </div>
                        @endif
                    </div>

                    <hr class="my-4">
                    
                    <h5 class="mb-3 text-primary">Link PPDB</h5>
                    <div class="form-group">
                        <label for="ppdb_link">Link Google Form / Pendaftaran</label>
                        <input type="url" class="form-control" id="ppdb_link" name="ppdb_link" value="{{ old('ppdb_link', $profile->ppdb_link) }}" placeholder="https://forms.google.com/...">
                        <small class="text-muted">Link ini akan digunakan pada tombol 'PPDB T.A ... DIBUKA' di Halaman Depan.</small>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Custom file upload input
    $('.file-upload-browse').on('click', function() {
      var file = $(this).parent().parent().parent().find('.file-upload-default');
      file.trigger('click');
    });
    $('.file-upload-default').on('change', function() {
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
</script>
@endsection
