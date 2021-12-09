@extends('layout.bahagia')

@section('title', 'Edit Data Pegawai')
@section('judulhalaman', 'Edit Data Pegawai')

@section('konten')
<div id="kotak">

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

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
            {{ $p->pegawai_nama }}
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
                {{ $p->pegawai_jabatan }}
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
                {{ $p->pegawai_umur }}
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
                {{ $p->pegawai_alamat }}
            </td>
        </tr>
    </table>
</div>
@endforeach
@endsection
