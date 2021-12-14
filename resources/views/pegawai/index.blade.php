@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Daftar Data Pegawai')

@section('konten')
<div id="kotak">

    <div class="container-fluid">
        <a href="/pegawai/tambah" class="btn btn-warning" role="button"> + Tambah Pegawai Baru</a>

        <br/>
        <br/>

        <form class="text-center" action="/pegawai/cari" method="GET">
            <div class="form-group">
                <input type="text" id="search-box" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
            </div>
            <div class="form-group pt-2">
                <input type="submit" class="btn btn-primary" value="CARI">
            </div>
        </form>

        <br>

        <table id="pegawai" class="table table-hover table-bordered align-middle">
            <tr>
                <th width="15%">Nama Pegawai</th>
                <th>Jabatan</th>
                <th width=10%">Umur</th>
                <th width="25%">Alamat</th>
                <th>Opsi</th>
            </tr>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a class="btn btn-2" href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
                    |
                    <a class="btn btn-1" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                    |
                    <a class="btn btn-danger" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
        Halaman : {{ $pegawai->currentPage() }} <br />
        Jumlah Data : {{ $pegawai->total() }} <br />
        Data Per Halaman : {{ $pegawai->perPage() }} <br />
        <br>
        {{ $pegawai->links() }}
    </div>
</div>
@endsection
