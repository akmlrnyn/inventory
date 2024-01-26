@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- card -->
        <div class="card my-4 bg-secondary-subtle">
            <div class="card-header">
                Tambah Data Ruangan
            </div>
            <div class="card-body">

                <form action="{{ route('ruangan.store') }}" method="post">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Ruangan</span>
                                <input type="text" class="form-control" placeholder="Nama Ruangan" name="nama_ruangan">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Ukuran</label>
                                <select class="form-select" id="inputGroupSelect01" name="ukuran">
                                    <option selected>Pilih...</option>
                                    <option value="small">Kecil</option>
                                    <option value="medium">Sedang</option>
                                    <option value="large">Besar</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect02">PIC Ruangan</label>
                                <select class="form-select" id="inputGroupSelect02" name="user_id">
                                    <option selected>Pilih...</option>
                                    @foreach ($ruangan as $item)
                                    <option value="{{ $item->id }}">{{ $item->user->name }}</option>
                                    @endforeach
                                </select>
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
        <div class="card bg-secondary-subtle">
            <div class="card-header">
                Data Ruangan
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-secondary">
                        <thead>
                            <tr>
                                <th scope="col">Nama Ruangan</th>
                                <th scope="col">Nomor Ruangan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ruangan as $item)
                            <tr>
                                <td scope="row">{{ $item->nama_ruangan }}</td>
                                <td>{{ $item->nomor_ruangan }}</td>
                                <td>
                                    <form action="{{ route('ruangan.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('ruangan.show', $item->id) }}" type="button"
                                            class="btn btn-primary">Detail</a>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin menghapus {{ $item->nama_ruangan }}?')">Delete</button>
                                        <a href="{{ route('ruangan.edit', $item->id) }}" type="button"
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
