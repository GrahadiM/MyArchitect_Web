@extends('admin.layouts.index')

@section('title', 'Create Portofolio')

@section('content')
<div class="clearfix"></div>
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-6">
        @if (Auth::user()->role_id == 1)
        <div class="card">
          <div class="card-body">
            <div class="card-title">Form Portofolio</div>
            <hr>
            <form action="{{ route('portofolio.store') }}" method="POST">
            @csrf
              <div class="form-group">
                <label for="user_id">Nama Arsitek</label>
                <select name="user_id" id="user-option" class="form-control form-control-rounded">
                  @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach
                </select>
                {{-- <input type="text" name="name" class="form-control form-control-rounded" id="name" placeholder="Enter Your Name"> --}}
              </div>
              <div class="form-group">
                <label for="project">Nama Projek</label>
                <input type="text" name="project" class="form-control form-control-rounded" id="project" placeholder="Enter Your Project">
              </div>
              <div class="form-group">
                <label for="category_type">Kategori Tipe</label>
                <select name="category_type_id" id="category_type-option" class="form-control form-control-rounded">
                  @foreach ($category_types as $category_type)
                    <option value="{{ $category_type->id }}">{{ $category_type->title }}</option>
                  @endforeach
                </select>
                {{-- <input type="text" name="type" class="form-control form-control-rounded" id="type" placeholder="Enter Category Type"> --}}
              </div>
              <div class="form-group">
                <label for="category_model">Kategori Model</label>
                <select name="category_model_id" id="category_model-option" class="form-control form-control-rounded">
                  @foreach ($category_models as $category_model)
                    <option value="{{ $category_model->id }}">{{ $category_model->title }}</option>
                  @endforeach
                </select>
                {{-- <input type="text" name="model" class="form-control form-control-rounded" id="model" placeholder="Enter Category Model"> --}}
              </div>
              <div class="form-group">
                <label for="luasbangunan">Luas Bangunan</label>
                <input type="text" name="luasbangunan" class="form-control form-control-rounded" id="luasbangunan" placeholder="Enter Your Building Area">
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control form-control-rounded" id="harga" placeholder="Enter Your Price">
              </div>
              <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" class="form-control form-control-rounded" id="image" placeholder="Enter Your Image">
              </div>
              <div class="form-group">
                <label for="video">Video</label>
                <input type="file" name="video" class="form-control form-control-rounded" id="video" placeholder="Enter Your Video">
              </div>
              <div class="form-group">
                <label for="desc">Description</label>
                <input type="text" name="desc" class="form-control form-control-rounded" id="desc" placeholder="Enter Your Description">
              </div>
              <div class="form-group">
                <button type="submit" value="save" class="btn btn-light btn-round px-5">Create</button>
              </div>
            </form>
          </div>
        </div>
        @endif
        @if (Auth::user()->role_id == 2)
        <div class="card">
          <div class="card-body">
            <div class="card-title">Form Portofolio</div>
            <hr>
            <form action="{{ route('portofolio.store') }}" method="POST">
            @csrf
              <div class="form-group">
                <label for="user_id">Nama Arsitek</label>
                <select name="user_id" id="user-option" class="form-control form-control-rounded">
                  @foreach ($users as $user)
                  @if ($user->id == Auth::user()->id)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endif
                  @endforeach
                </select>
                {{-- <input type="text" name="name" class="form-control form-control-rounded" id="name" placeholder="Enter Your Name"> --}}
              </div>
              <div class="form-group">
                <label for="project">Nama Projek</label>
                <input type="text" name="project" class="form-control form-control-rounded" id="project" placeholder="Enter Your Project">
              </div>
              <div class="form-group">
                <label for="category_type">Kategori Tipe</label>
                <select name="category_type_id" id="category_type-option" class="form-control form-control-rounded">
                  @foreach ($category_types as $category_type)
                    <option value="{{ $category_type->id }}">{{ $category_type->title }}</option>
                  @endforeach
                </select>
                {{-- <input type="text" name="type" class="form-control form-control-rounded" id="type" placeholder="Enter Category Type"> --}}
              </div>
              <div class="form-group">
                <label for="category_model">Kategori Model</label>
                <select name="category_model_id" id="category_model-option" class="form-control form-control-rounded">
                  @foreach ($category_models as $category_model)
                    <option value="{{ $category_model->id }}">{{ $category_model->title }}</option>
                  @endforeach
                </select>
                {{-- <input type="text" name="model" class="form-control form-control-rounded" id="model" placeholder="Enter Category Model"> --}}
              </div>
              <div class="form-group">
                <label for="luasbangunan">Luas Bangunan</label>
                <input type="text" name="luasbangunan" class="form-control form-control-rounded" id="luasbangunan" placeholder="Enter Your Building Area">
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control form-control-rounded" id="harga" placeholder="Enter Your Price">
              </div>
              <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" class="form-control form-control-rounded" id="image" placeholder="Enter Your Image">
              </div>
              <div class="form-group">
                <label for="video">Video</label>
                <input type="file" name="video" class="form-control form-control-rounded" id="video" placeholder="Enter Your Video">
              </div>
              <div class="form-group">
                <label for="desc">Description</label>
                <input type="text" name="desc" class="form-control form-control-rounded" id="desc" placeholder="Enter Your Description">
              </div>
              <div class="form-group">
                <button type="submit" value="save" class="btn btn-light btn-round px-5">Create</button>
              </div>
            </form>
          </div>
        </div>
        @endif
      </div><!--End col-lg-6-->
    </div><!--End Row-->
  </div><!--End Container-->
</div><!--End Content-->
@endsection