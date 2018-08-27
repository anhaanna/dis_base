@extends('deafult.layouts.layout')
@section('content')

<div class="error-middle">
  <div class="wrapper">
    <div class="error-txt">
      <h1>SEARCH RESULTS</h1>
    </div>
  </div>
</div>

<div class="middle-product">
		    <div class="search-flex-mid">
		    	@if($products->isEmpty())
		    		<h1 class="product-title">NO POSTS WERE FOUND</h1>
		    	@endif
				@foreach( $products as $product)
		
				    <div class="search-img">
						<a class="search-title" href="{{ route('/product',['name'=>$product['url_title']]) }}">
							<h1 class="product-title">{{ $product['title'] }}</h1>
							<img class="big-white" src="{!! url('/images/products/'.$product['photo_white']) !!}">
						</a>

				    </div>
	
				@endforeach


</div>

	</div>

@endsection
