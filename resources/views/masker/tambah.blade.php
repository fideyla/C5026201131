@extends('layout.bahagia')

@section('title', 'Data Masker')
@section('judulhalaman', 'Tambah Daftar Masker')

@section('konten')
<div id="kotak">
    <a href="/masker"> Kembali</a>

    <br />
    <br />

    <form action="/masker/store" method="post" class="table-responsive">
        {{ csrf_field() }}
        <table class="table table-borderless">
            <tr>
                <td>
                    <label for=inputkode">Kode</label>
                </td>
                <td>
                    <label>:</label>
                </td>
                <td>
                    <input class="container form-control" type="number" name="kode" id="kodemasker" required>
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
                    <textarea class="container form-control" type="text" name="merk" id="merkmasker" required></textarea>
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
                    <input class="container form-control" type="number" name="stock" id="stockmasker" required>
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
                    <input type="radio" id="tersedia" name="tersedia" value="Y" checked="checked">
                    <label for="tersedia">
                        Tersedia
                    </label>
                    <br>
                    <input type="radio" id="tidak" name="tersedia" value="T">
                    <label for="tidak">
                        Tidak Tersedia
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection
