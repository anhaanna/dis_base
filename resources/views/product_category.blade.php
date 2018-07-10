@extends('deafult.layouts.layout')
@section('content')
	<div class="product">
  <div class="line-bread">
    <div class="wrap">
      <h1 class="product-h1">TVYAL BAJNI ANUNY</h1>
      <div class="breadcrumb">
        <a class="menu" href="/">Disguise Fragrances</a>
        <span class="right-arrow"><i class="fas fa-angle-right"></i></span>
        <span class="brd-current">text</span>
      </div>
    </div>
  </div>

  <div class="cat-content">
    <div class="cat-wrap">

      <div class="categ-products">

            <div class="cat-p">
              <p>Showing all 6 results</p>
            </div>
            <div class="rel-items">
              @foreach($data as $product)
                            <div class="rel-item">
                                <div class="rel-item-white cat-img">
                                  <a href="{{ route('/product',['name'=>$product['url_title']]) }}">
                                    <img src="{{ url('/images/products/'.$product['photo_white']) }}">
                                  </a>
                                </div>
                                <div class="rel-item-black cat-img">
                                  <a href="{{ route('/product',['name'=>$product['url_title']]) }}">
                                    <img src=" {{ url('images/products/'.$product['photo_black']) }} ">
                                  </a>
                                </div>
                                <div class="read-more">
                                  <a href="#"><p>READ MORE +</p></a>
                                </div>
                            </div>
              @endforeach
            </div>

      </div>



      <div class="cat-prod-right">

        <div class="categories">
            <h4 class="ctg-h4">CATEGORIES</h4>
            <div class="category"><a href="{{ route('/product-category',['name'=>'mens-deodorants']) }}">Men's Deodorants </a> (6)</div> 
            <div class="category"><a href="{{ route('/product-category',['name'=>'mens-parfumes']) }}">Men's Perfumes </a> (6)</div> 
            <div class="category"><a href="{{ route('/product-category',['name'=>'women-deodorants']) }}">Women's Deodorants </a> (6)</div> 
            <div class="category"><a href="{{ route('/product-category',['name'=>'women-parfumes']) }}">Women's Perfumes </a> (6)</div>
        </div>

        <div class="rec-viewed">
          <h4 class="rec-h4">RECENTLY VIEWED</h4>
          <ul class="rec-ul">
            <li class="rec-li">
              <div class="rec-img"><a href="{{ route('/product',['name'=> 'reflection-women-eau-de-toilette']) }}"><img src="{{ url('images/products/10-Reflection-Women-White-Perfume-600x600.jpg') }}"></a> </div>
              <div class="rec-a"><a href="{{ route('/product',['name'=> 'reflection-women-eau-de-toilette']) }}">REFLECTION WOMEN</a></div>
            </li>
            <li class="rec-li">
              <div class="rec-img"><a href="{{ route('/product',['name'=> 'stimulate-women-eau-de-toilette']) }}"><img src="{{ url('images/products/10-Stimulate-Women-Perfume-White-600x600.jpg') }}"></a> </div>
              <div class="rec-a"><a href="{{ route('/product',['name'=> 'stimulate-women-eau-de-toilette']) }}">STIMULATE WOMEN</a></div>
            </li>
            <li class="rec-li">
              <div class="rec-img"><a href="{{ route('/product',['name'=> 'deception-women-eau-de-toilette']) }}"><img src="{{ url('images/products/10-Deception-Women-White-Perfume-600x600.jpg') }}"></a> </div>
              <div class="rec-a"><a href="{{ route('/product',['name'=> 'deception-women-eau-de-toilette']) }}">DECEPTION WOMEN</a></div>
            </li>
            <li class="rec-li">
              <div class="rec-img"><a href="{{ route('/product',['name'=> 'clandestine-women-eau-de-toilette']) }}"><img src="{{ url('images/products/10-Clendestine-Women-Perfume-White-600x600.jpg') }}"></a> </div>
              <div class="rec-a"><a href="{{ route('/product',['name'=> 'clandestine-women-eau-de-toilette']) }}">CLANDESTINE WOMEN</a></div>
            </li>
          </ul>
        </div>

      </div>


    </div>
  </div>
</div>
@endsection