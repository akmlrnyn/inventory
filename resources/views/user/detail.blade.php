@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <!-- show data user -->
            <div class="card my-4 bg-primary-subtle">
                <div class="card-header">
                    Tambah Data PIC Ruangan
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-primary">

                            <tr>
                                <th scope="col">Nama Lengkap</th>
                                <td scope="col">:</td>
                                <td scope="col">{{ $user->name }}</td>
                            </tr>

                            <tr>
                                <th scope="col">Nama Panggilan</th>
                                <td scope="col">:</td>
                                <td scope="col">{{ $user->username }}</td>
                            </tr>

                            <tr>
                                <th scope="col">Email</th>
                                <td scope="col">:</td>
                                <td scope="col">{{ $user->email }}</td>
                            </tr>

                        </table>
                    </div>

                </div>
            </div>
            <!-- show data user end -->

            <!-- show data room -->
            <div class="card bg-primary-subtle">
                <div class="card-header">
                    Detail Room
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-primary">

                            <tr>
                                <th scope="col">Nama Ruangan</th>
                                <th scope="col">Nomor Ruangan</th>
                            </tr>

                            <tr>
                                <td scope="col">Ruangan Sabun</td>
                                <td scope="col">Ruangan 623</td>
                            </tr>

                        </table>
                    </div>

                </div>
            </div>
            <!-- show data room end -->

        </div>
        <a href="{{ url('user') }}" type="button" class="btn btn-primary my-2">
            <i class="bi bi-arrow-left"></i>
        </a>
    </div>
@endsection
