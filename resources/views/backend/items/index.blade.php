@extends('backendtemplate')
@section('content')

			<div class="d-sm-flex align-items-center justify-content-between mb-4">
		
			<h1 class="h3 mx-3 mb-0 text-gray-800">Items List</h1>
			<a href="{{route('items.create')}}" class=" mx-4 btn btn-info">New</a>

		
</div>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">

			<thead class="table-dark">
				<tr>
					<th>No</th>
					<th>Codeno</th>
					<th>Name</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1;@endphp
				@foreach($items as $item)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$item->codeno}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->price}}MMK</td>
					<td>
						<a href="" class="btn btn-info">Detail</a>
						<a href="{{route('items.edit',$item->id)}}" class="btn btn-warning">Edit</a>
						<form action="{{route('items.destroy',$item->id)}}"on submit="return confirm(('Are you sure to delete?')" class="d-inline-block" method="POST">
							@csrf
						@method("DELETE")
						<button class="btn btn-danger">Delete</button>
                     </form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>
@endsection