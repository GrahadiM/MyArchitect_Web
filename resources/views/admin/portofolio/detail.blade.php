@extends('admin.layouts.index')

@section('title', 'Create Portofolio')

@section('content')
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Form Portofolio</div>
                        <hr>
                        <div class="form-group">
                            <label for="user_id">Nama Arsitek</label>
                            <input disabled type="text" name="user_id" class="form-control form-control-rounded" id="user_id" placeholder="{{ $portofolio->user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="project">Nama Projek</label>
                            <input disabled type="text" name="project" class="form-control form-control-rounded" id="project" placeholder="{{ $portofolio->project }}">
                        </div>
                        <div class="form-group">
                            <label for="category_type">Kategori Tipe</label>
                            <input disabled type="text" name="category_type_id" class="form-control form-control-rounded" id="category_type" placeholder="{{ $portofolio->category_type->title }}">
                        </div>
                        <div class="form-group">
                            <label for="category_model_id">Kategori Model</label>
                            <input disabled type="text" name="category_model_id" class="form-control form-control-rounded" id="category_model_id" placeholder="{{ $portofolio->category_model->title }}">
                        </div>
                        <div class="form-group">
                            <label for="luasbangunan">Luas Bangunan</label>
                            <input disabled type="text" name="luasbangunan" class="form-control form-control-rounded" id="luasbangunan" placeholder="{{ $portofolio->luasbangunan }}">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input disabled type="text" name="harga" class="form-control form-control-rounded" id="harga" placeholder="{{ $portofolio->harga }}">
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input disabled type="text" name="url_image" class="form-control form-control-rounded" id="image" placeholder="{{ $portofolio->url_image }}">
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input disabled type="text" name="url_video" class="form-control form-control-rounded" id="video" placeholder="{{ $portofolio->url_video }}">
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <input disabled type="text" name="desc" class="form-control form-control-rounded" id="desc" placeholder="{{ $portofolio->desc }}">
                        </div>
                        <div class="form-group">
                            <a href="{{ route('portofolio.index') }}" class="btn btn-light btn-round btn-sm px-5">Cancel</a>
                            <a href="{{ route('portofolio.edit', $portofolio->id) }}" class="btn btn-light btn-round btn-sm px-5">Edit</a>
                        </div>
                    </div>
                </div>
            </div><!--End col-lg-6-->
        </div><!--End Row-->
    </div><!--End Container-->
</div><!--End Content-->
@endsection