@extends('admin.layouts.index')

@section('title', 'Aktivasi Akun')

@section('content')
<div class="clearfix"></div>
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Form Aktivasi Akun</div>
            <hr>
            <form action="{{ route('home.index') }}" method="POST">
            @csrf
              <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="title" class="form-control form-control-rounded" id="title" value="{{ $item->name }}" disabled>
              </div>
              <div class="form-group">
                <label for="title">Role</label>
                <input type="text" name="title" class="form-control form-control-rounded" id="title" value="{{ $item->role->name }}" disabled>
              </div>
              <div class="form-group">
                <label for="title">Status</label>
                {{-- <input type="text" name="title" class="form-control form-control-rounded" id="title" value="{{ $item->status->name }}"> --}}
                <select class="form-select form-control form-control-rounded" aria-label="Default select example">
                  <option selected disabled>Pilih Status</option>
                  <option value="active">Active</option>
                  <option value="non-active">Non-Active</option>
                </select>
              </div>
              <div class="form-group">
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