@extends('layout.bahagia')

@section('title', 'Data Masker')
@section('judulhalaman', 'Daftar Masker')

@section('konten')
<div id="kotak">

    <div class="container-fluid">
        <a href="/masker/tambah" class="btn btn-warning" role="button"> + Tambah Masker Baru</a>

        <br />
        <br />


        <form class="text-center" action="/masker/cari" method="GET">
            <div class="form-group">
                <input type="text" id="search-box" class="form-control" name="cari" placeholder="Cari masker berdasarkan merk ... " value="{{ old('cari') }}">
            </div>
            <div class="form-group pt-2">
                <input type="submit" class="btn btn-primary" value="CARI">
            </div>
        </form>

        <br>

        <table id="masker" class="table table-hover table-bordered align-middle">
            <tr>
                <th>Kode</th>
                <th>Merk Masker</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
            @foreach($masker as $m)
            <tr>
                <td>{{ $m->kodemasker }}</td>
                <td>{{ $m->merkmasker }}</td>
                <td>{{ $m->stockmasker }}</td>
                <td>{{ $m->tersedia }}</td>
                <td>

                    <a class="btn btn-2" href="/masker/view/{{ $m->kodemasker }}">View Detail</a>
                    |
                    <a class="btn btn-1" href="/masker/edit/{{ $m->kodemasker }}">Edit</a>
                    |
                    <a class="btn btn-danger" href="/masker/hapus/{{ $m->kodemasker }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="container-fluid">
            <table class="table table-borderless float-left text-left">
                <tr>
                    <th width="15%">Keterangan Status</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>Y</td>
                    <td width="5%">:</td>
                    <td>Tersedia</td>
                </tr>
                <tr>
                    <td>T</td>
                    <td>:</td>
                    <td>Tidak Tersedia</td>
                </tr>
            </table>
            Halaman : {{ $masker->currentPage() }} <br />
            Jumlah Data : {{ $masker->total() }} <br />
            Data Per Halaman : {{ $masker->perPage() }} <br />
            <br>
            {{ $masker->links() }}
        </div>
    </div>
</div>
@endsection
