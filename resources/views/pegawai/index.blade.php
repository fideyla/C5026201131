@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Daftar Data Pegawai')

@section('konten')
<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

<br />
<br />

<table class="table table-striped table-hover table-bordered align-middle text-center">
    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
    @foreach($pegawai as $p)
    <tr>
        <td>{{ $p->pegawai_nama }}</td>
        <td>{{ $p->pegawai_jabatan }}</td>
        <td>{{ $p->pegawai_umur }}</td>
        <td>{{ $p->pegawai_alamat }}</td>
        <td>
            <a class="btn btn-success" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
            |
            <a class="btn btn-danger" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
