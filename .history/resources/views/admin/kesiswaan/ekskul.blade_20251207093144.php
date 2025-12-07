@extends('layouts.admin')

@section('title', 'Ekstrakurikuler')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-run"></i>
        </span> Ekstrakurikuler
    </h3>
</div>

<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Ekskul Baru</h4>
                <form class="forms-sample">
                    <div class="form-group">
                        <label>Nama Ekskul</label>
                        <input type="text" class="form-control" placeholder="Contoh: Pramuka">
                    </div>
                    <div class="form-group">
                        <label>Hari & Jam Latihan</label>
                        <input type="text" class="form-control" placeholder="Contoh: Sabtu, 14.00 - 16.00">
                    </div>
                    <div class="form-group">
                        <label>Nama Pembina</label>
                        <input type="text" class="form-control" placeholder="Nama Guru Pembina">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary w-100">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Jadwal Kegiatan</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama Ekskul</th>
                                <th>Jadwal</th>
                                <th>Pembina</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <i class="mdi mdi-human-handsdown text-warning me-2"></i> 
                                    <strong>Pramuka</strong>
                                </td>
                                <td>Sabtu, 14.00</td>
                                <td>Kak Budi</td>
                                <td>
                                    <button class="btn btn-inverse-danger btn-sm btn-icon"><i class="mdi mdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="mdi mdi-soccer text-success me-2"></i> 
                                    <strong>Futsal</strong>
                                </td>
                                <td>Minggu, 08.00</td>
                                <td>Pak Rian</td>
                                <td>
                                    <button class="btn btn-inverse-danger btn-sm btn-icon"><i class="mdi mdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="mdi mdi-brush text-info me-2"></i> 
                                    <strong>Seni Lukis</strong>
                                </td>
                                <td>Kamis, 15.00</td>
                                <td>Bu Ani</td>
                                <td>
                                    <button class="btn btn-inverse-danger btn-sm btn-icon"><i class="mdi mdi-delete"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection