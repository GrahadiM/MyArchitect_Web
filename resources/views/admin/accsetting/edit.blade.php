@extends('admin.layouts.index')

@section('title', 'Edit Account')

@section('content')
<div class="clearfix"></div>
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Edit Account</div>
            <hr>
            <form action="{{ route('account-setting.update', $user->id ) }}" method="POST">
            @csrf
            @method('PUT')
              <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control form-control-rounded" id="name" value="{{ $user->name }}">
              </div>
              <div class="form-group">
                <label for="role_id">Role</label>
                <select name="role_id" id="role_id" class="form-control form-control-rounded">
                  <option value="{{ $user->role->id }}">{{ $user->role->name }}</option>
                  @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="status_id">Status</label>
                <select name="status_id" id="status_id" class="form-control form-control-rounded">
                  <option value="{{ $user->status->id }}">{{ $user->status->name }}</option>
                  @foreach ($statuss as $status)
                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="gender_id">Gender</label>
                <select name="gender_id" id="gender_id" class="form-control form-control-rounded">
                  <option value="{{ $user->gender->id }}">{{ $user->gender->name }}</option>
                  @foreach ($genders as $gender)
                    <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="text" class="form-control form-control-rounded" id="email" value="{{ $user->email }}">
              </div>
              <div class="form-group">
                <label for="phone">Mobile</label>
                <input name="phone" type="text" class="form-control form-control-rounded" id="phone" value="{{ $user->phone }}">
              </div>
              {{-- <div class="form-group">
                <label for="input-9">Password</label>
                <input type="text" class="form-control form-control-rounded" id="input-9" placeholder="Enter New Password">
              </div>
              <div class="form-group">
                <label for="input-10">Confirm Password</label>
                <input type="text" class="form-control form-control-rounded" id="input-10" placeholder="Confirm Password">
              </div> --}}
              <div class="form-group py-2">
                <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox2" checked=""/>
                <label for="user-checkbox2">I Agree Terms & Conditions</label>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" value="save" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Update</button>
              </div>
            </form>
          </div>
        </div>
      </div><!--End col-lg-6-->
    </div><!--End Row-->
  </div><!--End Container-->
</div><!--End Content-->
@endsection