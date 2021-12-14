@extends('layout.bahagia')

@section('title', 'Data Masker')
@section('judulhalaman', 'Tambah Daftar Masker')

@section('konten')
<div id="kotak">

    <form action="/masker/store" method="post" class="table-responsive">
        {{ csrf_field() }}
        <table class="table table-borderless">
            <tr>
                <td width="28%">
                    <label for=inputkode">Kode</label>
                </td>
                <td>
                    <label>:</label>
                </td>
                <td>
                    <input class="container form-control" type="number" name="kode" id="kode" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="inputmerk">Merk</label>
                </td>
                <td>
                    <label>:</label>
                </td>
                <td>
                    <textarea class="container form-control" type="text" name="merk" id="merk" required></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="inputstock">Stock</label>
                </td>
                <td>
                    <label>:</label>
                </td>
                <td>
                    <input class="container form-control" type="number" name="stock" id="stock" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="inputstatus">Status</label>
                </td>
                <td>
                    <label>:</label>
                </td>
                <td>
                    <select name="opsi" id="opsi">
                        <option selected disabled></option>
                        <option value="Y">Tersedia</option>
                        <option value="T">Tidak Tersedia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/masker" class="btn btn-warning" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection
