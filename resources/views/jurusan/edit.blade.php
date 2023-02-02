@extends('main.layout')
@section('content')
    <center>
        <h2>Edit Data Jurusan</h2>
        <form action="/jurusan/update/{{ $jurusan->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Nama Jurusan</td>
                    <td class="bar">
                        <input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button type="submit" class="button-primary">Simpan</button></center>
                        <center><a href="/jurusan/index" class="button-warning">Batal</a></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection