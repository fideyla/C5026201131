@extends('layout.bahagia')

@section('title', 'Data Masker')
@section('judulhalaman', 'Daftar Masker')

@section('konten')
<div id="kotak">
    <a href="/masker/tambah"> + Tambah Masker Baru</a>

    <br />
    <br />

    <table id="masker" class="table table-hover table-bordered align-middle">
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach($masker as $m)
        <tr>
            <td>{{ $m->kodemasker }}</td>
            <td>{{ $m->merkmasker }}</td>
            <td>{{ $m->stockmasker }}</td>
            <td>{{ $m->tersedia }}</td>
            <td>
                <a class="btn btn-success" href="/masker/edit/{{ $m->kodemasker }}">Edit</a>
                |
                <a class="btn btn-danger" href="/masker/hapus/{{ $m->kodemasker }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="container-sm">
        <table class="table table-borderless align-middle text-left">
            <tr>
                <th width="15%">Keterangan Status</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>Y</td>
                <td width="5%">:</td>
                <td>Tersedia</td>
            </tr>
            <tr>
                <td>T</td>
                <td>:</td>
                <td>Tidak Tersedia</td>
            </tr>
        </table>
    </div>
</div>
@endsection