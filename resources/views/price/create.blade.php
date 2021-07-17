@extends('admin.layouts.index')

@section('title', 'Create Price')

@section('content')
<div class="clearfix"></div>
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Form Price</div>
            <hr>
            <form action="{{ route('price.store') }}" method="POST">
            @csrf
              <div class="form-group">
                <label for="name">Nama</label>
                <select name="user_id" id="name" class="form-control form-control-rounded">
                  @foreach ($users as $user)
                  @if ($user->id == auth()->user()->id)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endif
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="name">Nama Paket</label>
                <input type="text" name="name" class="form-control form-control-rounded" id="name" placeholder="Enter Your Name for Label">
              </div>
              <div class="form-group">
                <label for="price">Harga</label>
                <input type="text" name="price" class="form-control form-control-rounded" id="price" placeholder="Enter Your Price 1.000.000">
              </div>
              <div class="form-group">
                <label for="desc">Keterangan</label>
                <input type="text" name="desc" class="form-control form-control-rounded" id="desc" placeholder="Enter Your Desc">
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