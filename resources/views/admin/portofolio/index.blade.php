@extends('admin.layouts.index')

@section('title', 'Portofolio')

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
            <div class="row">
                <!--Start Category Type-->
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">Tabel Portofolio
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        @if (auth()->user()->role_id == 2)
                                            <a class="dropdown-item" href="{{ route('portofolio.create') }}">Tambah Portofolio</a>
                                        @endif
                                        {{-- <a class="dropdown-item" href="javascript:void();">Another action</a>
                                        <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void();">Separated link</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-items-center table-flush table-borderless">
                                <thead>
                                    <tr>
                                        @if (auth()->user()->role_id == 1)
                                        <th>Nama Arsirek</th>
                                        @endif
                                        <th>Nama Project</th>
                                        <th>Tipe Bangunan</th>
                                        <th>Gaya Desain</th>
                                        <th>Luas Bangunan</th>
                                        {{-- <th>Gambar</th>
                                        <th>Video</th>
                                        <th>Deskripsi</th> --}}
                                        <th>Alat</th>
                                    </tr>
                                </thead>
                                @if (auth()->user()->role_id == 1)
                                <tbody>
                                    @foreach ($portofolios as $portofolio)
                                    <tr>
                                        <td style="text-transform: capitalize;">{{ $portofolio->user->name }}</td>
                                        <td style="text-transform: capitalize;">{{ $portofolio->project }}</td>
                                        <td style="text-transform: capitalize;">{{ $portofolio->category_type->title }}</td>
                                        <td style="text-transform: capitalize;">{{ $portofolio->category_model->title }}</td>
                                        <td>{{ $portofolio->luasbangunan }}</td>
                                        {{-- <td>{{ $portofolio->url_image }}</td>
                                        <td>{{ $portofolio->url_video }}</td>
                                        <td>{{ $portofolio->desc }}</td> --}}
                                        <td>
                                            <form action="{{ route('portofolio.destroy', $portofolio->id) }}" method="POST">
                                                <a href="{{ route('portofolio.show', $portofolio->id) }}" class="mr-2 btn btn-dark btn-sm">detail</a>
                                                @if (auth()->user()->role_id == 2)
                                                <a href="{{ route('portofolio.edit', $portofolio->id) }}" class="mr-2 btn btn-dark btn-sm">edit</a>
                                                @endif
                                                @csrf
                                                @method('DELETE')
                                                <button class="mr-2 btn btn-dark btn-sm">hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                @endif
                                @if (auth()->user()->role_id == 2)
                                <tbody>
                                    @foreach ($portofolios as $portofolio)
                                    @if ($portofolio->user->id == Auth::user()->id)
                                    <tr>
                                        <td style="text-transform: capitalize;">{{ $portofolio->project }}</td>
                                        <td style="text-transform: capitalize;">{{ $portofolio->category_type->title }}</td>
                                        <td style="text-transform: capitalize;">{{ $portofolio->category_model->title }}</td>
                                        <td>{{ $portofolio->luasbangunan }}</td>
                                        {{-- <td>{{ $portofolio->url_image }}</td>
                                        <td>{{ $portofolio->url_video }}</td>
                                        <td>{{ $portofolio->desc }}</td> --}}
                                        <td>
                                            <form action="{{ route('portofolio.destroy', $portofolio->id) }}" method="POST">
                                                <a href="{{ route('portofolio.show', $portofolio->id) }}" class="mr-2 btn btn-dark btn-sm">detail</a>
                                                <a href="{{ route('portofolio.edit', $portofolio->id) }}" class="mr-2 btn btn-dark btn-sm">edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="mr-2 btn btn-dark btn-sm">hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                                @endif
                            </table>
                        </div>
                        @if (auth()->user()->role_id == 1)
                        <div class="col-12 col-lg-12 justify-content-center mt-3">
                            <ul class="list-inline">
                                <li class="list-inline-item ml-3">
                                    <p class="text-center">
                                        Halaman : {{ $portofolios->currentPage() }}
                                    </p>
                                </li>
                                <li class="list-inline-item ml-3">
                                    <p class="text-center">
                                        Jumlah Data : {{ $portofolios->total() }}
                                    </p>
                                </li>
                                <li class="list-inline-item ml-3">
                                    <p class="text-center">
                                        Data Per Halaman : {{ $portofolios->perPage() }}
                                    </p>
                                </li>
                            </ul>
                            <p class="text-center">
                                <a class="mr-5" href="{{ $portofolios->previousPageUrl() }}"><i class="zmdi zmdi-long-arrow-left"></i></a>
                                <a class="mr-5" href="{{ $portofolios->nextPageUrl() }}"><i class="zmdi zmdi-long-arrow-right"></i></a>
                            </p>
                        </div>
                        @endif
                    </div>
                </div>
                <!--End Category Type-->
            </div>
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