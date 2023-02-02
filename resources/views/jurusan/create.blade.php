@extends('main.layout')
@section('content')
    <center>
        <h2>Tambah Data Jurusan</h2>
        <form action="/jurusan/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Nama Jurusan</td>
                    <td class="bar">
                        <input type="text" name="nama_jurusan">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit">Simpan</button></center>
                        <center><a href="/jurusan/index" class="button-warning">Batal</a></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection