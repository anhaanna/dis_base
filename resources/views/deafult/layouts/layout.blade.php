{{-- {{ dd(Config::get('allproducts')) }} --}}

@section('header')
<head>
    <title></title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ url('css/main.css') }} ">
    <link rel="stylesheet" href=" {{ url('css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href=" {{ url('css/owl.theme.default.min.css') }} ">
    <link rel="stylesheet" href=" {{ url('css/animate.css') }} ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script type="text/javascript" src=" {{ url('js/jquery-3.2.1.min.js') }} "></script>
    <script type="text/javascript" src=" {{ url('js/main.js') }} "></script>
    <script type="text/javascript" src=" {{ url('js/owl.carousel.min.js') }} "></script>
</head>
<!-- <div class="top-bar">
        <div class="container">
            <div class="pink-right-side">
                <a href="{{  route('contact-us/') }}">Contact Us</a>
                <div class="social_icons">
                    <a class="social social_facebook" href="https://web.facebook.com/disguisefragrances?_rdc=1&_rdr">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="social social_twitter" href="https://twitter.com/disguiseuae">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="social social_youtube" href="https://www.youtube.com/watch?v=I9pQ1cs68uw">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="social social_instagram" href="https://www.instagram.com/disguisefragrances/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> -->

  <div class="nav-bar">
    <div class="nav-menu">
      <div class="wrapper">
        <div class="left-side">
          <a href="{{ route('home') }}">
            <img class="logo" src="{{ url('images/disguise.png') }}" alt="light logo">
          </a>
        </div>
        <div class="right-side">
          <ul class="nav-ul">
            <li><a href="/">HOME</a></li>
            <li><a href=" {{  route('the-brand/') }} ">THE BRAND</a></li>
            <li class="perfumes"><a href="#">PERFUMES</a>
                <div class="dropdown dropdown-perfume">
                  <div class="nav-box box-1">
                    <ul>
                      <li><h3>MEN</h3></li>

                     @foreach($allproducts['mens_parfumes'] as $mens_parfumes)
                            <li><a href=" {{ route('/product',['name'=>$mens_parfumes['url_title']]) }} ">{{ $mens_parfumes['title'] }}</a></li>
                     @endforeach

                    </ul>
                  </div>
                  <div class="nav-box box-2">
                    <ul>
                      <li><h3>WOMEN</h3></li>
                     @foreach($allproducts['women_parfumes'] as $women_parfumes)
                            <li><a href=" {{ route('/product',['name'=>$women_parfumes['url_title']]) }} ">{{ $women_parfumes['title'] }}</a></li>
                     @endforeach

                  </ul>
                  </div>
                  <div class="nav-box box-3">
                    <a href="{{ route('/product-category',['name'=>'mens-parfumes'])  }}"><h3>MEN'S PARFUMES</h3></a>
                    <div class="nav-img">

                      <a href="{{ route('/product-category',['name'=>'mens-parfumes'])  }}">
                        <img src="{{ url('images/Mens.png') }}">
                      </a>
                    </div>
                  </div>
                  <div class="nav-box box-4">
                    <a href="{{ route('/product-category',['name'=>'women-parfumes']) }}"><h3>WOMEN'S PARFUMES</h3></a>
                    <div class="nav-img">
                      <a href="{{ route('/product-category',['name'=>'women-parfumes']) }}">
                        <img src=" {{ url('images/Nav-Link-WomenDeo.jpg') }}">
                      </a>

                    </div>
                  </div>
                </div>
            </li>
            <li class="deodorants"><a href="#">DEODORANTS</a>
              <div class="dropdown dropdown-deodorant">
                  <div class="nav-box box-1">
                    <ul>
                      <li><h3>MEN</h3></li>
                     @foreach($allproducts['mens_deodorants'] as $mens_deodorants)
                            <li><a href=" {{ route('/product',['name'=>$mens_deodorants['url_title']]) }} " >{{ $mens_deodorants['title'] }}</a></li>
                     @endforeach

                    </ul>
                  </div>
                  <div class="nav-box box-2">
                    <ul>
                      <li><h3>WOMEN</h3></li>
                      @foreach($allproducts['women_deodorants'] as $women_deodorants)
                            <li><a href=" {{ route('/product',['name'=>$women_deodorants['url_title']]) }} ">{{ $women_deodorants['title'] }}</a></li>
                      @endforeach
                  </ul>
                  </div>
                  <div class="nav-box box-3">
                    <a href="{{ route('/product-category',['name'=>'mens-deodorants']) }}"><h3>MEN'S DEODORANTS</h3></a>
                    <div class="nav-img">
                      <a href="{{ route('/product-category',['name'=>'mens-deodorants']) }}">
                        <img src=" {{ url('images/Nav-Link-Men-Deo.jpg') }}">
                      </a>
                      {{-- <a href="#"><img src="./assets/images/Nav-Link-Men-Deo.jpg"></a> --}}
                    </div>
                  </div>
                  <div class="nav-box box-4">
                    <a href="{{ route('/product-category',['name'=>'women-deodorants']) }}"><h3>WOMEN'S DEODORANTS</h3></a>
                    <div class="nav-img">

                      <a href="{{ route('/product-category',['name'=>'women-deodorants']) }}">
                        <img src=" {{ url('images/women-1.jpg') }} ">
                      </a>
                    </div>
                  </div>
                </div>
              </li>
          </ul>
          <!-- <div class="search-icon"><i class="fas fa-search"></i></div> -->
        </div>
        <div class="pink-right-side">
                <a href="{{  route('contact-us/') }}">Contact Us</a>
                <div class="social_icons">
                    <a class="social social_facebook" href="https://web.facebook.com/disguisefragrances?_rdc=1&_rdr">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="social social_twitter" href="https://twitter.com/disguiseuae">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="social social_youtube" href="https://www.youtube.com/watch?v=I9pQ1cs68uw">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="social social_instagram" href="https://www.instagram.com/disguisefragrances/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
      </div>
      </div>
      <!-- <div>
        <input class="search" type="search" placeholder="Search">
        <i class="fas fa-times"></i>
          </div> -->
