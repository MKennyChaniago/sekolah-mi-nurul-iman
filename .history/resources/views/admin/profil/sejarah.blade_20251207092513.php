@extends('layouts.admin')

@section('title', 'Sejarah Madrasah')

@section('content')
<div class="page-header">
    <h3 class="page-title"> Sejarah Madrasah </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sejarah</li>
        </ul>
    </nav>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Sejarah Singkat</h4>
                <p class="card-description"> Ceritakan perjalanan berdirinya MI Nurul Iman </p>
                
                <form class="forms-sample">
                    <div class="form-group">
                        <label>Foto Gedung / Sejarah (Opsional)</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" placeholder="Upload Image">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sejarah">Isi Sejarah</label>
                        <textarea class="form-control" id="sejarah" rows="15">
MI Nurul Iman didirikan pada tahun 1990 oleh.... (Ini contoh teks dummy, nanti Admin bisa edit di sini).

Awalnya madrasah ini hanya memiliki 3 ruang kelas...
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary me-2">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection