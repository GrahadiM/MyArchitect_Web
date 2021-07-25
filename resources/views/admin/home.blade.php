@extends('admin.layouts.index')

@section('title', 'Dashboard')

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
                        <div class="col-12 col-lg-6 col-xl-3 border-light">
                            <div class="card-body">
                                <h5 class="text-white mb-0">{{ $arsitek->count() }} Users<span class="float-right"><i class="fa fa-address-card"></i></span></h5>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:100%"></div>
                                </div>
                                <p class="mb-0 text-white small-font">Arsitek <span class="float-right"><a href="{{ route('arsitek.index') }}"><i class="zmdi zmdi-long-arrow-right"></i></a></span></p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-light">
                            <div class="card-body">
                                <h5 class="text-white mb-0">{{ $client->count() }} Users <span class="float-right"><i class="fa fa-users"></i></span></h5>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:100%"></div>
                                </div>
                                <p class="mb-0 text-white small-font">Customer <span class="float-right"><a href="{{ route('client.index') }}"><i class="zmdi zmdi-long-arrow-right"></i></a></span></p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-light">
                            <div class="card-body">
                                <h5 class="text-white mb-0">{{ $order->count() }} <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:100%"></div>
                                </div>
                                <p class="mb-0 text-white small-font">Total Orders <span class="float-right"><a href="{{ route('order.index') }}"><i class="zmdi zmdi-long-arrow-right"></i></a></span></p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-light">
                            <div class="card-body">
                                <h5 class="text-white mb-0">{{ $review->count() }} <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:100%"></div>
                                </div>
                                <p class="mb-0 text-white small-font">Total Reviews <span class="float-right"><a href="{{ route('review.index') }}"><i class="zmdi zmdi-long-arrow-right"></i></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Start Row-->
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">Table Validasi Users
                            <div class="card-action">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-borderless">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->role->name }}</td>
                                        <td>{{ $user->status->name }}</td>
                                        <td>
                                            <a href="{{ route('home.edit', $user->id) }}" class="mr-2 btn btn-dark btn-sm">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>
                                            <p class="text-center">
                                                Halaman : {{ $users->currentPage() }}
                                            </p>
                                        </th>
                                        <th>
                                            <p class="text-center">
                                                Jumlah Data : {{ $users->total() }}
                                            </p>
                                        </th>
                                        <th>
                                            <p class="text-center">
                                                Data Per Halaman : {{ $users->perPage() }}
                                            </p>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="col-12 col-lg-12 justify-content-center mt-3 mb-5">
                                <p class="text-center">
                                    <a class="mr-5" href="{{ $users->previousPageUrl() }}"><i class="zmdi zmdi-long-arrow-left"></i></a>
                                    <a class="mr-5" href="{{ $users->nextPageUrl() }}"><i class="zmdi zmdi-long-arrow-right"></i></a>
                                </p>
                            </div>
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