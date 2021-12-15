@extends('layout.bahagia')

@section('title', 'Edit Data Karyawan')
@section('judulhalaman', 'Edit Data Karyawan')

@section('konten')
<div id="kotak">
    <br />

    @foreach($karyawan1 as $k)
    <form action="/karyawan1/update" method="post" class="table-responsive">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $k->NIP }}"> <br />
        <table class="table table-borderless">
            <tr>
                <td width="28%">
                    <label for="inputNIP">NIP</label>
                </td>
                <td>
                    <label>:</label>
                </td>
                <td>
                    <input class="container form-control" type="text" name="NIP" value="{{ $k->NIP }}" id="NIP" maxlength="9" required>
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
                    <input class="container form-control" type="text" name="Nama" value="{{ $k->Nama }}" id="Nama" required>
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
                    <input class="container form-control" type="text" name="Pangkat" value="{{ $k->Pangkat }}" id="Pangkat" maxlength="5" required>
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
                    <input class="container form-control" name="Gaji" id="Gaji" type="number" required="required" value="{{ number_format($k->Gaji, 0, ',', '.') }}">
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
@endforeach
@endsection
