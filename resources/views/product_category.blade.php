@extends('deafult.layouts.layout')
@section('content')
	<div class="product">


  <div class="line-bread">
    <div class="wrap">
      <div class="breadcrumb">
        <a class="menu" href="/">Disguise Fragrances</a>
        <span class="right-arrow"><i class="fas fa-angle-right"></i></span>
        <span class="brd-current">
          {{ $data[0]['category']}}'s  {{ $data[0]['subcategory'] }}
        </span>
      </div>
    </div>
  </div>

  <div class="cat-content">
    <div class="cat-wrap">

      <div class="categ-products">

            <div class="cat-p">
              <p>Showing all results</p>
            </div>
            <div class="rel-items">
              @foreach($data as $product)
                            <div class="rel-item">
                                <div class="rel-item-white cat-img">
                                  <a href="{{ route('/product',['name'=>$product['url_title']]) }}">
                                    <img src="{{ url('/images/products/'.$product['photo_white']) }}">
                                  </a>
                                </div>
                                <div class="read-more">
                                  <a href="{{ route('/product',['name'=>$product['url_title']]) }}"><p>READ MORE</p></a>
                                </div>
                            </div>
              @endforeach
            </div>

      </div>
    </div>

   
  </div>


      <div class="cat-prod-bootom">
        <div class="purple">
          <div class="cat-content">
            <h4 class="rec-h4">RECENTLY VIEWED</h4>
            <h4 class="cat-h4">CATEGORIES</h4>
          </div>
        </div>
        <div class="cat-content">
          <div class="rec-viewed">
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
            </ul>
          </div>

          <div class="categories">
              <div class="category"><a href="{{ route('/product-category',['name'=>'mens-deodorants']) }}">Men's Deodorants </a> (6)</div> 
              <div class="category"><a href="{{ route('/product-category',['name'=>'mens-parfumes']) }}">Men's Perfumes </a> (6)</div> 
              <div class="category"><a href="{{ route('/product-category',['name'=>'women-deodorants']) }}">Women's Deodorants </a> (6)</div> 
              <div class="category"><a href="{{ route('/product-category',['name'=>'women-parfumes']) }}">Women's Perfumes </a> (6)</div>
              <div class="category"><a href="{{ route('/product-category',['name'=>'men-nogas']) }}">Men’s Intense Body Spray & Roll-On </a> (3)</div>
              <div class="category"><a href="{{ route('/product-category',['name'=>'women-nogas']) }}">Women’s Intense Body Spray & Roll-On </a> (3)</div>
          </div>
</div>
        

      </div>


</div>
@endsection