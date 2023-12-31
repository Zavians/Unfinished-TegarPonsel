@extends('layouts.auth')

@section('login')
<div class="login-box">

    
    <!-- /.login-logo -->
    <div class="login-box-body">
        <div class="login-logo">
            <a href="{{url("/")}}">
                <img src="{{ asset ("images/tegar.png")}}" alt="tegar.png" width="150">
            </a>
          </div>
  
      <form action="{{ route ('login')}}" method="post">
        @csrf
        <div class="form-group has-feedback @error('email') has-error @enderror">
          <input type="email" name='email' class="form-control" placeholder="Email" required value="{{old('email')}}">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          @error('email')
    <div class="help-block">{{ $message }}</div>
@enderror
        </div>
        <div class="form-group has-feedback @error('password') has-error @enderror">
          <input type="password" name='password' class="form-control" placeholder="Password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          @error('password')
    <div class="help-block">{{ $message }}</div>
@enderror
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

  
    </div>
    <!-- /.login-box-body -->
  </div>
@endsection