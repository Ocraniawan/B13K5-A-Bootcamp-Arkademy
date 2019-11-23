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
			<p>bagian body modal.</p>
		</div>
		<!-- footer modal -->
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">ADD</button>
		</div>
	</div>
   </div>
</div>