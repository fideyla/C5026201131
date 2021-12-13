@extends('layout.bahagia')

@section('title', 'Data Absensi')
@section('judulhalaman', 'Daftar Absensi Pegawai')

@section('konten')
<div id="kotak">
    <a href="/absen/add" class="btn btn-primary" role="button"> + Tambah Absensi Pegawai</a>

    <br />
    <br />

    <table id="absen" class="table table-hover table-bordered align-middle text-center">
        <tr>
            <th>Nama Pegawai</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach($absen as $a)
        <tr>

            <td>{{ $a->pegawai_nama }}</td>
            <td>{{ $a->Tanggal }}</td>
            <td>{{ $a->Status }}</td>
            <td>
                <a class="btn btn-1" href="/absen/edit/{{ $a->ID }}">Edit</a>
                |
                <a class="btn btn-danger" href="/absen/hapus/{{ $a->ID }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="container-fluid">
        <table class="table table-borderless float-left text-left">
            <tr>
                <th width="15%">Keterangan Status</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>H</td>
                <td width="5%">:</td>
                <td>Hadir</td>
            </tr>
            <tr>
                <td>I</td>
                <td>:</td>
                <td>Izin</td>
            </tr>
            <tr>
                <td>S</td>
                <td>:</td>
                <td>Sakit</td>
            </tr>
            <tr>
                <td>A</td>
                <td>:</td>
                <td>Alpha</td>
            </tr>
        </table>
        {{ $absen->links() }}
    </div>
</div>
@endsection
