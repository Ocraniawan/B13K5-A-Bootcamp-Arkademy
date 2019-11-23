@extends('template')

@section('main')
<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="arkademy.png" height="100%"/></a>
				<a class="navbar-brand" href="#" style="color: RED">ARKADEMY</a>
				<a class="navbar-brand" href="#">COFFE SHOP</a>

			</div>
			<ul class="nav navbar-nav navbar-right">
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ADD</button>
			<div id="myModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
	<!-- konten modal-->
	<div class="modal-content">
		<!-- heading modal -->
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">ADD</h4>
		</div>
		<!-- body modal -->
		<div class="modal-body">
		         <form action="{{route('arkademy.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
		         	{{csrf_field()}}
		         	<div class="form-group{{ $errors->has('id_cashier') ? 'has-error' : '' }}">
		        		<select name="cashier" class="form-control">
		        			@foreach($cashier as $data)
		        			<option value="{{$data->id}}">{{$data->name}}</option>
		        			@endforeach
		        		</select>	         		
		         	</div>

		         	<div class="form-group{{ $errors->has('id_product') ? 'has-error' : '' }}">
		        		<select name="product" class="form-control">
		        			@foreach($product as $data)
		        			<option value="{{$data->id}}">{{$data->name}}</option>
		        			@endforeach
		        		</select>	         		
		         	</div>
		         	<div class="form-group{{ $errors->has('id_category') ? 'has-error' : '' }}">
		        		<select name="category" class="form-control">
		        			@foreach($category as $data)
		        			<option value="{{$data->id}}">{{$data->name}}</option>
		        			@endforeach
		        		</select>	         		
		         	</div>
		         	<div class="form-group{{ $errors->has('id_product') ? ' has-error' : '' }}">
		         		<input type="text" name="price" class="form-control">
		         	</div>
		         	</div> 	
		         </form>
		<!-- footer modal -->
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">ADD</button>
		</div>
	</div>
   </div>
</div>
			</ul>
		</div>
	</nav>
<div id="product">
 
	@if (!empty($product_list))
		  <table class="table">
			<thead>
				<tr>
					<th>No</th> 
					<TH>Cashier</TH>
					<th>Product</th>
					<th>Category</th>
					<th>Prices</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($product_list as $product):?>
				<tr>
					<td>{{ $product->id }}</td>
					<?php
					$cashier = App\Cashier::find($product->id_cashier);
					?>
					<td>{{$cashier->name}}</td>
					<td>{{ $product->name }}</td>
					<?php
					$category = App\Category::find($product->id_category);
					?>
					<td>{{ $category->name }}</td>
					<td>{{ $product->price }}</td>
					
					<td>
					<form method="POST" action="{{ route('arkademy.destroy', $product->id) }}" accept-charset="UTF-8">
		                <input name="_method" type="hidden" value="DELETE">
		                <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                <a href="{{ route('arkademy.edit', $product->id) }}" class="btn-loading btn btn-primary btn-sm" style="padding: 2px 5px;font-size:10px;" data-toggle="modal" data-target="#myModal2">Edit</i></a>
		                <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" style="padding: 2px 5px;font-size:10px;">Delete</button>
		                </form>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table> 
	@else
			<p>Tidak ada data.</p>
	@endif

</div>
@stop
