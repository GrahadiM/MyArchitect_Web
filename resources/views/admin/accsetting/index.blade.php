@extends('admin.layouts.index')

@section('title', 'Account')

@section('content')
<div class="clearfix"></div>
    <!--Start content-wrapper-->
    <div class="content-wrapper">
        <!-- Start container-fluid-->  
        <div class="container-fluid">
            <!--Start Dashboard Content-->
            <div class="card mt-3">
                <div class="card-content">
                    <div class="row row-group m-0">
                    </div>
                </div>
            </div>
            <!--Start Row-->
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">Tabel Setting Akun
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('account-setting.create') }}">Tambah Akun</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-items-center table-flush table-borderless">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Email</th>
                                        {{-- <th>Alat</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                      <td>{{ $user->name }}</td>
                                      <td>{{ $user->role->name }}</td>
                                      <td>{{ $user->status->name }}</td>
                                      <td>{{ $user->email }}</td>
                                      {{-- <td>
                                        <div>
                                            <form action="{{ route('portofolio.destroy', $user->id) }}" method="POST">
                                                <a href="{{ route('account-setting.show', $user->id) }}" class="mr-2 btn btn-dark btn-sm">detail</a>
                                                <a href="{{ route('account-setting.edit', $user->id) }}" class="mr-2 btn btn-dark btn-sm">edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="mr-2 btn btn-dark btn-sm">hapus</button>
                                            </form>
                                        </div>
                                      </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 col-lg-12 justify-content-center mt-3">
                            <ul class="list-inline">
                                <li class="list-inline-item ml-3">
                                    <p class="text-center">
                                        Halaman : {{ $users->currentPage() }}
                                    </p>
                                </li>
                                <li class="list-inline-item ml-3">
                                    <p class="text-center">
                                        Jumlah Data : {{ $users->total() }}
                                    </p>
                                </li>
                                <li class="list-inline-item ml-3">
                                    <p class="text-center">
                                        Data Per Halaman : {{ $users->perPage() }}
                                    </p>
                                </li>
                            </ul>
                            <p class="text-center">
                                <a class="mr-5" href="{{ $users->previousPageUrl() }}"><i class="zmdi zmdi-long-arrow-left"></i></a>
                                <a class="mr-5" href="{{ $users->nextPageUrl() }}"><i class="zmdi zmdi-long-arrow-right"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->
            <!--End Dashboard Content-->

            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->  
    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
        
    <!--start color switcher-->
    <div class="right-sidebar">
        <div class="switcher-icon">
            <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
        </div>
        <div class="right-sidebar-content">
            <p class="mb-0">Gaussion Texture</p>
            <hr>
            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>
            <p class="mb-0">Gradient Background</p>
            <hr>
            <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
                <li id="theme13"></li>
                <li id="theme14"></li>
                <li id="theme15"></li>
            </ul>
        </div>
    </div>
    <!--end color switcher-->
@endsection