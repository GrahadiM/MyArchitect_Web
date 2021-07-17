@extends('admin.layouts.index')

@section('title', 'Create Review')

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
            <form action="{{ route('review.store') }}" method="POST">
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
                  @foreach ($portofolios as $porto)
                    <option value="{{ $porto->id }}" style="text-transform: capitalize;">{{ $porto->project }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="comment">Komentar</label>
                <input type="text" name="comment" class="form-control form-control-rounded" id="comment" placeholder="Enter Your Comment">
              </div>
              <div class="form-group">
                <label for="star">Star</label>
                <select name="star" id="star" class="form-control form-control-rounded">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                {{-- <input type="text" name="star" class="form-control form-control-rounded" id="star" placeholder="Enter Your Stars 1-10"> --}}
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