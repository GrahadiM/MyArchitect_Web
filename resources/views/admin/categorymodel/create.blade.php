@extends('admin.layouts.index')

@section('title', 'Create Category Model')

@section('content')
<div class="clearfix"></div>
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Form Category Model</div>
            <hr>
            <form action="{{ route('category-model.index') }}" method="POST">
            @csrf
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control form-control-rounded" id="title" placeholder="Enter Category Name">
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