@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="index.html" type="button" class="btn btn-secondary my-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card bg-secondary-subtle">
                <div class="card-header">
                    Tambah Data Barang
                </div>
                <div class="card-body">

                    <form action="{{ route('barang.update', $barang->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Barang</span>
                                <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang" value="{{ $barang->nama_barang }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Kategori Barang</label>
                                <select class="form-select" id="inputGroupSelect01" name="id_kategori">
                                    <option selected value="{{ $barang->kategori->id }}">{{ $barang->kategori->nama_kategori }}</option>
                                    @foreach ($kategori as $item)   
                                    <option value="{{ $item->id }}">
                                        {{ $item->nama_kategori }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>   
                        
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect02">Nama Ruangan</label>
                                <select class="form-select" id="inputGroupSelect02" name="id_ruangan">
                                    <option selected value="{{ $barang->ruangan->id }}">{{ $barang->ruangan->nama_ruangan }}</option>
                                    @foreach ($ruangan as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_ruangan }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect03">Stok/Satuan</label>
                                <input type="text" name="stok" class="form-control" value="{{ $barang->stok }}">
                                <select class="form-select" id="inputGroupSelect03" name="satuan">
                                    <option selected>Pilih...</option>
                                    <option value="unit">Unit</option>
                                    <option value="kilogram">Kilogram</option>
                                    <option value="butir">Butir</option>
                                    <option value="liter">Liter</option>
                                    <option value="lembar">Lembar</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect04">Kondisi</label>
                                <select class="form-select" id="inputGroupSelect04" name="kondisi">
                                    <option selected>Pilih...</option>
                                    <option value="baik">Baik</option>
                                    <option value="rusak">Rusak</option>
                                </select>
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


        </div>
    </div>
@endsection