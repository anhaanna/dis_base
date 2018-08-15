@extends('deafult.layouts.layout')
@section('content')


<div id="carousel" class="owl-carousel owl-theme">
        <div class="item">
          <img src=" {{ url('images/big-slide/depo.jpg') }} " alt="orange tree"/>
        </div>
        <!-- <div class="item">
          <img src="{{ url('images/big-slide/disguise-website-banner-oct-2016-NEW.jpg') }} " alt="orange tree"/>
        </div>
        <div class="item">
          <img src=" {{ url('images/big-slide/Main-Banner-2-1.jpg') }} " alt="orange tree"/>
        </div>
        <div class="item">
          <img src=" {{ url('images/big-slide/Banner-2-Masqured-Fragrance.jpg') }} " alt="orange tree"/>
        </div>
        <div class="item">
          <img src=" {{ url('images/big-slide/Banner-3-Carnival-Fragrances.jpg') }} " alt="orange tree"/>
        </div> -->
    </div>

  <div class="middle-content">
      <div class="middle">
        <div class="dis-icon">
          <img src=" {{ url('images/LOGO-PNG.png') }} ">
        </div>

        <div class="about-us">
          <h1 id="ab-us-h1">About us</h1>
          <h2 id="ab-us-h2">OUR FRAGRANCES</h2>
          <p id="ab-us-p">Stay seductively fragrant all day with our exhaustive range of premium perfumes for men and women. The intense perfumes are perfectly complemented by matching deodorant body sprays. There’s a scent for every kind of fragrance connoisseur. Go choose…</p>
          <a class="explore" href="{{ route('the-brand/') }}">EXPLORE MORE</a>
        </div>
        
    </div>
  </div>

  <div class="brown"></div>


  <div class="sliders">


    <div class="s-item newsletter">
          <h3 class="b-h3">newsletter</h3>
          <h4 class="b-h4">Sign up today for our newsletter!</h4>
          <h5 class="b-h5">Enter you name and email to get the latest updates and offers on Disguise Fragrances.</h5>
        
          <form id="subscribe-form" method="post" action="{{route('home.newsletter')}}">

            {{ csrf_field() }}
            @if(Session::has('flash_message'))
              <div class="subscription">{{ Session::get('flash_message') }}</div>
            @endif
            <input id="name" type="name" name="sub_name" required="" placeholder="NAME">
            <br>
            <input id="email" type="email" name="sub_email" required="" placeholder="EMAIL">
            <br>
            <button id="btn" name="subscribe">
              Subscribe
            </button>
          </form>
        </div>


    <div class="small-slider slider1">
      
        <div class="blue">
            <h6>Check Out Our Amazing Men’s Fragrances</h6>
            <h2>A MAN’S SEDUCTION SECRET…</h2>
        </div>
        <div id="carousel1" class="owl-carousel owl-theme">
    
            <div class="item">
            	<img src=" {{ url('images/sliders/slider1/Slider-Mens-deo-Reflection.jpg') }} " alt="Slider Mens deo- Reflection" title="Slider Mens deo- Reflection"/>
            </div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider1/Slider-Mens-deo-Carnival.jpg') }} " alt="Slider Mens deo- Carnival" title="Slider Mens deo- Carnival"/>
            </div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider1/Slider-Mens-deo-Clendestine.jpg') }} "alt="Slider Mens deo- Clendestine" title="Slider Mens deo- Clendestine"/>
            </div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider1/Slider-Mens-deo-Masquared.jpg') }} " alt="Slider Mens deo- Masquared" title="Slider Mens deo- Masquared"/>
            </div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider1/Slider-Mens-deo-Deception.jpg') }} " alt="Slider Mens deo- Deception" title="Slider Mens deo- Deception"/>
        	</div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider1/Slider-Mens-deo-Stimulate.jpg') }} " alt="Slider Mens deo- Stimulate" title="Slider Mens deo- Stimulate"/>
            </div>
        </div>
    </div>
    <div class="small-slider slider2">
        <div class="pink">
            <h6>Check Out Our Amazing Women’s Fragrances</h6>
            <h2>ESSENCE OF AN ENIGMATIC WOMAN…</h2>
        </div>
        <div id="carousel2" class="owl-carousel owl-theme">
            <div class="item">
            	<img src=" {{ url('images/sliders/slider2/Fog-Blue-Women.jpg') }} " alt="Slider Womens deo- Clendestine" title="Slider Womens deo- Clendestine"/>
        	</div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider2/Slider-Womens-deo-Masquared.jpg') }} " alt="Slider Womens deo- Masquared" title="Slider Womens deo- Masquared"/>
       	 	</div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider2/Slider-Womens-deo-Carnival.jpg') }} " alt="Slider Womens deo- Carnival" title="Slider Womens deo- Carnival"/>
        	</div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider2/Slider-Womens-deo-Deception.jpg') }} " alt="Slider Womens deo- Deception" title="Slider Womens deo- Deception"/>
        	</div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider2/Slider-Womens-deo-reflection.jpg') }} " alt="Slider Womens deo- Reflection" title="Slider Womens deo- Reflection"/>
       		</div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider2/Slider-Womens-deo-Stimulate.jpg') }} " alt="Slider Womens deo- Stimulate" title="Slider Womens deo- Stimulate"/>
        	</div>
        </div>
    </div>

  </div>


    <div class="brown"></div>


  <div class="all-types">

    <div class="type">
      	<a href="{{ route('/product-category',['name'=>'mens-parfumes'])  }}">

        	<img class="image-types" src=" {{ url('images/all-types/Test-Mens-Perfume.jpg') }} ">
    	</a>
        <a href="{{ route('/product-category',['name'=>'mens-parfumes'])  }}"><span class="black"></span>
        <div class="cnt-h3"><h3>MEN'S PERFUMES</h3></div></a>
    </div>

    <div class="type">
      	<a href="{{ route('/product-category',['name'=>'women-parfumes']) }}">

        	<img class="image-types" src=" {{ url('images/all-types/Test-Womens-Perfume.jpg') }} ">
    	  </a>
        <a href="{{ route('/product-category',['name'=>'women-parfumes']) }}"><span class="black"></span>
        <div class="cnt-h3"><h3>WOMEN'S PERFUMES</h3></div></a>
    </div>

    <div class="type">
      	<a href="{{ route('/product-category',['name'=>'mens-deodorants']) }}">
        	<img class="image-types" src=" {{ url('images/all-types/Test-Mens-deos.jpg') }} ">
    	  </a>
        <a href="{{ route('/product-category',['name'=>'mens-deodorants']) }}"><span class="black"></span>
        <div class="cnt-h3"><h3>MEN'S DEODORANTS</h3></div></a>
    </div>

    <div class="type">
      	<a href="{{ route('/product-category',['name'=>'women-deodorants']) }}">

        	<img class="image-types" src=" {{ url('images/all-types/Test-womens-deos.jpg') }} ">
    	</a>
        <a href="{{ route('/product-category',['name'=>'women-deodorants']) }}"><span class="black"></span>
        <div class="cnt-h3"><h3>WOMEN'S DEODORANTS</h3></div></a>
    </div>

    <div class="type">
        <a href="{{ route('/product-category',['name'=>'men-nogas']) }}">

          <img class="image-types" src=" {{ url('images/all-types/ngm.jpg') }} ">
      </a>
        <a href="{{ route('/product-category',['name'=>'men-nogas']) }}"><span class="black"></span>
        <div class="cnt-h3"><h3>MEN'S NO GAS</h3></div></a>
    </div>

    <div class="type">
        <a href="{{ route('/product-category',['name'=>'women-nogas']) }}">

          <img class="image-types" src=" {{ url('images/all-types/ngw.jpg') }} ">
      </a>
        <a href="{{ route('/product-category',['name'=>'women-nogas']) }}"><span class="black"></span>
        <div class="cnt-h3"><h3>WOMEN'S NO GAS</h3></div></a>
    </div>

  </div>

  </div>

@endsection
