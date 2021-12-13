@extends('layout.bahagia')

@section('title', 'Detail Masker')
@section('judulhalaman', 'Detail Data Masker')

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
                    <div class="container form-control"> {{ $m->kodemasker }} </div>
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
                    <div class="container form-control"> {{ $m->merkmasker }} </div>
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
                    <div class="container form-control"> {{ $m->stockmasker }} </div>
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
                    <input type="radio" id="option" name="option" value="Y" @if ($m->tersedia === "Y" ) checked="checked" @endif>
                    <label for="tersedia">
                        Tersedia
                    </label>
                    <br>
                    <input type="radio" id="option" name="option" value="T" @if ($m->tersedia === "T" ) checked="checked" @endif>
                    <label for="tidak">
                        Tidak Tersedia
                    </label>
                </td>
            </tr>
        </table>
    </form>
    <script>
        $(':radio:not(:checked)').attr('disabled', true);
    </script>
</div>
@endforeach
@endsection
