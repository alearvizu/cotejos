@extends('layouts.app')

@section('content')
	<h1>Usuarios</h1>
	<table class="table table-striped table-hover" style="width: 60%; margin: 2em">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Correo Electronico</th>
				<th>Creado en</th>
				<th>Actualizado en</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($users as $user)
				<tr>
					<td> {{ $user->id }} </td>
					<td> {{ $user->name }} </td>
					<td> {{ $user->email }} </td>
					<td> {{ $user->created_at }} </td>
					<td> {{ $user->updated_at }} </td>			
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
