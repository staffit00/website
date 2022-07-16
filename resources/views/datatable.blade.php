@extends('welcome')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data Table</h1>
      </div>

      <section class="Form">
        <div class="card">
            <form action="/insert" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="table-responsive">
            <table class="table table-striped">
                <a href="/input"  class="btn btn-primary mb-2"><i class="fa-solid fa-plus"></i> Tambah Data</a>

            <thead>
            @if ( $message = Session::get('success' ))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
            <th scope="col" class="position col-sm-1">No</th>
                <th scope="col">Pengguna</th>
                <th scope="col">Jenis</th>
                <th scope="col">Merk</th>
                <th scope="col">Processor</th>
                <th scope="col">Ram</th>
                <th scope="col">Grafik</th>
                <th scope="col">Hardisk</th>
                <th scope="col">SSD</th>
                <th scope="col">OS</th>
                <th scope="col">Details</th>
                <th scope="col">Action</th>

            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $row)
                <tr>
                <th scope="row">{{$no++}} </th>
                <td>{{$row->hostname}}</td>
                <td>{{$row->jenis}}</td>
                <td>{{$row->merk}}</td>
                <td>{{$row->processor}}</td>
                <td>{{$row->ram}}</td>
                <td>{{$row->graphic }}</td>
                <td>{{$row->hardisk}}</td>
                <td>{{$row->ssd}}</td>
                <td>{{$row->os}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/details/ {{ $row->id }}" type="button" class="btn btn-primary"><i class="fa-solid fa-info"></i></a>
                    </div>
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/edit/ {{ $row->id }}" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="/delete/ {{ $row->id }}" type="button" class="btn btn-primary"><i class="fa-solid fa-trash"></i></a>
                      </div>
                </td>

            </tr>
            @endforeach


                        </tbody>
                    </table>
                    <nav aria-label="...">
                        <ul class="pagination">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><<</a>
                          </li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item ">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">>></a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>

    <div class="section-body">
      </div>
    </section>

@endsection
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
