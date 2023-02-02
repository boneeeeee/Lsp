@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>Edit Mata Pelajaran</h2>
            <form action="/mapel/update/{{ $mapel->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Nama Mata Pelajaran</td>
                    <td class="bar"><input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit">Simpan</button></center>
                        <center><a href="/mapel/index" class="button-primary">Kembali</a></center>
                    </td>
                </tr>
            </table>
            </form>
        </b>
    </center>
@endsection