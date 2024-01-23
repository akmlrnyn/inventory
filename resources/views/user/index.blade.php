@extends('layouts.app')
@section('main')
    
<!-- container -->

    <div class="container">
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card my-4 bg-primary-subtle">
                <div class="card-header">
                    Tambah Data PIC Ruangan
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Lengkap</span>
                                <input type="text" class="form-control" placeholder="John Doel" name="name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Panggilan</span>
                                <input type="text" class="form-control" placeholder="John" name="username">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Email</span>
                                <input type="email" class="form-control" placeholder="@example.com" name="email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Password</span>
                                <input type="password" class="form-control" placeholder="********" name="password">
                            </div>
                        </div>
                        

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-plus-lg"></i> Berhasil
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- card end -->

            <!-- show data -->
            <div class="card bg-primary-subtle">
                <div class="card-header">
                    Tambah Data PIC Ruangan
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Nama Panggilan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                
                            <tr>
                                <td scope="row">{{ $item->name }}</td>
                                <td>{{ $item->username }}</td>
                                <td>
                                    <form action="{{ route('user.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('user.show', $item->id) }}" type="button" class="btn btn-primary">Detail</a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus {{ $item->name }}?')">Delete</button>
                                        <a href="{{ route('user.edit', $item->id) }}"  type="button" class="btn btn-warning">Edit</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- show data end -->

        </div>
    </div>
@endsection

    <!-- container end -->