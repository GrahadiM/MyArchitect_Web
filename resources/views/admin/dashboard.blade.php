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
                        <div class="col-12 col-lg-6 col-xl-6 border-light">
                            <div class="card-body">
                                <h5 class="text-white mb-0">{{ $order->count() }} <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:100%"></div>
                                </div>
                                <p class="mb-0 text-white small-font">Total Orders <span class="float-right"><a href="{{ route('order.index') }}"><i class="zmdi zmdi-long-arrow-right"></i></a></span></p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 border-light">
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