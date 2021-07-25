@extends('admin.layouts.index')

@section('title', 'Customer')

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
                        <div class="card-header">Tabel Inbox atau Email ke Customer
                            <div class="card-action">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-items-center table-flush table-borderless">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Foto Profile</th>
                                        <th>WhatsApp</th>
                                        <th>Alat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                    @if ($customer->user->role->id == 3)
                                    <tr>
                                      <td>{{ $customer->user->name }}</td>
                                      <td>{{ $customer->user->email }}</td>
                                      <td><img src="{{ asset('image/profile/' . $customer->user->url_avatar) }}" class="product-img" alt="product img"></td>
                                      <td>{{ $customer->user->phone }}</td>
                                      <td>{{ $customer->user->gender->name }}</td>
                                      <td>
                                          <a href="http://wa.me/{{ $customer->user->phone }}" target="_blank" class="mr-2 btn btn-dark btn-sm">Inbox</a>
                                          <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to={{ $customer->user->email }}" target="_blank" class="mr-2 btn btn-dark btn-sm">Email</a>
                                      </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
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