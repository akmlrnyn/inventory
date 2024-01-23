@extends('layouts.app')
@section('main')
<div class="container">
    <a href="index.html" type="button" class="btn btn-secondary my-2">
        <i class="bi bi-arrow-left"></i>
    </a>
    <div class="row justify-content-center">
        <!-- card -->
        <div class="card bg-secondary-subtle">
            <div class="card-header">
                Ubah Data Ruangan
            </div>
            <div class="card-body">
                <form action="{{ route('ruangan.update', $ruangan->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Ruangan</span>
                                <input type="text" class="form-control" placeholder="Nama Ruangan" name="nama_ruangan"
                                    value="{{ $ruangan->nama_ruangan }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Ukuran</label>
                                <select class="form-select" id="inputGroupSelect01" name="ukuran">
                                    <option selected>{{ $ruangan->ukuran }}</option>
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
                                    <option selected value="{{ $ruangan->users->id }}">{{ $ruangan->users->name }}
                                    </option>
                                    @foreach ($user as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
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
    </div>
</div>
@endsection
