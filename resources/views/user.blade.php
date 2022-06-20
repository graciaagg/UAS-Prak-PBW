@extends('layouts.main')
@section('title')
    <a name="" id="" class=" btn btn-info" href="/user/adduser" role="button"><i class="bi bi-plus-square-fill"></i> ADD USER</a>
        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/user/cariuser">
            <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nik Pengguna</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">Nomor Hp Pengguna</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
            <tbody>
            @foreach ($user as $id => $u)
                <tr>
                    <th scope="row">{{ $user -> firstItem() + $id}}</th>
                    <td>{{ $u -> nik_user }}</td>
                    <td>{{ $u -> nama_user }}</td>
                    <td>{{ $u -> no_hp }}</td>
                    <td>
                        <a href="/user/edituser/{{ $u -> id}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i> EDIT</a>
                        <a href="/user/deleteuser/{{ $u -> id}}" onclick= "return confirm('Yakin Hapus?')" class="btn btn-outline-danger"><i class="bi bi-x-square"></i> DELETE</a>
                    </td>
                </tr>
            @endforeach                
            </tbody>
            </table>
                <span class="float-right"> {{ $user ->links()}}</span>
        </div>
        @endsection