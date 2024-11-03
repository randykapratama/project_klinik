@extends('layouts.app_modern', ['title' => 'Data Pendaftaran'])

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Data Pendaftaran</h3>
            <div class="row mb-3 mt-3">
                <div class="col-md-6">
                    <a href="/daftar/create" class="btn btn-primary btn-md">Tambah Data</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>JENIS KELAMIN</th>
                        <th>TANGGAL DAFTAR</th>
                        <th>POLI</th>
                        <th>KELUHAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftar as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->pasien->nama }}</td>
                            <td>{{ $item->pasien->jenis_kelamin }}</td>
                            <td>{{ $item->tanggal_daftar }}</td>
                            <td>{{ $item->poli }}</td>
                            <td>{{ $item->keluhan }}</td>
                            <td>
                                <a href="/daftar/{{ $item->id }}/edit" class="btn btn-warning btn-sm ml-2 mb-2">Edit</a>
                                <form action="/daftar/{{ $item->id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm ml-2 mb-2"
                                            onclick="return confirm('Yakin ingin menghapus data?')">Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $daftar->links() !!}
        </div>
    </div>
@endsection