</div>


    <div class="nav-bar-mobile">
        <div class="wrapper">
          <div class="left"><i class="fas fa-bars"></i></div>
          <div class="center-logo">
            <a href="/"><img class="logo" src=" {{ url('images/LOGO-PNG.png') }} " alt="disguise logo"></a>
          </div>
          <div class="right-side">
            <div class="search-icon"><i class="fas fa-search"></i></div>
          </div>
        </div>
        <div>
        <input class="search" type="search" placeholder="Search">
        <i class="fas fa-times"></i>
      </div>
  </div>


  <!-- hamburger -->

  <nav class="hamburger-nav">

       <ul>



        <li><a href="/" class=" current "><span>Home</span></a></li>

        <li><a href=" {{  route('the-brand/') }} "><span>The Brand</span></a></li>

        <li class="sub_li"><a href="#" class=""><span>Perfumes</span></a>
          <i class="fas fa-angle-right rotate"></i>
            <ul class="sub_menu">
              <li class="sub_li"><a href="#" class=""><span>Men</span></a>
                <i class="fas fa-angle-right rotate"></i>
                <ul class="sub_menu">
                  @foreach($allproducts['mens_parfumes'] as $mens_parfumes)
                      <li><a href=" {{ route('/product',['name'=>$mens_parfumes['url_title']]) }} "><span>{{ $mens_parfumes['title'] }}</span></a></li>
                  @endforeach
              </ul>
            </li>
            <li class="sub_li"><a href="#" class=""><span>Women</span></a>
              <i class="fas fa-angle-right rotate"></i>
              <ul class="sub_menu">
                @foreach($allproducts['women_parfumes'] as $women_parfumes)
                    <li><a href=" {{ route('/product',['name'=>$women_parfumes['url_title']]) }} ">{{ $women_parfumes['title'] }}</a></li>
                @endforeach
              </ul>
          </li>
          <li><a href="{{ route('/product-category',['name'=>'mens-parfumes']) }}"><span>Men’s Perfumes</span></a></li>
          <li><a href="{{ route('/product-category',['name'=>'women-parfumes']) }}"><span>Women’s Perfumes</span></a></li>
        </ul>
    </li>



    <li class="sub_li"><a href="#" class=""><span>Deodorants</span></a>
      <i class="fas fa-angle-right rotate"></i>
      <ul class="sub_menu">
        <li class="sub_li"><a href="#" class=""><span>Men</span></a>
          <i class="fas fa-angle-right rotate"></i>
          <ul class="sub_menu">
            @foreach($allproducts['mens_deodorants'] as $mens_deodorants)
                <li><a href=" {{ route('/product',['name'=>$mens_deodorants['url_title']]) }} " >{{ $mens_deodorants['title'] }}</a></li>
            @endforeach
          </ul>
      </li>
      <li class="sub_li"><a href="#" class=""><span>Women</span></a>
        <i class="fas fa-angle-right rotate"></i>
        <ul class="sub_menu">
          @foreach($allproducts['women_deodorants'] as $women_deodorants)
            <li><a href=" {{ route('/product',['name'=>$women_deodorants['url_title']]) }} ">{{ $women_deodorants['title'] }}</a></li>
          @endforeach
        </ul>
      </li>
      <li><a href="{{ route('/product-category',['name'=>'mens-deodorants']) }}"><span>Men’s Deodorants</span></a></li>
      <li><a href="{{ route('/product-category',['name'=>'women-deodorants']) }}"><span>Women’s Deodorants</span></a></li>
    </ul>
