@extends('layout')
@section('content') 
<a href="/"><i class="fas fa-plus" style="font-size: 24px;color:primary"></i></a>


<table class="table table-striped table-borderless table-hover bg-light" id="table">
	<thead>
		<tr>
			<td>Nationality Name</td>
			<td>Active</td>
			<td>Remark</td>
			<td colspan="2">actions</td>
			
		</tr>
	</thead>
	<tbody>
		@foreach($nationality as $nationalitye)
		<tr>
			<td>{{$nationalitye->nationalityDesc}}</td>
			<td>{{$nationalitye->active}}</td>
			<td>{{$nationalitye->remark}}</td>
			<td>
				<a href="{{route('mmCn.edit',$nationalitye->nationalityId)}}"><i  class="fas fa-edit" style="font-size:24px;color:violet"></i></a>
			</td>
			<td>
				<form action="{{route('mmCn.destroy',$nationalitye->nationalityId)}}" method="POST">
					@csrf
					@method('DELETE')
					<button type="Submit"><i class="material-icons" style="font-size: 30px;color: red">delete</i></button>
				</form>
			</td>
			
		</tr>
		@endforeach
	</tbody>
</table>

<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>

@endsection