@extends('layouts.app')
@section('main')
    <div class="container">
        <a href="index.html" type="button" class="btn btn-secondary my-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <div class="row justify-content-center">    
            <!-- show data -->
            <div class="card bg-secondary-subtle">
                <div class="card-header">
                    Detail Data Barang
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-secondary">
                            <tr>
                                <th scope="col">Nomor Barang</th>
                                <td scope="col">:</td>
                                <td scope="col">{{ $barang->nomor_barang }}</td>
                            </tr>

                            <tr>
                                <th scope="col">Nama Barang</th>
                                <td scope="col">:</td>
                                <td scope="col">{{ $barang->nama_barang }}</td>
                            </tr>

                            <tr>
                                <th scope="col">Kategori Barang</th>
                                <td scope="col">:</td>
                                <td scope="col">{{ $barang->kategori->nama_kategori }}</td>
                            </tr>

                            <tr>
                                <th scope="col">Nama Ruangan</th>
                                <td scope="col">:</td>
                                <td scope="col">{{ $barang->ruangan->nama_ruangan }}</td>
                            </tr>

                            <tr>
                                <th scope="col">Kondisi</th>
                                <td scope="col">:</td>
                                <td scope="col">{{ $barang->kondisi }}</td>
                            </tr>

                            <tr>
                                <th scope="col">Stok/Satuan</th>
                                <td scope="col">:</td>
                                <td scope="col">{{ $barang->stok }} {{ $barang->satuan }}</td>
                            </tr>

                        </table>
                    </div>

                </div>
            </div>
            <!-- show data end -->

        </div>
    </div>
@endsection