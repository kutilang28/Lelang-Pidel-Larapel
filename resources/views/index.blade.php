
<!DOCTYPE html>
<html>
  
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Zezmon</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('site')}}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('site')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('site')}}/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="{{asset('site')}}/images/logo.png" alt="" /><span>
              Zezmon
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="container">
              <div class=" mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav justify-content-between ">
                  {{-- <div class="d-none d-lg-flex">
                    <li class="nav-item">
                      <a class="nav-link" href="fruit.html">
                        Customer Number : 01234567890</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="service.html">
                        Demo@gmail.com
                      </a>
                    </li>
                  </div> --}}
                  {{-- <div class=" d-none d-lg-flex">
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">
                        Login / Register
                      </a>
                    </li>
                    <form class="form-inline my-2 ml-5 mb-3 mb-lg-0">
                      <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                    </form>
                  </div> --}}
                </ul>
              </div>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()"></button>
            </div>
            <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                @guest
                <a href="">HOME</a>
                <a href="/login">LOGIN</a>
                <a href="/register">REGISTER</a>
                @else
                <a href="">HOME</a>
                <a href="/logout">LOGOUT</a>
                @endguest
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container-fluid">
                  <div class="row">
                    <div class="offset-md-2 col-md-4">
                      <div class="slider_item-detail">
                        <div>
                          <h2 class="slider_heading">
                            Lelang <br />
                                Cantik
                          </h2>
                          <p>
                            Silahkan berbelanja di lelang cantik:>
                          </p>
                          @guest
                          <div class="d-flex">
                            <a href="/login" class="slider_btn">
                              Login/Signup
                            </a>
                          </div>
                          @else
                          <p>Hallowwwww {{ Auth::user()->name }} </p>
                          @endguest
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="hero_img-box">
                        <img src="{{asset('site')}}/images/hero.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container-fluid">
                  <div class="row">
                    <div class="offset-md-2 col-md-4">
                      <div class="slider_item-detail">
                        <div>
                          <h2 class="slider_heading">
                            50% OFF <br />
                            First order
                          </h2>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nis
                          </p>
                          <div class="d-flex">
                            <a href="" class="slider_btn">
                              Order Now
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="hero_img-box">
                        <img src="{{asset('site')}}/images/hero.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container-fluid">
                  <div class="row">
                    <div class="offset-md-2 col-md-4">
                      <div class="slider_item-detail">
                        <div>
                          <h2 class="slider_heading">
                            50% OFF <br />
                            First order
                          </h2>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nis
                          </p>
                          <div class="d-flex">
                            <a href="" class="slider_btn">
                              Order Now
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="hero_img-box">
                        <img src="{{asset('site')}}/images/hero.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        {{-- </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a> --}}
      </div>
    </section>

    <!-- end slider section -->
  </div>

  <!-- detail section -->
  <section class="detail_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="detail_img-box">
            <img src="{{asset('site')}}/images/139481.png" alt="" width="20px" />
            <br>
            <br>
            <br>
          </div>
        </div>
        <div class=" col-lg-7">
          {{-- <div class="detail_container">
            <div class="detail-box d-box-1">
              <a href="">
                <div class="detail-content">
                  <img src="{{asset('site')}}/images/d-1.png" alt="" />
                  <h5>
                    Care kids
                  </h5>
                </div>
              </a>
            </div>
            <div class="detail-box d-box-2">
              <a href="">
                <div class="detail-content">
                  <img src="{{asset('site')}}/images/d-2.png" alt="" />
                  <h5>
                    Baby boy
                  </h5>
                </div>
              </a>
            </div>
            <div class="detail-box d-box-3">
              <a href="">
                <div class="detail-content">
                  <img src="{{asset('site')}}/images/d-3.png" alt="" />
                  <h5>
                    Baby girl
                  </h5>
                </div>
              </a>
            </div>
            <div class="detail-box d-box-4">
              <a href="">
                <div class="detail-content">
                  <img src="{{asset('site')}}/images/d-4.png" alt="" />
                  <h5>
                    Sale
                  </h5>
                </div>
              </a>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </section>
  <!-- end detail section -->

  <!-- products section -->
  <section class="products_section">
    <div class="heading_container">
      <h2>
        Barang lelangan
      </h2>
      <p>
        Silahkan dilihat barang barang lelangan yang cantik ini
      </p>
    </div>
    <div class="container layout_padding">
      <style>
        .product_img-box img {
            width: 250px;
            height: 250px;
            object-fit: cover; /* This will make sure that the image covers the entire dimension of the container without stretching. */
            display: block;    /* This ensures there are no line breaks or spaces around the image. */
        }
    
        .product_img-box {
            width: 250px;
            height: 250px;
            overflow: hidden; /* This ensures that if an image is bigger than the container, it will be clipped. */
            position: relative; /* This is necessary to ensure the <span> positions itself relative to this box */
        }
    
        .product_img-box span {
            position: absolute; 
            bottom: 10px; /* Positioning the span at the bottom of the image box */
            left: 10px; /* Some spacing from the left */
        }
    </style>
      <div class="product_container">
        @foreach ($data as $item)
            
        <a href="{{ route('bid.show', $item->id) }}">
          <div class="product_box">
            <div class="product_img-box">
              <img src="{{asset('img/'.$item->foto)}}" alt="Product Image" />
              <span>
                {{$item->name}}
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                @currency($item -> starting_bid)
              </span>
              <p>
                {{ Str::limit($item->description, 27) }}
              </p>
            </div>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </section>

  <!-- end products section -->

  <!-- find section -->
  {{-- <section class="find_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-8 offset-md-2">
          <div class="find_container">
            <div class="row">
              <div class="col-sm-6">
                <div class="find_container-img">
                  <img src="{{asset('site')}}/images/find-img.png" alt="" />
                </div>
              </div>
              <div class="col-sm-6">
                <h3>
                  Find Everything <br />
                  From A to Z
                </h3>
                <p>
                  Shop Back to school
                </p>
              </div>
            </div>
          </div>
          <div class="shop_container">
            <div class="row">
              <div class="col-sm-6">
                <p>
                  Shoes
                </p>
                <h3>
                  Shop by catagories
                </h3>
                <div>
                  <a href="">
                    View More
                  </a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="shoe_img-box">
                  <img src="{{asset('site')}}/images/shoes.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="find_img-box">
            <img src="{{asset('site')}}/images/find-hero.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- end find section -->
  <!-- client section -->
  {{-- <section class="client_section layout_padding">
    <div class="container">
      <h2>
        What our Customer says
      </h2>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row layout_padding2">
              <div class="col-md-6">
                <div class="client_box">
                  <div class="client_id-box">
                    <div class="client_img-box">
                      <img src="{{asset('site')}}/images/client.png" alt="" />
                    </div>
                    <h4>Carlac liyo</h4>
                  </div>
                  <div class="client_detail">
                    <p>
                      There are many variations of passages of Lorem Ipsum
                      available, but the majority have suffered alteration in some
                      form, by injected humour, or randomised words which don't look
                      even slightly believable. If you are going to use a passage of
                      Lorem Ipsum, you need to be sure there isn't anything
                      embarrassing hidden in the middle of text.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="client_box">
                  <div class="client_id-box">
                    <div class="client_img-box">
                      <img src="{{asset('site')}}/images/client.png" alt="" />
                    </div>
                    <h4>Carlac liyo</h4>
                  </div>
                  <div class="client_detail">
                    <p>
                      There are many variations of passages of Lorem Ipsum
                      available, but the majority have suffered alteration in some
                      form, by injected humour, or randomised words which don't look
                      even slightly believable. If you are going to use a passage of
                      Lorem Ipsum, you need to be sure there isn't anything
                      embarrassing hidden in the middle of text.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row layout_padding2">
              <div class="col-md-6">
                <div class="client_box">
                  <div class="client_id-box">
                    <div class="client_img-box">
                      <img src="{{asset('site')}}/images/client.png" alt="" />
                    </div>
                    <h4>Carlac liyo</h4>
                  </div>
                  <div class="client_detail">
                    <p>
                      There are many variations of passages of Lorem Ipsum
                      available, but the majority have suffered alteration in some
                      form, by injected humour, or randomised words which don't look
                      even slightly believable. If you are going to use a passage of
                      Lorem Ipsum, you need to be sure there isn't anything
                      embarrassing hidden in the middle of text.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="client_box">
                  <div class="client_id-box">
                    <div class="client_img-box">
                      <img src="{{asset('site')}}/images/client.png" alt="" />
                    </div>
                    <h4>Carlac liyo</h4>
                  </div>
                  <div class="client_detail">
                    <p>
                      There are many variations of passages of Lorem Ipsum
                      available, but the majority have suffered alteration in some
                      form, by injected humour, or randomised words which don't look
                      even slightly believable. If you are going to use a passage of
                      Lorem Ipsum, you need to be sure there isn't anything
                      embarrassing hidden in the middle of text.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row layout_padding2">
              <div class="col-md-6">
                <div class="client_box">
                  <div class="client_id-box">
                    <div class="client_img-box">
                      <img src="{{asset('site')}}/images/client.png" alt="" />
                    </div>
                    <h4>Carlac liyo</h4>
                  </div>
                  <div class="client_detail">
                    <p>
                      There are many variations of passages of Lorem Ipsum
                      available, but the majority have suffered alteration in some
                      form, by injected humour, or randomised words which don't look
                      even slightly believable. If you are going to use a passage of
                      Lorem Ipsum, you need to be sure there isn't anything
                      embarrassing hidden in the middle of text.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="client_box">
                  <div class="client_id-box">
                    <div class="client_img-box">
                      <img src="{{asset('site')}}/images/client.png" alt="" />
                    </div>
                    <h4>Carlac liyo</h4>
                  </div>
                  <div class="client_detail">
                    <p>
                      There are many variations of passages of Lorem Ipsum
                      available, but the majority have suffered alteration in some
                      form, by injected humour, or randomised words which don't look
                      even slightly believable. If you are going to use a passage of
                      Lorem Ipsum, you need to be sure there isn't anything
                      embarrassing hidden in the middle of text.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">

          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">

          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
    <div class="container">
      <div class="item_container">
        <div class="row">
          <div class="col-sm-7">
            <h3>
              Best offers on any makeup items
            </h3>
            <p>
              Contrary to popular belief, Lorem Ipsum is not simply random
              text. It has roots in a piece of classical
            </p>
            <div>
              <a href="">
                Shop Now
              </a>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="item_img-box">
              <img src="{{asset('site')}}/images/items.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- end client section -->

  <!-- sign section -->
  <section class="sign_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h3>
            Sign up for Newsletter
          </h3>
          <p>
            There are many variations of passages of Lorem Ipsum available,
            but the majority have suffered
          </p>
        </div>
        <div class="col-md-7">
          <form action="">
            <input type="email" placeholder="Enter your email" />
            <button>
              Sign Up
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end sign section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container links_container">
      <div class="row ">
        <div class="col-md-3">
          <h3>
            CUSTOMER SERVICE
          </h3>
          <ul>
            <li>
              <a href="">
                International Help
              </a>
            </li>
            <li>
              <a href="">
                Contact Customer Care
              </a>
            </li>
            <li>
              <a href="">
                Return Policy
              </a>
            </li>
            <li>
              <a href="">
                Privacy Policy
              </a>
            </li>
            <li>
              <a href="">
                Shipping Information
              </a>
            </li>
            <li>
              <a href="">
                Promotion Terms
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>
            LET US HELP YOU
          </h3>
          <ul>
            <li>
              <a href="">
                Your Account
              </a>
            </li>
            <li>
              <a href="">
                Your Orders
              </a>
            </li>
            <li>
              <a href="">
                Shipping Rates & Policies
              </a>
            </li>
            <li>
              <a href="">
                Amazon Prime
              </a>
            </li>
            <li>
              <a href="">
                Returns & Replacements
              </a>
            </li>
            <li>
              <a href="">
                Help
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>
            INFORMATION
          </h3>
          <ul>
            <li>
              <a href="">
                About Us
              </a>
            </li>
            <li>
              <a href="">
                Careers
              </a>
            </li>
            <li>
              <a href="">
                Sell on shop
              </a>
            </li>
            <li>
              <a href="">
                Press & News
              </a>
            </li>
            <li>
              <a href="">
                Competitions
              </a>
            </li>
            <li>
              <a href="">
                Terms & Conditions
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>
            OUR SHOP
          </h3>
          <ul>
            <li>
              <a href="">
                Daily Deals
              </a>
            </li>
            <li>
              <a href="">
                App Only Deals
              </a>
            </li>
            <li>
              <a href="">
                Our Hottest Products
              </a>
            </li>
            <li>
              <a href="">
                Gift Vouchers
              </a>
            </li>
            <li>
              <a href="">
                Trending Product
              </a>
            </li>
            <li>
              <a href="">
                Hot Flash Sale
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="follow_container">
        <div class="row">
          <div class="col-md-9">
            <div class="app_container">
              <h3>
                DOWNLOAD OUR APPS

              </h3>
              <div>
                <img src="{{asset('site')}}/images/google-play.png" alt="">
                <img src="{{asset('site')}}/images/apple-store.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="info_social">
              <div>
                <a href="">
                  <img src="{{asset('site')}}/images/fb.png" alt="">
                </a>
              </div>
              <div>
                <a href="">
                  <img src="{{asset('site')}}/images/twitter.png" alt="">
                </a>
              </div>
              <div>
                <a href="">
                  <img src="{{asset('site')}}/images/linkedin.png" alt="">
                </a>
              </div>
              <div>
                <a href="">
                  <img src="{{asset('site')}}/images/instagram.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="{{asset('site')}}/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="{{asset('site')}}/js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>