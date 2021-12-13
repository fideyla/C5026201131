@extends('layout.bahagia')

@section('title', 'Edit Data Masker')
@section('judulhalaman', 'Edit Data Masker')

@section('konten')
<div id="kotak">
    <a href="/masker"> Kembali</a>

    <br />
    <br />

    @foreach($masker as $m)
    <form action="/masker/update" method="post" class="table-responsive">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $m->kodemasker }}"> <br />
        <table class="table table-borderless">
            <tr>
                <td>
                    <label for="inputkode">Kode</label>
                </td>
                <td>
                    <label>:</label>
                </td>
                <td>
                    <input class="container form-control" type="number" name="kode" value="{{ $m->kodemasker }}" id="kode" required>
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
                    <textarea class="container form-control" name="merk" id="merk" required>{{ $m->merkmasker }}</textarea>
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
                    <input class="container form-control" type="number" name="stock" value="{{ $m->stockmasker }}" id="stock" required>
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
                        <option value="Y" @if ($m->tersedia === "Y" ) selected @endif>Tersedia</option>
                        <option value="T" value="T" @if ($m->tersedia === "T" ) selected @endif>Tidak Tersedia</option>
                    </select>
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
</div>
@endforeach
@endsection
