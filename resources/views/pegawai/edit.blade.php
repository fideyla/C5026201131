@extends('layout.bahagia')

@section('title', 'Edit Data Pegawai')
@section('judulhalaman', 'Edit Data Pegawai')

@section('konten')
<div id="kotak">
    <br />

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post" class="table-responsive">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
        <table class="table table-borderless">
            <tr>
                <td width="28%">
                    <label for="inputnama">Nama</label>
                </td>
                <td>
                    <label>:</label>
                </td>
                <td>
                    <input class="container form-control" type="text" name="nama" value="{{ $p->pegawai_nama }}" id="inputnama" required>
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
                    <input class="container form-control" type="text" name="jabatan" value="{{ $p->pegawai_jabatan }}" id="inputjab" required>
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
                    <input class="container form-control" type="number" name="umur" value="{{ $p->pegawai_umur }}" id="inputumur" required>
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
                    <textarea class="container form-control" name="alamat" id="inputalamat" required="required">{{ $p->pegawai_alamat }}</textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/pegawai" class="btn btn-warning" role="button">
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
