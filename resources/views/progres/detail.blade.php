@extends('admin.layouts.index')

@section('title', 'Progres')

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
                <!--Start Progres Type-->
                <div class="col-12 col-lg-12">
                    {{-- <div class="card">
                        <div class="card-header">Tabel Progres
                            @if (Auth::user()->role_id == 2)
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('progres.create') }}">Tambah Kategori</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-items-center table-flush table-borderless">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Portofolio</th>
                                        <th>Nomer WA</th>
                                        <th>Tipe Bangunan</th>
                                        <th>Gaya Desain</th>
                                        <th>Luas Bangunan</th>
                                        <th>Harga</th>
                                        <th>Alamat</th>
                                        <th>Alat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($progress as $progres)
                                    <tr>
                                        <td style="text-transform: capitalize;">{{ $progres->user->name }}</td>
                                        <td style="text-transform: capitalize;">{{ $progres->portofolio->project }}</td>
                                        <td>{{ $progres->wa }}</td>
                                        <td style="text-transform: capitalize;">{{ $progres->category_type->title }}</td>
                                        <td style="text-transform: capitalize;">{{ $progres->category_model->title }}</td>
                                        <td style="text-transform: capitalize;">{{ $progres->area }}</td>
                                        <td style="text-transform: capitalize;" class="text-right">Rp.{{ $progres->harga }}</td>
                                        <td style="text-transform: capitalize;">{{ $progres->address }}</td>
                                        <td>
                                            <div>
                                                <form action="{{ route('progres.destroy', $progres->id) }}" method="POST">
                                                    <a href="{{ route('progres.edit', $progres->id) }}" class="mr-2 btn btn-dark btn-sm">edit</a>
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
                                                Halaman : {{ $progress->currentPage() }}
                                            </p>
                                        </th>
                                        <th>
                                            <p class="text-center">
                                                Jumlah Data : {{ $progress->total() }}
                                            </p>
                                        </th>
                                        <th>
                                            <p class="text-center">
                                                Data Per Halaman : {{ $progress->perPage() }}
                                            </p>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="col-12 col-lg-12 justify-content-center">
                            <p class="text-center">
                                <a class="mr-5" href="{{ $progress->previousPageUrl() }}"><i class="zmdi zmdi-long-arrow-left"></i></a>
                                <a class="mr-5" href="{{ $progress->nextPageUrl() }}"><i class="zmdi zmdi-long-arrow-right"></i></a>
                            </p>
                        </div>
                    </div> --}}
                    <div class="card">
                        <div class="card-header">List Progres
                            @if (Auth::user()->role_id == 2)
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('progres.create') }}">Tambah Kategori</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                  <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Step 1
                                      </button>
                                    </h2>
                                  </div>
                                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <li class="media">
                                            <img src="..." class="mr-5" alt="...">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1">List-based media object</h5>
                                                <p>All my girls vintage Chanel baby. So you can have your cake. Tonight, tonight, tonight, I'm walking on air. Slowly swallowing down my fear, yeah yeah. Growing fast into a bolt of lightning. So hot and heavy, 'Til dawn. That fairy tale ending with a knight in shining armor. Heavy is the head that wears the crown.</p>
                                            </div>
                                        </li>
                                        Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                                    </div>
                                  </div>
                                </div>
                                <div class="card">
                                  <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                      </button>
                                    </h2>
                                  </div>
                                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                      Some placeholder content for the second accordion panel. This panel is hidden by default.
                                    </div>
                                  </div>
                                </div>
                                <div class="card">
                                  <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                      </button>
                                    </h2>
                                  </div>
                                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                      And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Progres Type-->
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