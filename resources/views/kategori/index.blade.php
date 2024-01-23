@extends('layouts.app')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <!-- card -->
        <div class="card my-4 bg-primary-subtle">
            <div class="card-header">
                Tambah Data Kategori
            </div>
            <div class="card-body">
                <form action="{{ route('kategori.store') }}" method="post">
                    @csrf
                    <div class="row">

                        <div class="col-md-10">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Kategori</span>
                                <input type="text" class="form-control" placeholder="Nama Kategori"
                                    name="nama_kategori">
                            </div>
                        </div>

                        <div class="col-md-2">
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
                Data Kategori
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $item)
                            <tr>
                                <td scope="row">{{ $item->nama_kategori }}</td>
                                <td>
                                    <form action="{{ route('kategori.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin menghapus {{ $item->nama_kategori }}?')">Delete</button>
                                        <a href="{{ route('kategori.edit', $item->id) }}" type="button"
                                            class="btn btn-warning">Edit</a>
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
