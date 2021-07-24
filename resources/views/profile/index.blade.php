@extends('admin.layouts.index')

@section('title', 'Profile')

@section('content')
<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Your Profile</h4>
                        <p class="card-text"></p>
                        <form class="form" method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-left">Nama</label>
                                            <div class="col-md-10">
                                                <input name="name" id="name" class="form-control" type="text" value="{{ $user->name }}">
                                                <p class="text-danger">{{ $errors->first("name") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-2 col-form-label text-md-left">Email</label>
                                            <div class="col-md-10">
                                                <input name="email" id="email" type="email" class="form-control" placeholder="Email"  value="{{ $user->email }}">
                                                <p class="text-danger">{{ $errors->first("email") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-md-2 col-form-label text-md-left">Password</label>
                                            <div class="col-md-10">
                                                <input value="{{ $user->password }}" name="password" id="password" type="password" class="form-control" placeholder="Masukkan password">
                                                <p class="text-danger">{{ $errors->first("password") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-md-2 col-form-label text-md-left">Nomer Handphone</label>
                                            <div class="col-md-10">
                                                <input name="phone" type="text" id="phone" class="form-control" value="{{ $user->phone }}">
                                                <p class="text-danger">{{ $errors->first("phone") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gender" class="col-md-2 col-form-label text-md-left">Jenis Kelamin</label>
                                            <div class="col-md-10">
                                                <select name="gender" class="form-control">
                                                    <option value="{{ $user->gender->id }}">{{ $user->gender->name }}</option>
                                                    @foreach ($genders as $gender)
                                                    @endforeach
                                                    <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                                </select>
                                                <p class="text-danger">{{ $errors->first("gender") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="city" class="col-md-2 col-form-label text-md-left">Kota</label>
                                            <div class="col-md-10">
                                                <input name="city" type="text" id="city" class="form-control" value="{{ $user->city }}">
                                                <p class="text-danger">{{ $errors->first("city") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class="col-md-2 col-form-label text-md-left">Alamat</label>
                                            <div class="col-md-10">
                                                <input name="address" type="text" id="address" class="form-control" value="{{ $user->address }}">
                                                <p class="text-danger">{{ $errors->first("address") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="desc" class="col-md-2 col-form-label text-md-left">Deskripsi</label>
                                            <div class="col-md-10">
                                                <input name="desc" type="text" id="desc" class="form-control" value="{{ $user->desc }}">
                                                <p class="text-danger">{{ $errors->first("desc") }}</p>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label for="password-confirm" class="col-md-2 col-form-label text-md-left">{{ __('Confirm Password') }}</label>
                
                                            <div class="col-md-10">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="url_avatar">Masukkan Foto Profile</label>
                                            <input name="url_avatar" type="file" class="form-control-file" id="url_avatar">
                                            <img alt="url_avatar" src="{{ asset('image/profile/' . $user->url_avatar) }}" class="img-fluid" style="width: 200px; margin-top: 1rem;">
                                            <p class="text-danger">{{ $errors->first("url_avatar") }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-actions col-6"></div>
                                <div class="form-actions col-6 d-flex justify-content-end">
                                    <button value="save" type="submit" class="btn btn-light btn-round px-5 mr-3">Submit</button>
                                    <a href="{{ url('/') }}" class="btn btn-danger btn-round px-5">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection