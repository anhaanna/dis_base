@extends('deafult.layouts.layout')
@section('content')


<div id="carousel" class="owl-carousel owl-theme">
        <div class="item">
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
        </div>
    </div>

  <div class="middle-content">
    <div class="wrapper">
      <div class="middle">
        <div class="about-us">
          <h1 id="ab-us-h1">About us</h1>
          <h2 id="ab-us-h2">OUR FRAGRANCES</h2>
          <p id="ab-us-p">Stay seductively fragrant all day with our exhaustive range of premium perfumes for men and women. The intense perfumes are perfectly complemented by matching deodorant body sprays. There’s a scent for every kind of fragrance connoisseur. Go choose…</p>
          <a class="explore" href="{{ route('the-brand/') }}">EXPLORE MORE</a>
        </div>
        <div class="dis-icon">
          <img src=" {{ url('images/LOGO-PNG.png') }} ">
        </div>

      </div>
    </div>
  </div>

  <div class="sliders">
    <div class="small-slider slider1">
        <div class="blue">
            <h6>Check Out Our Amazing Men’s Fragrances</h6>
            <h2>A MAN’S SEDUCTION SECRET…</h2>
        </div>
        <div id="carousel1" class="owl-carousel owl-theme">

            <div class="item">
            	<img src=" {{ url('images/sliders/slider1/Slider-Mens-deo-Reflection.jpg') }} " alt="orange tree"/>
            </div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider1/Slider-Mens-deo-Carnival.jpg') }} " alt="orange tree"/>
            </div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider1/Slider-Mens-deo-Clendestine.jpg') }} " alt="orange tree"/>
            </div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider1/Slider-Mens-deo-Masquared.jpg') }} " alt="orange tree"/>
            </div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider1/Slider-Mens-deo-Deception.jpg') }} " alt="orange tree"/>
        	</div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider1/Slider-Mens-deo-Stimulate.jpg') }} " alt="orange tree"/>
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
            	<img src=" {{ url('images/sliders/slider2/Fog-Blue-Women.jpg') }} " alt="orange tree"/>
        	</div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider2/Slider-Womens-deo-Masquared.jpg') }} " alt="orange tree"/>
       	 	</div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider2/Slider-Womens-deo-Carnival.jpg') }} " alt="orange tree"/>
        	</div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider2/Slider-Womens-deo-Deception.jpg') }} " alt="orange tree"/>
        	</div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider2/Slider-Womens-deo-reflection.jpg') }} " alt="orange tree"/>
       		</div>
            <div class="item">
            	<img src=" {{ url('images/sliders/slider2/Slider-Womens-deo-Stimulate.jpg') }} " alt="orange tree"/>
        	</div>
        </div>
    </div>

  </div>


  <div class="all-types">

    <div class="type type1">
      	<a href="{{ route('/product-category',['name'=>'man-parfumes'])  }}">

        	<img class="image-types" src=" {{ url('images/all-types/Test-Mens-Perfume.jpg') }} ">
    	</a>
        <a href="{{ route('/product-category',['name'=>'man-parfumes'])  }}"><span class="black"></span></a>
        <div class="cnt-h3"><h3>MEN'S PERFUMES</h3></div>
    </div>

    <div class="type type2">
      	<a href="{{ route('/product-category',['name'=>'women-parfumes']) }}">

        	<img class="image-types" src=" {{ url('images/all-types/Test-Womens-Perfume.jpg') }} ">
    	  </a>
        <a href="{{ route('/product-category',['name'=>'women-parfumes']) }}"><span class="black"></span></a>
        <div class="cnt-h3"><h3>WOMEN'S PERFUMES</h3></div>
    </div>

    <div class="type type3">
      	<a href="{{ route('/product-category',['name'=>'man-deodorants']) }}">
        	<img class="image-types" src=" {{ url('images/all-types/Test-Mens-deos.jpg') }} ">
    	  </a>
        <a href="{{ route('/product-category',['name'=>'man-deodorants']) }}"><span class="black"></span></a>
        <div class="cnt-h3"><h3>MEN'S DEODORANTS</h3></div>
    </div>

    <div class="type type4">
      	<a href="{{ route('/product-category',['name'=>'women-deodorants']) }}">

        	<img class="image-types" src=" {{ url('images/all-types/Test-womens-deos.jpg') }} ">
    	</a>
        <a href="{{ route('/product-category',['name'=>'women-deodorants']) }}"><span class="black"></span></a>
        <div class="cnt-h3"><h3>WOMEN'S DEODORANTS</h3></div>
    </div>

  </div>


  <div class="social-items">
    <div class="s-item social-item-youtube">
      <h3 class="b-h3">Youtube Channel</h3>
      <iframe class="iframe" width="595" height="240" src="https://www.youtube.com/embed/I9pQ1cs68uw?feature=oembed" frameborder="0" allowfullscreen=""></iframe>
    </div>
    <div class="s-item social-item-facebook">
      <h3 class="b-h3">FACEBOOK UPDATES</h3>
      <p class="no-fb">Unable to display Facebook posts.</p>
      <p class="fb-error">Show error</p>
      <p class="show-fb-error">
        <br>Error: Error validating application. Application has been deleted. <br><br>
        Type: OAuthException <br><br>
        Code: 190 <br><br>
        Please refer to our Error Message Reference.
      </p>
    </div>
    <div class="s-item newsletter">
      <h3 class="b-h3">newsletter</h3>
      <h4 class="b-h4">Sign up today for our newsletter!</h4>
      <h5 class="b-h5">Enter you name and email to get the latest updates and offers on Disguise Fragrances.</h5>

      <form action="" type="" id="subscribe-form ">
        <label>Name</label>
        <br>
        <input id="name" type="name" name="name">
        <br>
        <label>Email *</label>
        <br>
        <input id="email" type="email" name="email" required="">
        <br>
        <input id="btn" type="button" name="subscribe" value="Subscribe">
      </form>
    </div>
  </div>

@endsection
