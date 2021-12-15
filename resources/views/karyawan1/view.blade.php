@extends('layout.bahagia')

@section('title', 'Detail Data Karyawan')
@section('judulhalaman', 'Detail Data Karyawan')

@section('konten')
<div id="kotak">
    @foreach($karyawan1 as $k)

    <table class="table table-borderless">
        <tr>
            <td>
                <label for="inputNIP">NIP</label>
            </td>
            <td>
                <label>:</label>
            </td>
            <td>
                <div class="container form-control"> {{ $k->NIP }} </div>
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
                <div class="container form-control"> {{ $k->Nama }} </div>
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
                <div class="container form-control"> {{ $k->Pangkat }} </div>
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
                <div class="container form-control"> {{ number_format($k->Gaji, 0, ',', '.') }} </div>
            </td>
        </tr>
        <tr>
            <td>
                <a href="/karyawan1" class="btn btn-warning" role="button"> Kembali</a>
            </td>
        </tr>
    </table>
</div>
@endforeach
@endsection
