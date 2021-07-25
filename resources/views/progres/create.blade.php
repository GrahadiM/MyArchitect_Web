@extends('admin.layouts.index')

@section('title', 'Create Progres')

@section('content')
<div class="clearfix"></div>
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Form Progres</div>
            <hr>
            <form action="{{ route('progres.store') }}" method="POST">
            @csrf
              <div class="form-group">
                <label for="user_id">Nama anda</label>
                <select name="user_id" id="user_id" class="form-control form-control-rounded">
                  @foreach ($users as $user)
                  @if ($user->id == auth()->user()->id)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endif
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="order_id">Order masuk dari customer</label>
                <select name="order_id" id="order_id" class="form-control form-control-rounded">
                  @foreach ($orders as $order)
                  @if ($order->portofolio->user->id == auth()->user()->id)
                    <option value="{{ $order->id }}">{{ $order->user->name }}</option>
                  @endif
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="name">Nama Progres</label>
                <input type="text" name="name" class="form-control form-control-rounded" id="name" placeholder="Enter Your Progres Name">
              </div>
              <div class="form-group">
                <label for="image">Gambar Progres</label>
                <input name="image" type="file" class="form-control-file" id="image">
              </div>
              <div class="form-group">
                <label for="note">Catatan</label>
                <input type="text" name="note" class="form-control form-control-rounded" id="note" placeholder="Enter Your Note">
              </div>
              <button type="submit" class="btn btn-light btn-round px-5">Create</button>
              <a href="{{ route('progres.index') }}" class="btn btn-danger btn-round px-5">Cancel</a>
            </form>
          </div>
        </div>
      </div><!--End col-lg-6-->
    </div><!--End Row-->
  </div><!--End Container-->
</div><!--End Content-->
@endsection