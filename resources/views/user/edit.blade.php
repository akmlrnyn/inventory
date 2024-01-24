@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card bg-primary-subtle">
                <div class="card-header">
                    Ubah Data PIC Ruangan
                </div>
                <div class="card-body">
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nama Lengkap</span>
                                    <input type="text" class="form-control" placeholder="John Doel" name="name" value="{{ $user->name }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nama Panggilan</span>
                                    <input type="text" class="form-control" placeholder="John" name="username" value="{{ $user->username }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Email</span>
                                    <input type="email" class="form-control" placeholder="@example.com" name="email" value="{{ $user->email }}">
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
        </div>
        <a href="index.html" type="button" class="btn btn-primary my-2">
            <i class="bi bi-arrow-left"></i>
        </a>
    </div>
@endsection