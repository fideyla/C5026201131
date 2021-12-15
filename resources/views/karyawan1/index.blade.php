@extends('layout.bahagia')

@section('title', 'Data Karyawan1')
@section('judulhalaman', 'Daftar Data Karyawan1')

@section('konten')
<div id="kotak">

    <div class="container-fluid">
        <a href="/karyawan1/tambah" class="btn btn-warning" role="button"> + Tambah Karyawan Baru</a>

        <br>
        <br>
        <br>

        <table id="karyawan1" class="table table-hover table-bordered align-middle text-center">
            <tr>
                <th width="15%">NIP</th>
                <th>Nama</th>
                <th width=10%">Pangkat</th>
                <th width="25%">Gaji</th>
                <th>Opsi</th>
            </tr>
            @foreach($karyawan1 as $k)
            <tr>
                <td>{{ $k->NIP }}</td>
                <td>{{ $k->Nama }}</td>
                <td>{{ $k->Pangkat }}</td>
                <td>{{ number_format($k->Gaji, 0, ',', '.') }}</td>
                <td>
                    <a class="btn btn-1" href="/karyawan1/edit/{{ $k->NIP }}">Edit</a>
                    |
                    <a class="btn btn-2" href="/karyawan1/view/{{ $k->NIP }}">View</a>
                </td>
            </tr>
            @endforeach
        </table>
        Halaman : {{ $karyawan1->currentPage() }} <br />
        Jumlah Data : {{ $karyawan1->total() }} <br />
        Data Per Halaman : {{ $karyawan1->perPage() }} <br />
        <br>
        {{ $karyawan1->links() }}
    </div>
</div>
@endsection
