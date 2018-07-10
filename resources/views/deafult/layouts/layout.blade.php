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
<div class="top-bar">
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
    </div>

    <div class="nav-bar">
      <div class="wrapper">
        <div class="left-side">
          <a href="{{ route('home') }}">
            <img class="logo" src="{{ url('images/LOGO-PNG.png') }}" alt="light logo">
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
          <div class="search-icon"><i class="fas fa-search"></i></div>
        </div>
      </div>
      <div>
        <input class="search" type="search" placeholder="Search">
        <i class="fas fa-times"></i>
    </div>
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
            <div class="footer-box disguise-about">
              <a href="http://disguise.ae">
                <img src="http://disguise.ae/wp-content/uploads/2016/03/LOGO-footer-PNG.png" alt="logo">
              </a>
              <p>The Disguise signature fragrances are intensely sensual and leave a wonderful, lingering effect on the senses. The allure of these deeply uplifting scents won’t be easy to resist.</p>
              <div class="social_icons-footer">
                    <a class="social-footer social_facebook" href="https://web.facebook.com/disguisefragrances?_rdc=1&_rdr">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="social-footer social_twitter" href="https://twitter.com/disguiseuae">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="social-footer social_youtube" href="https://www.youtube.com/watch?v=I9pQ1cs68uw">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="social-footer social_instagram" href="https://www.instagram.com/disguisefragrances/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="footer-box quick-links">
                <h4 class="footer-h4">QUICK LINKS</h4>
                <a href="{{ route('the-brand/') }}">The Brand</a>
                <a href="{{ route('/product-category',['name'=>'mens-parfumes']) }}">Men’s Perfumes</a>
                <a href="{{ route('/product-category',['name'=>'women-parfumes']) }}">Women’s Perfumes</a>
                <a href="{{ route('/product-category',['name'=>'mens-deodorants']) }}">Men’s Deodorants</a>
                <a href="{{ route('/product-category',['name'=>'women-deodorants']) }}">Women’s Deodorants</a>
            </div>
            <div class="footer-box twitter-feed">
              <h4 class="footer-h4">TWITTER FEED</h4>
                <div class="flex-div">
                  <span class="purple-teitter"><i class="fab fa-twitter"></i></span>
                  <p>Wish you a very Happy Diwali! <br>
                    <a class="w-a"  target="_blank" href="https://t.co/I3kTwtRQl0">https://t.co/I3kTwtRQl0</a>
                    <a target="_blank" href="https://twitter.com/DisguiseUAE/statuses/792671518115323904">2 years ago</a>
                  </p>
              </div>
              <div class="flex-div">
                  <span class="purple-teitter"><i class="fab fa-twitter"></i></span>
                  <p>A woman with an enigmatic side is all the more alluring! The<br>
                    <a class="w-a inline-a" target="_blank" href="http://twitter.com/search?q=Deception">#Deception</a>
                    Women scent tells the world you are a lady…
                    <a class="w-a inline-a" target="_blank" href="https://t.co/YTmS1PYVcb">https://t.co/YTmS1PYVcb</a>
                    <a target="_blank" href="https://twitter.com/DisguiseUAE/statuses/789808375945199617">2 years ago</a>
                  </p>
              </div>
            </div>
            <div class="insta-feed">
              <h4 class="footer-h4">INSTAGRAM</h4>
              <ul class="insta-posts">

          <li class="insta-item">
            <a href="https://www.instagram.com/p/BXgI3tZj-EM/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/5eb6d323d7a2e7ffca631924263ef3a7/5BBFE87C/t51.2885-15/s150x150/e35/c135.0.810.810/20633589_1736947863278454_3890537541727682560_n.jpg" alt="Exude your style with Disguise Reflection fragrance for women!! For details visit: http://disguise.ae" width="150" height="150">
              <span class="bl"></span>          </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BXI0nehjMw7/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/3056bd59cc8fde8994f5de464b025b97/5BBE18BD/t51.2885-15/s150x150/e35/c135.0.810.810/20478595_1702886993339727_7414737703368916992_n.jpg" alt="Embrace the nostalgia of memories with Disguise Reflection fragrance for men!! For details visit: http://disguise.ae" width="150" height="150">
              <span class="bl"></span>
            </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BW5na8oDuks/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/4530594d28db3bd738b9d2f6f7970af8/5BC86475/t51.2885-15/s150x150/e35/c135.0.810.810/20185018_109373733057487_4977068730363150336_n.jpg" alt="Who's that woman? Did he know her in the past? Let your man discover you with Disguise Masquerade fragrance for women!For details visit: http://disguise.ae" width="150" height="150">
              <span class="bl"></span>
            </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BWweEQCDL2B/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/33296174d939412b91e29fba6256c590/5BC7EBB3/t51.2885-15/s150x150/e35/c135.0.810.810/20067064_1828669354114182_5581827510351429632_n.jpg" alt="Reveal your strong dark side with Disguise Masquerade fragrance for men!! For details visit: http://disguise.ae" width="150" height="150">
              <span class="bl"></span>
            </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BVwarRDjRPz/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/7fe9231d4651f37e7b97c8a72f822787/5BBCF367/t51.2885-15/s150x150/e35/19380114_849780395191355_5324250122517741568_n.jpg" alt="On this auspicious occasion of EID... May you and your family be blessed with joy, peace and happiness.Visit us at: http://disguise.ae/" width="150" height="150">
              <span class="bl"></span>
            </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BOtyypah8Ue/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/8221e06768f2e253649819b16cd82ffb/5BAFFE0C/t51.2885-15/s150x150/e35/15803075_391104031223529_1753013355951423488_n.jpg" alt="After a year-ender night of CARNIVAL, Jan 1st is a great day for REFLECTION... Wishing everyone a fab and fragrant 2017. #disguisefragrances #perfumecollection #deodorant #perfume" width="150" height="150">
              <span class="bl"></span>
            </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BOrZ6mVBEsc/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/d959a123ebbd56e508b2bc07a7b5f897/5BBFA79B/t51.2885-15/s150x150/e35/15802921_382668535414415_8663337627493072896_n.jpg" alt="Bring on the dramatic, carnival mood tonite with our party fragrances CARNIVAL and MASQUERADE!  #DisguiseFragrances #carnivalmood #perfume #perfumecollection #deodorant" width="150" height="150">
              <span class="bl"></span>            </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BL5IblGhH-c/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/00da8cab66f43819ac20ea892bb0dfc8/5BA41C0D/t51.2885-15/s150x150/e35/14719677_1792106201071227_2985396389803982848_n.jpg" alt="A woman with an enigmatic side is all the more alluring! A magical fragrance harmony of fruity-floral and amber and cedarwood notes, the Deception Women scent tells the world you are a lady of intrigue… #DisguiseFragrances" width="150" height="150">
              <span class="bl"></span>
            </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BLxep-mheQO/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/bd930dddaea1f51f1afb240d986b72ba/5BAA14CD/t51.2885-15/s150x150/e35/14565076_203266556750807_3016354264965447680_n.jpg" alt="An unforgettable masculine scent with citrusy, floral and woody notes, Deception is a romantic man’s best seduction secret… #DisguiseFragrances" width="150" height="150">
              <span class="bl"></span>          </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BLlEmYeBDqs/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/f5372e66da8a4b09c6e3f649c1fa65c3/5BC7FE1F/t51.2885-15/s150x150/e35/14719760_136049400193738_3777096163971301376_n.jpg" alt="Get into the gym ‘spirit’, gal! #DisguiseFragrances #bestylish" width="150" height="150">
              <span class="bl"></span>
            </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BLWjksZhwKm/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/1ce36218accf93972e6583aa9edb3357/5BAFBAC0/t51.2885-15/s150x150/e35/14474031_1601932763445563_4032181212347891712_n.jpg" alt="Get into the Carnival spirit! An unforgettable harmony of citrus, rose and woody notes, this fragrance lets you unleash your wild side… Bring on the festive gaiety of a carnival! #DisguiseFragrances #CarnivalWomen #PartyScentWomen" width="150" height="150">
              <span class="bl"></span>
            </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BLOEt8ih5b7/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/828d3fce68259d232e37d14d89b8da13/5BEC8E72/t51.2885-15/s150x150/e35/14566749_1768578560064185_6576401052587786240_n.jpg" alt="A festive masculine scent, Carnival is meant for men who like to party hard! Let the party begin with this luxurious olfactive harmony of mint, orange, rose, cinnamon, amber and patchouli notes!#DisguiseFragrances #CarnivalMen #PartyScentMen" width="150" height="150">
              <span class="bl"></span>
            </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BLLaT8-hc1v/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/70ef48a5d6df72f72a97c5dcc73276c2/5BBA068F/t51.2885-15/s150x150/e35/c100.0.600.600/14590981_1661476174181275_8027621917236133888_n.jpg" alt="A sharp suit calls for stylish accessories. Stay classy.#disguisefragrances #bestylish #stimulate" width="150" height="150">
              <span class="bl"></span>
            </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BLIQ19DhAOn/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/38a5f241d0e2778628c722a541b8b861/5BB2A487/t51.2885-15/s150x150/e35/14561810_1195348667188979_6985980803360489472_n.jpg" alt="Spray on, if you dare!Clandestine Woman, our lady in red, seems to be daring you to hide a romantic secret…" width="150" height="150">
              <span class="bl"></span>
            </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BLGP-vGBjfZ/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/610e586986ea403d325d218e7ad2e25e/5BA80C20/t51.2885-15/s150x150/e35/14550108_194969664266677_916259971849519104_n.jpg" alt="All you men, we are letting you in on our naughty little secret!The Clandestine Men scent is all about letting the wearer take on a daring new sensual persona..." width="150" height="150">
              <span class="bl"></span>
            </a>
          </li>
          <li class="insta-item">
            <a href="https://www.instagram.com/p/BDkX6iOAEun/" target="_blank">
              <img class="thumbnail" src="https://scontent.cdninstagram.com/vp/93f39c78412dd4850cc789142588bc42/5BB09E58/t51.2885-15/s150x150/e35/12797923_239883383029445_1659477548_n.jpg" alt="Look for clues on this trail of intrigue and ‘deception’… #dubai #dubaifashion #disguise" width="150" height="150">
              <span class="bl"></span>
            </a>
          </li>

              </ul>

              <div class="wrapper">
                <p class="textwidget">Follow us <a href="http://www.instagram.com/disguisefragrances/" target="_blank">@DisguiseFragrances</a></p>
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