@extends('layouts.main')
@section('title')

        <div class="container-fluid rounded mt-2">
        @php
            $pakar = explode(',',$dosen -> pakar);
        @endphp
        @method('PUT')
            <form action="/dosen/update/{{ $dosen -> id }}" method="POST" class="pt-1 pb-1">
            @csrf    
                <div class="form-group w-25 pt-0">
                    <label>NIDN</label>
                    <input type="number" name="nidn" class="form-control" value="{{ $dosen -> nidn }}" readonly>
                </div>
                <div class="form-group w-25 pt-0">
                    <label>Nama Dosen</label>
                    <input type="text" name="nama" class="form-control" value="{{ $dosen -> nama }}" required>
                </div>
                <label>Status</label>
                    <div class="form-group w-25 pt-0">
                        <input type="radio" name="status" value="Dosen Tetap" {{$dosen ->status =='Dosen Tetap' ? 'checked':''}} class="form-check-input">
                        <label>Dosen Tetap</label>
                    </div>
                    <div class="form-group w-25 pt-0">
                        <input type="radio" name="status" value="Dosen Tidak Tetap" {{$dosen ->status =='Dosen Tidak Tetap' ? 'checked':''}} class="form-check-input">
                        <label>Dosen Tidak Tetap</label>
                    </div>
                    <div class="form-group w-25 pt-0">
                        <label>Jafung</label>
                        <select name="jafung" class="form-control">
                            <option value="Asisten Ahli" {{$dosen->jafung =='Asisten Ahli' ? 'selected':''}}>Asisten Ahli</option>
                            <option value="Guru Besar" {{$dosen->jafung =='Guru Besar' ? 'selected':''}}>Guru Besar</option>
                            <option value="Tenaga Pengajar" {{$dosen->jafung =='Tenaga Pengajar' ? 'selected':''}}>Tenaga Pengajar</option>
                            <option value="Lektor" {{$dosen->jafung =='Lektor' ? 'selected':''}}>Lektor</option>
                            <option value="Lektor Kepala" {{$dosen->jafung =='Lektor Kepala' ? 'selected':''}}>Lektor Kepala</option>
                        </select>
                    </div>
                <label>Pakar</label>
                    <div class="form-group w-25 pt-0">
                        <input type="checkbox" name="pakar[]" value="AI" {{ in_array('AI', $pakar) ? 'checked' : '' }} class="form-check-input">
                        <label>AI</label>
                    </div>
                    <div class="form-group w-25 pt-0">
                        <input type="checkbox" name="pakar[]" value="WEB" {{ in_array('WEB', $pakar) ? 'checked' :'' }} class="form-check-input">
                        <label>WEB</label>
                    </div>
                    <div class="form-group w-25 pt-0">
                        <input type="checkbox" name="pakar[]" value="DBMS" {{ in_array('DBMS', $pakar) ? 'checked' : '' }} class="form-check-input">
                        <label>DBMS</label>
                    </div>
                <div class="form-group pt-0">
                    <input type="submit" value="SIMPAN" class="btn btn-outline-info">
                </div>
            </form>
        </div>
    @endsection