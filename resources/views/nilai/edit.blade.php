@extends('main.layout')
@section('content')
    <center>
        <h2>Ubah Data Nilai</h2>
        <form action="/nilai/update/ {{ $nilai->id }}"  method="post">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">Guru Mapel Kelas</td>
                <td class="bar">
                    <select name="mengajar_id">
                        <option></option>
                        @foreach ($mengajar as $me)
                            @if ($nilai->mengajar_id == $me->id)
                                <option value="{{ $me->id}}" selected>{{ $me->guru->nama_guru }} {{ $me->mapel->nama_mapel }} {{ $me->kelas->nama_kelas }}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>    
            <tr>
                <td class="bar">Siswa</td>
                <td class="bar">
                    <select name="siswa_id">
                        <option></option>
                        @foreach ($siswa as $s)
                            @if ($nilai->siswa_id == $s->id)
                                <option value="{{ $s->id}}" selected>{{ $s->nama_siswa }}</option>
                            @else
                                <option value="{{ $s->id}}">{{ $s->nama_siswa }}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>    
                <td class="bar">Ulangan Harian</td>
                <td class="bar"><input type="number" name="uh" value="{{ $nilai->uh }}"></td>
            </tr>
            <tr>    
                <td class="bar">Ulangan Tengah Semester</td>
                <td class="bar"><input type="number" name="uts" value="{{ $nilai->uts }}"></td>
            </tr>
            <tr>    
                <td class="bar">Ulangan Akhir Semester</td>
                <td class="bar"><input type="number" name="uas" value="{{ $nilai->uas }}"></td>
            </tr>   
            <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="submit">Simpan</button></center>
                    <center><a href="/nilai/index" class="button-warning">Kembali</a></center>
                </td>
            </tr>
        </table>
        </form>
    </center>
@endsection