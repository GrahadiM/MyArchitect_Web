@extends('admin.layouts.index')

@section('title', 'Update Order')

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
            <form action="{{ route('order.update', $order->id ) }}" method="POST">
            @csrf
            @method('PUT')
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control form-control-rounded" id="nama" value="{{ $order->user->name }}" disabled>
              </div>
              <div class="form-group">
                <label for="portofolio">Portofolio</label>
                <input type="text" class="form-control form-control-rounded" id="portofolio" value="{{ $order->portofolio->project }}" disabled>
              </div>
              <div class="form-group">
                <label for="type">Kategori Tipe</label>
                <input type="text" class="form-control form-control-rounded" id="type" value="{{ $order->category_type->title }}" disabled>
              </div>
              <div class="form-group">
                <label for="model">Kategori Model</label>
                <input type="text" class="form-control form-control-rounded" id="model" value="{{ $order->category_model->title }}" disabled>
              </div>
              <div class="form-group">
                <label for="wa">Nomer WhatsApp</label>
                <input type="text" class="form-control form-control-rounded" id="wa" value="{{ $order->wa }}" disabled>
              </div>
              <div class="form-group">
                <label for="area">Luas Bangunan</label>
                <input type="text" class="form-control form-control-rounded" id="area" value="{{ $order->area }}" disabled>
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control form-control-rounded" id="harga" value="{{ $order->harga }}" disabled>
              </div>
              <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" class="form-control form-control-rounded" id="address" value="{{ $order->address }}" disabled>
              </div>
              <div class="form-group">
                <a href="{{ route('order.index') }}" class="btn btn-danger btn-round px-5">Cancel</a>
                <button type="submit" value="save" class="btn btn-light btn-round px-5">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div><!--End col-lg-6-->
    </div><!--End Row-->
  </div><!--End Container-->
</div><!--End Content-->
@endsection