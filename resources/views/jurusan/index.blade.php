@extends('main.layout')
@section('content')
    <center>
    <h2>List Data Jurusan</h2>
    <a href="/jurusan/create" class="button-primary">Tambah Data Jurusan</a>
    @if(session('success'))
            <p class="text-success">{{ session('success') }}</p>
            @endif
            @if( session('error'))
            <p class="text-danger">{{ session('error') }}</p>
            @endif
            
        <table cellpadding="10" style="text-align: center;">
            <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                <th>Action</th>
            </tr>
            @foreach($jurusan as $j)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $j->nama_jurusan }}</td>
                <td>
                    <b>
                    <a href="/jurusan/edit/{{ $j->id }}" class="button-warning" style="font-size: 16px">Edit</a>
                    <a href="/jurusan/destroy/{{ $j->id }}" class="button-danger" style="font-size: 16px" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </b>
                </td>        
            </tr>        
            @endforeach
        </table>        
    </center>
@endsection