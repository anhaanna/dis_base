
@extends('deafult.layouts.layout')
@section('content')

<!-- PRODUCTS -->
<div class="product">
  <div class="line-bread">
    <div class="wrap">
      <h1 class="product-h1">PRODUCT</h1>
      <div class="breadcrumb">
        <a class="menu" href="/">Disguise Fragrances</a>
        <span class="right-arrow"><i class="fas fa-angle-right"></i></span>
        <span class="brd-current">text</span>
      </div>
    </div>
  </div>


  <div class="middle-product">
    <div class="flex-mid">
    <div class="part-left">
        <div class="big-img-white">
          <a href="#">
            <img class="big-white" src="{!! url('/images/products/'.$product[0]['photo_white']) !!}">
          </a>
        </div>
        <div class="big-img-black">
          <a href="#">
              <img class="big-black" src="{!! url('/images/products/'.$product[0]['photo_black']) !!} ">
            </a>
        </div>
        <div class="small-imgs">
          <div class="small-image1">

              <img class="small-white" src=" {!! url('/images/products/'.$product[0]['photo_white']) !!} ">
          </div>
          <div class="small-image2">
              <img class="small-black" src=" {!! url('/images/products/'.$product[0]['photo_black']) !!} ">
          </div>

        </div>
    </div>
    <div class="part-right">

    <!-- AYSTEX DESCRIPTION -->
      <h1 class="product-title">{{ $product[0]['title'] }}</h1>
      {!! $product[0]['description'] !!}
    <!-- END DESCRIPTION -->

      <div class="product-social">
        <ul>
          <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
          <li><a href=""><i class="fab fa-twitter"></i></a></li>
          <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
          <li><a href=""><i class="fab fa-tumblr"></i></a></li>
          <li><a href=""><i class="fab fa-pinterest-p"></i></a></li>
        </ul>
      </div>


    </div>
  </div>




  <div class="rel-products">
     <div class="mid">
        <div class="rel-h5"><h5>RELATED PRODUCTS</h5></div>

        <div class="rel-items">

            <div class="rel-item">
                <div class="rel-item-white">
                  <a href="#"><img src="../assets/images/related/10-Carnival-Women-Perfume-White-300x300.jpg"></a>
                </div>
                <div class="rel-item-black">
                  <a href="#"><img src="../assets/images/related/10-Carnival-Women-Perfume-Black-300x300.jpg"></a>
                </div>
                <div class="read-more">
                  <a href="#"><p>READ MORE +</p></a>
                </div>
            </div>

            <div class="rel-item">
                <div class="rel-item-white">
                  <a href="#"><img src="../assets/images/related/10-Carnival-Women-Perfume-White-300x300.jpg"></a>
                </div>
                <div class="rel-item-black">
                  <a href="#"><img src="../assets/images/related/10-Carnival-Women-Perfume-Black-300x300.jpg"></a>
                </div>
                <div class="read-more">
                  <a href="#"><p>READ MORE +</p></a>
                </div>
            </div>

            <div class="rel-item">
                <div class="rel-item-white">
                  <a href="#"><img src="../assets/images/related/10-Carnival-Women-Perfume-White-300x300.jpg"></a>
                </div>
                <div class="rel-item-black">
                  <a href="#"><img src="../assets/images/related/10-Carnival-Women-Perfume-Black-300x300.jpg"></a>
                </div>
                <div class="read-more">
                  <a href="#"><p>READ MORE +</p></a>
                </div>
            </div>

            <div class="rel-item">
                <div class="rel-item-white">
                  <a href="#"><img src="../assets/images/related/10-Carnival-Women-Perfume-White-300x300.jpg"></a>
                </div>
                <div class="rel-item-black">
                  <a href="#"><img src="../assets/images/related/10-Carnival-Women-Perfume-Black-300x300.jpg"></a>
                </div>
                <div class="read-more">
                  <a href="#"><p>READ MORE +</p></a>
                </div>
            </div>



        </div>
     </div>
  </div>


</div>


</div>


@endsection