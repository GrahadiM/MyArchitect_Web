@extends('admin.layouts.index')

@section('title', 'Create Account')

@section('content')
<div class="clearfix"></div>
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Create Account</div>
            <hr>
            <form action="{{ route('account-setting.index') }}" method="POST">
            @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control form-control-rounded" id="name" placeholder="Enter Your Name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control form-control-rounded" id="email" placeholder="Enter Your Email Address">
              </div>
              <div class="form-group">
                <label for="phone">WhatsApp</label>
                <input type="text" name="phone" class="form-control form-control-rounded" id="phone" placeholder="Enter Your Mobile Number">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" class="form-control form-control-rounded" id="password" placeholder="Enter Password">
              </div>
              <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input type="text" name="password_confirmation" class="form-control form-control-rounded" id="password-confirm" placeholder="Confirm Password">
              </div>
              <div class="form-group py-2">
                <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox2" checked=""/>
                <label for="user-checkbox2">I Agree Terms & Conditions</label>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Register</button>
              </div>
            </form>
          </div>
        </div>
      </div><!--End col-lg-6-->
    </div><!--End Row-->
  </div><!--End Container-->
</div><!--End Content-->
@endsection