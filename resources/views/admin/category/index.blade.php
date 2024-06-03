@extends('layout.app')
@section('title')
Admin.Categories
@endsection
@section('content')
<div class="site-wrap">
    <div class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
          </div>
          <div class="row mt-5 mb-5">
        <div class="col-12">
          @if (session()->has('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif
        </div>
      </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container">

          <div class="row mb-5">
            <div class="col-md-12">

              <div class="row align-items-center">
                <div class="col-md-6 mb-5">
                  <div class="float-md-left mb-4"><h2 class="text-black h5">All Categories</h2></div>

                </div>
                <div class="col-md-6 mb-5">
                    <div class="float-md-right mb-4"><a href="{{ route('show_add_categories') }}"><h2 class="text-black h5">ADD CATEGORY</h2></a></div>

                  </div>
              </div>
              <div class="row mb-5">
                @foreach ($categories as $category)
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-left border">
                            <div class="block-4-text p-4">
                            <h3>{{ $category->title }}</h3>
                                <div class="row mt-5 justify-content-between">
                                    <div class="col-6 text-center">
                                        <a href="{{ route('delete_category',['category'=>$category->id]) }}" class="btn btn-link">Delete</a>
                                    </div>
                                    <div class="col-6 text-center">
                                        <a href="{{ route('show_edit_category',['category'=>$category->id]) }}" class="btn btn-link">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                @endforeach


              </div>

            </div>

          </div>

        </div>
      </div>
</div>
@endsection
