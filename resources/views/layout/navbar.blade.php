<header class="site-navbar" role="banner">
    <div class="site-navbar-top">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
            <form action="" class="site-block-top-search">
              <span class="icon icon-search2"></span>
              <input type="text" class="form-control border-0" placeholder="Search">
            </form>
          </div>

          <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
            <div class="site-logo">
              <a href="#" class="js-logo-clone">Shoppers</a>
            </div>
          </div>

          <div class="col-6 col-md-4 order-3 order-md-3 text-right">
            <div class="site-top-icons">
              <ul>
                <li><a href="{{route('show_reg')}}"><span class="icon icon-person"></span>Sign In</a></li>
                <li><a href="{{route('show_auth')}}"><span class="icon icon-heart-o"></span>Log In</a></li>
                <li>
                  <a href="#" class="site-cart">
                    <span class="icon icon-shopping_cart"></span>
                    {{-- <span class="count">2</span> --}}
                  </a>
                </li>
                <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
    <nav class="site-navigation text-right text-md-center" role="navigation">
      <div class="container">
        <ul class="site-menu js-clone-nav d-none d-md-block">
          <li class="has-children">
            <a href="{{route('show_welcome')}}">Home</a>
            <ul class="dropdown">
              <li><a href="#">Menu One</a></li>
              <li><a href="#">Menu Two</a></li>
              <li><a href="#">Menu Three</a></li>
              <li class="has-children">
                <a href="#">Sub Menu</a>
                <ul class="dropdown">
                  <li><a href="#">Menu One</a></li>
                  <li><a href="#">Menu Two</a></li>
                  <li><a href="#">Menu Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="has-children">
            <a href="about.html">About</a>
            <ul class="dropdown">
              <li><a href="#">Menu One</a></li>
              <li><a href="#">Menu Two</a></li>
              <li><a href="#">Menu Three</a></li>
            </ul>
          </li>
          <li><a href="{{ route('show_cart') }}">Cart</a></li>
          <li><a href="{{ route('show_catalog') }}">Catalogue</a></li>
          <li><a href="#">New Arrivals</a></li>
          <li class="active"><a href="contact.html">Contact</a></li>
          @auth
              @if (\Illuminate\Support\Facades\Auth::user()->role==1)
          <li class="has-children">
            <a href="">Admin</a>
            <ul class="dropdown">
              <li><a href="{{ route('show_categories') }}">Categories</a></li>
              <li><a href="{{ route('show_add_categories') }}">Add Categories</a></li>
              <li><a href="#">Menu Three</a></li>
              <li class="has-children">
                <a href="#">Sub Menu</a>
                <ul class="dropdown">
                  <li><a href="#">Menu One</a></li>
                  <li><a href="#">Menu Two</a></li>
                  <li><a href="#">Menu Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          @endif
          @endauth

        </ul>
      </div>
    </nav>
  </header>
