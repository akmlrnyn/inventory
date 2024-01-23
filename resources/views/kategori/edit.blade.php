@extends('layouts.app')
@section('main')
    <div class="container">
        <a href="index.html" type="button" class="btn btn-primary my-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card bg-primary-subtle">
                <div class="card-header">
                    Ubah Data Kategori
                </div>
                <div class="card-body">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
                        @csrf
                        @method('PUT')
                    <div class="row">

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Kategori</span>
                                <input type="text" class="form-control" placeholder="Nama Kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}">
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


        </div>
    </div>
@endsection