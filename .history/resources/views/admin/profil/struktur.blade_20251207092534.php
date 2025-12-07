@extends('layouts.admin')

@section('title', 'Struktur Organisasi')

@section('content')
<div class="page-header">
    <h3 class="page-title"> Struktur Organisasi </h3>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Bagan Struktur</h4>
                <p class="card-description"> Upload gambar bagan struktur organisasi terbaru (Format: JPG/PNG) </p>
                
                <form class="forms-sample">
                    
                    <div class="form-group">
                        <label>Upload Gambar Bagan</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" placeholder="Pilih file gambar...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Pratinjau Gambar Saat Ini:</label>
                        <div class="mt-2">
                            <img src="{{ asset('admin/images/dashboard/img_1.jpg') }}" alt="Struktur Saat Ini" class="img-fluid rounded" style="max-height: 300px;">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary me-2">Upload & Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection