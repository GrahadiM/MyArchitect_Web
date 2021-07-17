@extends('admin.layouts.index')

@section('title', 'Create Order')

@section('content')
<div class="clearfix"></div>
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Form Order</div>
            <hr>
            <form action="{{ route('order.store') }}" method="POST">
            @csrf
              <div class="form-group">
                <label for="name">Nama</label>
                <select name="user_id" id="name" class="form-control form-control-rounded">
                  @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="portofolio">Portofolio</label>
                <select name="portofolio_id" id="portofolio" class="form-control form-control-rounded">
                  @foreach ($portofolio as $porto)
                    <option value="{{ $porto->id }}" style="text-transform: capitalize;">{{ $porto->project }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="type">Kategori Tipe</label>
                <select name="category_type_id" id="type" class="form-control form-control-rounded">
                  @foreach ($category_type as $type)
                    <option value="{{ $type->id }}">{{ $type->title }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="model">Kategori Model</label>
                <select name="category_model_id" id="model" class="form-control form-control-rounded">
                  @foreach ($category_model as $model)
                    <option value="{{ $model->id }}">{{ $model->title }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="wa">Nomer WhatsApp</label>
                <input type="text" name="wa" class="form-control form-control-rounded" id="wa" placeholder="Enter Your WhatsApp">
              </div>
              <div class="form-group">
                <label for="area">Luas Bangunan</label>
                <input type="text" name="area" class="form-control form-control-rounded" id="area" placeholder="Enter Your Area">
              </div>
              <div class="form-group">
                <label for="price">Harga</label>
                <input type="text" name="harga" class="form-control form-control-rounded" id="price" placeholder="Enter Your Price">
              </div>
              <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" name="address" class="form-control form-control-rounded" id="address" placeholder="Enter Your Address">
              </div>
              <div class="form-group">
                <button type="submit" value="save" class="btn btn-light btn-round px-5">Create</button>
              </div>
            </form>
          </div>
        </div>
      </div><!--End col-lg-6-->
    </div><!--End Row-->
  </div><!--End Container-->
</div><!--End Content-->
@endsection