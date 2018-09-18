
 <link rel="stylesheet" type="text/css" href=" {{ url('css/bootstrap.min.css') }} ">

<div style="width: 100%;display: flex;justify-content: space-around;">
	<div style="border: 2px solid red;width: 100%">
		<table  class="table  table-striped" ">
			@foreach($product as $k => $v)
            <tbody>
                <tr scope="row">
                	@if($k != 'description')
	                    <td scope="col" width="20%">{!! $k !!}</td>
	                    <td width="40%">{!! $v !!} </td>
                	@endif
                	@if($k == 'photo_black' || $k=='photo_white')
	                    <td width="40%"><input class="form-control" type="file" placeholder="{!! $k !!}" type="" name=""></td>
					@else
	                    <td width="40%"><input class="form-control" placeholder="{!! $k !!}" type="" name=""></td>
                	@endif
                </tr>
            </tbody>
			@endforeach
        </table>
	</div>
</div>


