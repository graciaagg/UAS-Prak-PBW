@extends('layouts.main')
@section('title')
    <div class="container-fluid rounded mt-2">
        <form action="/dosen/simpan" method="POST" class="pt-1 pb-1">
            @csrf    
            <div class="form-group w-25 pt-0">
                <label>NIDN</label>
                <input type="number" name="nidn" class="form-control" placeholder="Masukan NIDN" required>
            </div>
            <div class="form-group w-25 pt-0">
                <label>Nama Dosen</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
            </div>
            <label>Status</label>
            <div class="form-group w-25 pt-0">
                <input type="radio" name="status" value="Dosen Tetap" class="form-check-input">
                <label>Dosen Tetap</label>
            </div>
            <div class="form-group w-25 pt-0">
                <input type="radio" name="status" value="Dosen Tidak Tetap" class="form-check-input">
                <label>Dosen Tidak Tetap</label>
            </div>
            <div class="form-group w-25 pt-0">
                <label>Jafung</label>
                <select name="jafung" class="form-control">
                    <option value="Asisten Ahli">Asisten Ahli</option>
                    <option value="Guru Besar">Guru Besar</option>
                    <option value="Tenaga Pengajar">Tenaga Pengajar</option>
                    <option value="Lektor">Lektor</option>
                    <option value="Lektor Kepala">Lektor Kepala</option>
                </select>
            </div>
            <label>Pakar</label>
            <div class="form-group w-25 pt-0">
                <input type="checkbox" name="pakar[]" value="AI"class="form-check-input">
                <label>AI</label>
            </div>
            <div class="form-group w-25 pt-0">
                <input type="checkbox" name="pakar[]" value="WEB"class="form-check-input">
                <label>WEB</label>
            </div>
            <div class="form-group w-25 pt-0">
                <input type="checkbox" name="pakar[]" value="DBMS"class="form-check-input">
                <label>DBMS</label>
            </div>
            <div class="form-group pt-0">
                <input type="submit" value="SIMPAN" class="btn btn-outline-info">
            </div>
        </form>
    </div>
    @endsection