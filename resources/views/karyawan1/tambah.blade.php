@extends('layout.bahagia')

@section('title', 'Data Karyawan')
@section('judulhalaman', 'Tambah Daftar Karyawan')

@section('konten')
<div id="kotak">

    <br />

    <form action="/karyawan1/store" method="post" class="table-responsive">
        {{ csrf_field() }}
        <table class="table table-borderless">
            <tr>
                <td width="28%">
                    <label for="inputNIP">NIP</label>
                </td>
                <td>
                    <label>:</label>
                </td>
                <td>
                    <input class="container form-control" type="text" name="NIP" id="NIP" maxlength="9" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="inputnama">Nama</label>
                </td>
                <td>
                    <label>:</label>
                </td>
                <td>
                    <input class="container form-control" type="text" name="Nama" id="Nama" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="inputpangkat">Pangkat</label>
                </td>
                <td>
                    <label>:</label>
                </td>
                <td>
                    <input class="container form-control" type="text" name="Pangkat" id="Pangkat"  maxlength="5" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="inputgaji">Gaji</label>
                </td>
                <td>
                    <label>:</label>
                </td>
                <td>
                    <input class="container form-control" type="number" name="Gaji" id="Gaji" required="required">
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/karyawan1" class="btn btn-warning" role="button">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </td>
                <td>
                    &nbsp;
                </td>
                <td>
                    &nbsp;
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection
