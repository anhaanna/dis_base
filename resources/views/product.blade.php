
@extends('deafult.layouts.layout')
@section('content')

<!-- PRODUCTS -->
<div class="product">
  <div class="line-bread">
    <div class="wrap">
      <div class="breadcrumb">
        <a class="menu" href="/">Disguise Fragrances</a>
        <span class="right-arrow"><i class="fas fa-angle-right"></i></span>
        <span class="brd-current">{{ $product[0]['title'] }}</span>
      </div>
    </div>
  </div>



  <div class="middle-product">
    <div class="flex-mid">
    <div class="part-left">
        <div class="big-img-white">

            <img class="big-white" src="{!! url('/images/products/'.$product[0]['photo_white']) !!}">

        </div>
    </div>



    <div class="part-right">

    <!-- AYSTEX DESCRIPTION -->
      <h1 class="product-title">{{ $product[0]['title'] }}</h1>
      {!! $product[0]['description'] !!}
    <!-- END DESCRIPTION -->

      <div class="product-social">
        <ul>
          <li><a href="https://www.facebook.com/sharer/sharer.php?s=100&p[url]=http://test.loc&p[images][0]=&p[title]=Title%20Goes%20Here&p[summary]=Description%20goes%20here!" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="https://twitter.com/intent/tweet?url=http://test.loc/&amp;" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false"><i class="fab fa-twitter"></i></a></li>
          <li><a href="https://plus.google.com/share?url=http://test.loc"
      target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false"><i class="fab fa-google-plus-g"></i></a></li>
          <li><a href="https://www.tumblr.com/share/link?url=http://test.loc"
     target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false"><i class="fab fa-tumblr"></i></a></li>
          <li><a href="https://www.pinterest.com/pin/create/button/?url=http://test.loc" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false"><i class="fab fa-pinterest-p"></i></a></li>
        </ul>
      </div>


    </div>
  </div>


      <div class="purple">
          <div class="cat-content">
            <h4 class="rec rec-h4">RELATED PRODUCTS</h4>
          </div>
        </div>

  <div class="rel-products">
     <div class="mid">
        <div class="rel-items">

            <div class="rel-item">
                <div class="rel-item-white">
                  <a href="#"><img src="{!! url('/images/related/10-Carnival-Women-Perfume-White-300x300.jpg') !!}"></a>
                </div>
                <!-- <div class="rel-item-black">
                  <a href="#"><img src="../assets/images/related/10-Carnival-Women-Perfume-Black-300x300.jpg"></a>
                </div> -->
                <div class="read-more">
                  <a href="#"><p>READ MORE</p></a>
                </div>
            </div>

            <div class="rel-item">
                <div class="rel-item-white">
                  <a href="#"><img src="{!! url('/images/related/10-Carnival-Women-Perfume-White-300x300.jpg') !!}"></a>
                </div>
                <!-- <div class="rel-item-black">
                  <a href="#"><img src="../assets/images/related/10-Carnival-Women-Perfume-Black-300x300.jpg"></a>
                </div> -->
                <div class="read-more">
                  <a href="#"><p>READ MORE</p></a>
                </div>
            </div>

            <div class="rel-item">
                <div class="rel-item-white">
                  <a href="#"><img src="{!! url('/images/related/10-Carnival-Women-Perfume-White-300x300.jpg') !!}"></a>
                </div>
                <!-- <div class="rel-item-black">
                  <a href="#"><img src="../assets/images/related/10-Carnival-Women-Perfume-Black-300x300.jpg"></a>
                </div> -->
                <div class="read-more">
                  <a href="#"><p>READ MORE</p></a>
                </div>
            </div>

        </div>
     </div>
  </div>


</div>


</div>


@endsection