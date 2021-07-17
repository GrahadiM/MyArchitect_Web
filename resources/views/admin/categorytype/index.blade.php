@extends('admin.layouts.index')

@section('title', 'Category Type')

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
                        <div class="card-header">Tabel Katagori Tipe
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('category-type.create') }}">Tambah Kategori</a>
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
                                        <th>Nama</th>
                                        <th>Link</th>
                                        <th>Alat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $item1)
                                    <tr>
                                        <td style="text-transform: capitalize;">{{ $item1->title }}</td>
                                        <td>{{ $item1->slug }}</td>
                                        <td>
                                            <div>
                                                <form action="{{ route('category-type.destroy', $item1->id) }}" method="POST">
                                                    <a href="{{ route('category-type.edit', $item1->id) }}" class="mr-2 btn btn-dark btn-sm">edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="mr-2 btn btn-dark btn-sm">hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>
                                            <p class="text-center">
                                                Halaman : {{ $category->currentPage() }}
                                            </p>
                                        </th>
                                        <th>
                                            <p class="text-center">
                                                Jumlah Data : {{ $category->total() }}
                                            </p>
                                        </th>
                                        <th>
                                            <p class="text-center">
                                                Data Per Halaman : {{ $category->perPage() }}
                                            </p>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="col-12 col-lg-12 justify-content-center">
                            <p class="text-center">
                                <a class="mr-5" href="{{ $category->previousPageUrl() }}"><i class="zmdi zmdi-long-arrow-left"></i></a>
                                <a class="mr-5" href="{{ $category->nextPageUrl() }}"><i class="zmdi zmdi-long-arrow-right"></i></a>
                            </p>
                        </div>
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