@extends('layout.app')
@section('title')
Log In on Shoppers
@endsection
@section('content')
<div class="site-wrap">
    <div class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0"><a href="{{ route('show_welcome') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Autorization</strong></div>
          </div>
        </div>
      </div>  
  
      <div class="site-section">
        <div class="container">
          <div class="row mt-5 mb-5">
            <div class="col-12">
              @if (session()->has('error'))
              <div class="alert alert-danger">
                {{ session('error') }}
              </div>
            @endif
            </div>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black text-center">Autorization</h2>
            </div>
            <div class="col-md-8 offset-md-2">
  
              <form action="{{ route('auth_user') }}" method="post">
                @method('post')
                @csrf
                <div class="p-3 p-lg-5 border">
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="c_email" name="email" placeholder="" @error('email')
                      is_invalid
                    @enderror>
                      <div class="invalid-feedback d-block">
                        @error('email')
                          {{ $message }}
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                      <input type="password" class="form-control" id="password" name="password" @error('password')
                      is_invalid
                    @enderror>
                      <div class="invalid-feedback d-block">
                        @error('password')
                          {{ $message }}
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-12">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection