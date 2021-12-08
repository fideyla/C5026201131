@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Daftar Data Pegawai')

@section('konten')

<a href="/pegawai"> Kembali</a>

<br />
<br />

<form action="/pegawai/store" method="post" class="table-responsive">
    {{ csrf_field() }}
    <table class="table table-borderless">
        <tr>
            <td>
                <label for="inputnama">Nama</label>
            </td>
            <td>
                <label>:</label>
            </td>
            <td>
                <input class="container form-control" type="text" name="nama" id="inputnama" required>
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
                <input class="container form-control" type="text" name="jabatan" id="inputjab" required>
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
                <input class="container form-control" type="text" name="umur" id="inputumur" required>
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
                <textarea class="container form-control" name="alamat" id="inputalamat" required="required"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;
            </td>
            <td>
                &nbsp;
            </td>
            <td>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </td>
        </tr>
    </table>
</form>
@endsection
