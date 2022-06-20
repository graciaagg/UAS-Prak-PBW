@extends('layouts.main')
@section('title')

<a name="" id="" class=" btn btn-info" href="/dosen/add" role="button"><i class="bi bi-plus-square-fill"></i> ADD DOSEN</a>
    <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/dosen/cari">
        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">NIDN</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Jabatan Fungsional</th>
                    <th scope="col">Pakar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
        <tbody>
        @foreach ($dosen as $id => $d)
            <tr>
                <th scope="row">{{ $dosen -> firstItem() + $id}}</th>
                <td>{{ $d -> nidn }}</td>
                <td>{{ $d -> nama }}</td>
                <td>{{ $d -> status }}</td> 
                <td>{{ $d -> jafung }}</td>
                <td>{{ $d -> pakar }}</td>
                <td>
                    <a href="/dosen/edit/{{ $d -> id}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i> EDIT</a>
                    <a href="/user/delete/{{ $d -> id}}" onclick= "return confirm('Yakin Hapus?')" class="btn btn-outline-danger"><i class="bi bi-x-square"></i> DELETE</a>
                </td>
            </tr>
        @endforeach                
        </tbody>
        </table>
            <span class="float-right"> {{ $dosen ->links()}}</span>
    </div>
    @endsection
    
    