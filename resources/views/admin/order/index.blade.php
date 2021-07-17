@extends('admin.layouts.index')

@section('title', 'Order')

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
                <!--Start Orders Type-->
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">Tabel Order
                            {{-- @if (Auth::user()->role_id == 2)
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('order.create') }}">Tambah Kategori</a>
                                    </div>
                                </div>
                            </div>
                            @endif --}}
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-items-center table-flush table-borderless">
                                <thead>
                                    <tr>
                                        @if (auth()->user()->role_id == 1)
                                        <th>Nama</th>
                                        @endif
                                        <th>Paket Harga</th>
                                        <th>Projek</th>
                                        <th>Nomer WA</th>
                                        <th>Tipe Bangunan</th>
                                        <th>Gaya Desain</th>
                                        <th>Luas Bangunan</th>
                                        <th>Alamat</th>
                                        {{-- <th>Alat</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                        @if (auth()->user()->role_id == 1)
                                        <td style="text-transform: capitalize;">{{ $order->user->name }}</td>
                                        @endif
                                        <td style="text-transform: capitalize;">{{ $order->price->price }}</td>
                                        <td style="text-transform: capitalize;">{{ $order->portofolio->project }}</td>
                                        <td>{{ $order->wa }}</td>
                                        <td style="text-transform: capitalize;">{{ $order->portofolio->category_type->title }}</td>
                                        <td style="text-transform: capitalize;">{{ $order->portofolio->category_model->title }}</td>
                                        <td style="text-transform: capitalize;" class="text-right">Rp.{{ $order->price->price }}</td>
                                        <td style="text-transform: capitalize;">{{ $order->address }}</td>
                                        {{-- <td>
                                            <form action="{{ route('order.destroy', $order->id) }}" method="POST">
                                                <a href="{{ route('order.edit', $order->id) }}" class="mr-2 btn btn-dark btn-sm">edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="mr-2 btn btn-dark btn-sm">hapus</button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>
                                            <p class="text-center">
                                                Halaman : {{ $orders->currentPage() }}
                                            </p>
                                        </th>
                                        <th>
                                            <p class="text-center">
                                                Jumlah Data : {{ $orders->total() }}
                                            </p>
                                        </th>
                                        <th>
                                            <p class="text-center">
                                                Data Per Halaman : {{ $orders->perPage() }}
                                            </p>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="col-12 col-lg-12 justify-content-center">
                            <p class="text-center">
                                <a class="mr-5" href="{{ $orders->previousPageUrl() }}"><i class="zmdi zmdi-long-arrow-left"></i></a>
                                <a class="mr-5" href="{{ $orders->nextPageUrl() }}"><i class="zmdi zmdi-long-arrow-right"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--End Orders Type-->
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