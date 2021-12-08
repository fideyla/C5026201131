@extends('layout.bahagia')

@section('title', 'Data Absensi')
@section('judulhalaman', 'Daftar Absensi Pegawai')

@section('konten')
<a href="/absen/add"> + Tambah Absensi Pegawai</a>

<br />
<br />

<table class="table table-striped table-hover table-bordered align-middle text-center">
    <tr>
        <th>IDPegawai</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>Opsi</th>
    </tr>
    @foreach($absen as $a)
    <tr>

        <td>{{ $a->IDPegawai }}</td>
        <td>{{ $a->Tanggal }}</td>
        <td>{{ $a->Status }}</td>
        <td>
            <a class="btn btn-success" href="/absen/edit/{{ $a->ID }}">Edit</a>
            |
            <a class="btn btn-danger" href="/absen/hapus/{{ $a->ID }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
<div class="container-sm">
    <table class="table table-borderless align-middle text-left">
        <tr>
            <th width="13%">Keterangan Status</th>
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
</div>
@endsection
