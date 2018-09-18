{{-- {{ dd($allproducts) }} --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ url('css/main.css') }} ">
    <link rel="stylesheet" href=" {{ url('css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href=" {{ url('css/owl.theme.default.min.css') }} ">
    <link rel="stylesheet" href=" {{ url('css/animate.css') }} ">
    <link rel="stylesheet" type="text/css" href=" {{ url('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script type="text/javascript" src=" {{ url('js/jquery-3.2.1.min.js') }} "></script>
    <script type="text/javascript" src=" {{ url('js/main.js') }} "></script>
    <script type="text/javascript" src=" {{ url('js/owl.carousel.min.js') }} "></script>
<div class="col-lg-12">
@foreach($allproducts as $k => $categoryes)
		<table style="border: 2px solid #212529" class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th style="text-align: center;text-transform: uppercase;" colspan="7">{{ $k }}</th>
				</tr>
				<tr style="text-align: center;">
					<th scope="col" scope="col">#</th>
					<th scope="col" scope="col">Title</th>
					<th scope="col" scope="col">Category</th>
					<th scope="col" scope="col">SubCategory</th>
					<th scope="col">Url title</th>
					<th scope="col" scope="col">Cange</th>
					<th scope="col" scope="col">Delete</th>
				</tr>
			</thead>
	@foreach($categoryes as $c => $products)
			<tbody>
				<tr style="text-align: center;">
					<td scope="row">{{ $c }}</td>
					<td scope="row"> {{ $products->title }} </td>
					<td scope="row"> {{ $products->category }} </td>
					<td scope="row"> {{ $products->subcategory }} </td>
					{{-- <td scope="row"> {{ $products->photo_white }} </td> --}}
					<td scope="row"> {{ $products->url_title }} </td>
					<td scope="row"> <a href="{{ route('/changeproduct',['id'=>$products->id])  }} " class="btn btn-primary">Change</a> </td>
					<td scope="row"> <a class="btn btn-danger">Delete</a> </td>
				</tr>
	@endforeach
			</tbody>
		</table>
@endforeach
</div>