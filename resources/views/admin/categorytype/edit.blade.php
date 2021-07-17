@extends('admin.layouts.index')

@section('title', 'Update Category Type')

@section('content')
<div class="clearfix"></div>
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Form Category Type</div>
            <hr>
            <form action="{{ url('category-type', $item1->id ) }}" method="POST">
            @csrf
            @method('PUT')
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control form-control-rounded" id="title" value="{{ $item1->title }}">
              </div>
              {{-- <div class="form-group">
                <label for="title">Link atau Slug</label>
                <input type="text" name="title" class="form-control form-control-rounded" id="title" value="{{ $item1->slug }}" disabled>
              </div> --}}
              <div class="form-group">
                <a href="{{ route('category-type.index') }}" class="btn btn-danger btn-round px-5">Cancel</a>
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