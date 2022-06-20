@extends('layouts.main')
@section('title')
    <div class="container-fluid rounded mt-4">
        <form action="/user/updateuser/{{ $user -> id }}" method="POST" class="pt-2 pb-2">
            @csrf    
            <div class="form-group w-25">
                <label>Nik User</label>
                <input type="number" name="nik_user" class="form-control" value="{{ $user -> nik_user }}" readonly>
            </div>
            <div class="form-group w-25">
                <label>Nama User</label>
                <input type="text" name="nama_user" class="form-control" value="{{ $user -> nama_user }}" required >
            </div>
            <div class="form-group w-25">
                <label>Nomor Hp User</label>
                <input type="number" name="no_hp" class="form-control" value="{{ $user -> no_hp }}" required >
            </div>
            <div class="form-group w-25">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="{{ $user -> password }}" required >
            </div>
            <div class="form-group pt-4">
                <input type="submit" value="SIMPAN" class="btn btn-outline-info">
            </div>
        </form>
    </div>
    @endsection