@extends('layout.app')
@section('title')
Admin.Add category
@endsection
@section('content')
<div class="site-wrap">
    <div class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0"><a href="#">Admin</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Edit Category</strong></div>
          </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black text-center">Edit Category</h2>
            </div>
            <div class="col-md-6">

              <form action="{{ route('edit_category',['category'=>$category]) }}" method="post">
                @csrf
                @method('put')

                <div class="p-3 p-lg-5 border">
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="title" class="text-black">Title<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-12">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="SAVE">
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
