@extends('layouts.app_modern')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Data Pasien</h3>
            <div class="row mb-3 mt-3">
                <div class="col-md-6">
                    <a href="/pasien/create" class="btn btn-primary btn-md">Tambah Pasien</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NO PASIEN</th>
                        <th>NAMA</th>
                        <th>UMUR</th>
                        <th>JENIS KELAMIN</th>
                        <th>TANGGAL BUAT</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasien as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->no_pasien }}</td>
                        <td>
                            @if ($item->foto)
                              <img src="{{ asset('storage/' . $item->foto) }}" width="50" />
                              @endif
                            {{ $item->nama }}
                        </td>
                        <td>{{ $item->umur }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href="/pasien/{{ $item->id }}/edit" class="btn btn-warning btn-sm ml-2">
                                Edit
                            </a>
                            <form action="/pasien/{{ $item->id }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm ml-2"
                                    onclick="return confirm('Yakin ingin menghapus data?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $pasien->links() !!}
        </div>
    </div>
@endsection
