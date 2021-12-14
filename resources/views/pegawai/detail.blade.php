@extends('layout.bahagia')

@section('title', 'Detail Data Pegawai')
@section('judulhalaman', 'Detail Data Pegawai')

@section('konten')
<div id="kotak">
    @foreach($pegawai as $p)

    <table class="table table-borderless">
        <tr>
            <td>
                <label for="inputnama">Nama</label>
            </td>
            <td>
                <label>:</label>
            </td>
            <td>
                <div class="container form-control"> {{ $p->pegawai_nama }} </div>
            </td>
        </tr>
        <tr>
            <td>
                <label for="inputjab">Jabatan</label>
            </td>
            <td>
                <label>:</label>
            </td>
            <td>
                <div class="container form-control"> {{ $p->pegawai_jabatan }} </div>
            </td>
        </tr>
        <tr>
            <td>
                <label for="inputumur">Umur</label>
            </td>
            <td>
                <label>:</label>
            </td>
            <td>
                <div class="container form-control"> {{ $p->pegawai_umur }} </div>
            </td>
        </tr>
        <tr>
            <td>
                <label for="inputalamat">Alamat</label>
            </td>
            <td>
                <label>:</label>
            </td>
            <td>
                <div class="container form-control"> {{ $p->pegawai_alamat }} </div>
            </td>
        </tr>
        <tr>
            <td>
                <a href="/pegawai" class="btn btn-warning" role="button"> Kembali</a>
            </td>
        </tr>
    </table>
</div>
@endforeach
@endsection