</li>



</ul>

</nav>






@show
@yield('content')
@section('footer')
    <footer>
      <div class="wrapper">
        <div id="footer">
            <div class="footer-box disguise-logo">
              <a href="http://disguise.ae">
                <img src="/images/LOGO-PNG.png" alt="logo">
              </a>
            </div>
            <div class="footer-box disguise-about">
              <p>The Disguise signature fragrances are intensely sensual and leave a wonderful, lingering effect on the senses. The allure of these deeply uplifting scents won’t be easy to resist.</p>
            </div>
              

                <div class="footer-box quick-links">
                  <h4 class="footer-h4">Quick Links</h4>
                  <div class="ql">
                    <div>
                      <a href="{{ route('the-brand/') }}">The Brand</a>
                      <a href="{{ route('/product-category',['name'=>'mens-parfumes']) }}">Men’s Perfumes</a>
                      <a href="{{ route('/product-category',['name'=>'women-parfumes']) }}">Women’s Perfumes</a>
                      <a href="{{ route('/product-category',['name'=>'mens-deodorants']) }}">Men’s Deodorants</a>
                      <a href="{{ route('/product-category',['name'=>'women-deodorants']) }}">Women’s Deodorants</a>
                    </div>
                    <div>
                      <a href="{{ route('/product-category',['name'=>'mens-parfumes']) }}">Men’s Perfumes</a>
                      <a href="{{ route('/product-category',['name'=>'women-parfumes']) }}">Women’s Perfumes</a>
                      <a href="{{ route('/product-category',['name'=>'mens-deodorants']) }}">Men’s Deodorants</a>
                      <a href="{{ route('/product-category',['name'=>'women-deodorants']) }}">Women’s Deodorants</a>
                    </div>
                  </div>
              </div>

              <div class="footer-box social_icons-footer">
                  <h4 class="footer-h4">Find Us</h4>
                  <div class="footer-soc">
                    <div>
                      <a class="social-footer social_facebook" href="https://web.facebook.com/disguisefragrances?_rdc=1&_rdr">
                          <i class="fab fa-facebook-f"></i>
                      </a>
                      <a class="social-footer social_twitter" href="https://twitter.com/disguiseuae">
                          <i class="fab fa-twitter"></i>
                      </a>
                    </div>
                    <div>
                      <a class="social-footer social_youtube" href="https://www.youtube.com/watch?v=I9pQ1cs68uw">
                          <i class="fab fa-youtube"></i>
                      </a>
                      <a class="social-footer social_instagram" href="https://www.instagram.com/disguisefragrances/">
                          <i class="fab fa-instagram"></i>
                      </a>
                    </div>
                  </div>


                </div>



            </div>
            
          
            
        </div>

      </div>



      <div class="copyright">
         <p class="center">
            Copyright © 2016 Disguise Fragrances
            <a href="#">Terms of Use </a>
            <a href="#"> Privacy Policy</a>
         </p>
      </div>


        <!-- Back to top button -->
    <a id="button"><i class="fas fa-long-arrow-alt-up"></i></a>
    </footer>
@show