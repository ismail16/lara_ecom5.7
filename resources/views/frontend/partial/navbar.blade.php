<!-- Header -->
<header id="wn__header" class="header__area header__absolute sticky__header" style="background-color: rgba(70, 117, 53, 0.9);">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-6 col-lg-2">
        <div class="logo">
          <a href="index.html">
            <img src="{{ asset('public/frontend_assets/images/logo/logo.png')}}" alt="logo images">
          </a>
        </div>
      </div>
      <div class="col-lg-8 d-none d-lg-block">
        <nav class="mainmenu__nav">
          <ul class="meninmenu d-flex justify-content-start">
            <li class="drop with--one--item"><a href="{{ route('index') }}">Home</a></li>
            <li class="drop with--one--item"><a href="{{ route('products') }}">Products</a></li>
            <li class="drop"><a href="shop-grid.html">Books</a>
              <div class="megamenu mega03">
                <ul class="item item03">
                  <li class="title">Categories</li>
                  <li><a href="shop-grid.html">Biography </a></li>
                  <li><a href="shop-grid.html">Business </a></li>
                  <li><a href="shop-grid.html">Cookbooks </a></li>
                  <li><a href="shop-grid.html">Health & Fitness </a></li>
                  <li><a href="shop-grid.html">History </a></li>
                </ul>
                <ul class="item item03">
                  <li class="title">Customer Favourite</li>
                  <li><a href="shop-grid.html">Mystery</a></li>
                  <li><a href="shop-grid.html">Religion & Inspiration</a></li>
                  <li><a href="shop-grid.html">Romance</a></li>
                  <li><a href="shop-grid.html">Fiction/Fantasy</a></li>
                  <li><a href="shop-grid.html">Sleeveless</a></li>
                </ul>
                <ul class="item item03">
                  <li class="title">Collections</li>
                  <li><a href="shop-grid.html">Science </a></li>
                  <li><a href="shop-grid.html">Fiction/Fantasy</a></li>
                  <li><a href="shop-grid.html">Self-Improvemen</a></li>
                  <li><a href="shop-grid.html">Home & Garden</a></li>
                  <li><a href="shop-grid.html">Humor Books</a></li>
                </ul>
              </div>
            </li>
            <li class="drop"><a href="#">Pages</a>
              <div class="megamenu dropdown">
                <ul class="item item01">
                  <li><a href="about.html">About Page</a></li>
                  <li class="label2"><a href="portfolio.html">Portfolio</a>
                    <ul>
                      <li><a href="portfolio.html">Portfolio</a></li>
                      <li><a href="portfolio-details.html">Portfolio Details</a></li>
                    </ul>
                  </li>
                  <li><a href="my-account.html">My Account</a></li>
                  <li><a href="cart.html">Cart Page</a></li>
                  <li><a href="checkout.html">Checkout Page</a></li>
                  <li><a href="wishlist.html">Wishlist Page</a></li>
                  <li><a href="error404.html">404 Page</a></li>
                  <li><a href="faq.html">Faq Page</a></li>
                  <li><a href="team.html">Team Page</a></li>
                </ul>
              </div>
            </li>
            <li class="drop"><a href="{{route('blogs')}}">Blog</a>
              <div class="megamenu dropdown">
                <ul class="item item01">
                  <li><a href="{{route('blogs')}}">Blog Page</a></li>
                  <li><a href="{{route('blog_details')}}">Blog Details</a></li>
                </ul>
              </div>
            </li>
            <li><a href="{{ route('contract') }}">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-md-6 col-sm-6 col-6 col-lg-2">
        <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
          <!-- <li class="shop_search"><a class="search__active" href="#"></a></li> -->
          <li class="wishlist"><a href="#"></a></li>
          <li class="shopcart"><a class="_cartbox_active" href="{{ route('carts') }}"><span class="product_qun">{{ App\Models\Cart::totalItems() }}</span></a>
            <!-- Start Shopping Cart -->
            <!-- <div class="block-minicart minicart__active">
              <div class="minicart-content-wrapper">
                <div class="micart__close">
                  <span>close</span>
                </div>
                <div class="items-total d-flex justify-content-between">
                  <span>3 items</span>
                  <span>Cart Subtotal</span>
                </div>
                <div class="total_amount text-right">
                  <span>$66.00</span>
                </div>
                <div class="mini_action checkout">
                  <a class="checkout__btn" href="cart.html">Go to Checkout</a>
                </div>
                <div class="single__items">
                  <div class="miniproduct">
                    <div class="item01 d-flex">
                      <div class="thumb">
                        <a href="product-details.html"><img src="{{ asset('frontend_assets/="images/product/sm-img/1.jpg')}}" alt="product images"></a>
                      </div>
                      <div class="content">
                        <h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
                        <span class="prize">$30.00</span>
                        <div class="product_prize d-flex justify-content-between">
                          <span class="qun">Qty: 01</span>
                          <ul class="d-flex justify-content-end">
                            <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item01 d-flex mt--20">
                      <div class="thumb">
                        <a href="product-details.html"><img src="{{ asset('frontend_assets/="images/product/sm-img/3.jpg')}}" alt="product images"></a>
                      </div>
                      <div class="content">
                        <h6><a href="product-details.html">Impulse Duffle</a></h6>
                        <span class="prize">$40.00</span>
                        <div class="product_prize d-flex justify-content-between">
                          <span class="qun">Qty: 03</span>
                          <ul class="d-flex justify-content-end">
                            <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item01 d-flex mt--20">
                      <div class="thumb">
                        <a href="product-details.html"><img src="{{ asset('frontend_assets/images/product/sm-img/2.jpg')}}" alt="product images"></a>
                      </div>
                      <div class="content">
                        <h6><a href="product-details.html">Compete Track Tote</a></h6>
                        <span class="prize">$40.00</span>
                        <div class="product_prize d-flex justify-content-between">
                          <span class="qun">Qty: 03</span>
                          <ul class="d-flex justify-content-end">
                            <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mini_action cart">
                  <a class="cart__btn" href="cart.html">View and edit cart</a>
                </div>
              </div>
            </div> -->
            <!-- End Shopping Cart -->
          </li>

          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <!-- <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="img rounded-circle" style="width:40px"> -->
              <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="rounded-circle" style="width:40px;">
              <p>&nbsp;&nbsp;{{ Auth::user()->first_name }}<span class="caret"></span></p>

              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre></a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <small><a class="dropdown-item" href="{{ route('user.dashboard') }}">Profile</a></small>
                <small><a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a></small>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>

            </li>
          @endguest


          <!-- <li class="setting__bar__icon"><a class="setting__active" href="#"></a>

            <div class="searchbar__content setting__block">
              <div class="content-inner">
                <div class="switcher-currency">
                  <strong class="label switcher-label">
                    <span>My Account</span>
                  </strong>
                  <div class="switcher-options">
                    <div class="switcher-currency-trigger">
                      <div class="setting__menu">
                        <span><a href="#">Compare Product</a></span>
                        <span><a href="#">My Account</a></span>
                        <span><a href="#">My Wishlist</a></span>
                        <span><a href="#">Sign In</a></span>
                        <span><a href="#">Create An Account</a></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </li> -->

        </ul>
      </div>
    </div>

    <div class="row" style="background-color:black; margin:auto 200px;">
      <div class="col-md-12">
        <div class="input-group mb-2 mt-2">
          <form>
            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <!-- <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label> -->
                <select class="custom-select mr-2" id="inlineFormCustomSelect">
                  <option selected>Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
          </form>
          <input type="text" class="form-control mr-2 col-auto my-1" aria-label="Text input with segmented dropdown button">
          <button type="button" class="btn btn-outline-secondary col-auto my-1"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </div>

  </div>

  <!-- Start Mobile Menu -->
  <div class="row d-none">
    <div class="col-lg-12 d-none">
      <nav class="mobilemenu__nav">
        <ul class="meninmenu">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Pages</a>
            <ul>
              <li><a href="about.html">About Page</a></li>
              <li><a href="portfolio.html">Portfolio</a>
                <ul>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="portfolio-details.html">Portfolio Details</a></li>
                </ul>
              </li>
              <li><a href="my-account.html">My Account</a></li>
              <li><a href="cart.html">Cart Page</a></li>
              <li><a href="checkout.html">Checkout Page</a></li>
              <li><a href="wishlist.html">Wishlist Page</a></li>
              <li><a href="error404.html">404 Page</a></li>
              <li><a href="faq.html">Faq Page</a></li>
              <li><a href="team.html">Team Page</a></li>
            </ul>
          </li>
          <li><a href="shop-grid.html">Shop</a>
            <ul>
              <li><a href="shop-grid.html">Shop Grid</a></li>
              <li><a href="single-product.html">Single Product</a></li>
            </ul>
          </li>
          <li><a href="blog.html">Blog</a>
            <ul>
              <li><a href="blog.html">Blog Page</a></li>
              <li><a href="blog-details.html">Blog Details</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- End Mobile Menu -->
  <div class="mobile-menu d-block d-lg-none">
  </div>
  <!-- Mobile Menu -->
</div>
</header>
<!-- //Header -->


<!-- Start Search Popup -->
<!-- <div class="brown-color box-search-content search_active block-bg close__top">
  <form id="search_mini_form" class="minisearch" action="#">
    <div class="field__search">
      <input type="text" placeholder="Search entire store here...">
      <div class="action">
        <a href="#"><i class="zmdi zmdi-search"></i></a>
      </div>
    </div>
  </form>
  <div class="close__wrap">
    <span>close</span>
  </div>
</div> -->
<!-- End Search Popup -->
<!-- Main wrapper -->
<div class="wrapper" id="wrapper">
