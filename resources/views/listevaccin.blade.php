{{-- //@extends('default') --}}

{{-- //@section('content') --}}

	{{-- //<div class="d-flex justify-content-end mb-3"><a href="{{ route('vaccins.create') }}" class="btn btn-info">Create</a></div> --}}
    @include('welcome')
    <link href="../css/blog/app.min.css" rel="stylesheet" />

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>nom</th>
				<th>dose</th>

			</tr>
		</thead>
		<tbody>
			@foreach($vaccins as $vaccin)
				<tr>
					<td>{{ $vaccin->id }}</td>
					<td>{{ $vaccin->nomvacin }}</td>
					<td>{{ $vaccin->dose }}</td>
				</tr>

			@endforeach
		</tbody>
	</table>


