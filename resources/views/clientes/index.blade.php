@extends('layouts.app')

@section('content')
    <h1>Clientes</h1>
	<table class="table table-striped table-hover" style="width: 60%; margin: 2em">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Correo Electronico</th>}
				<th>Telefono</th>
				<th>Creado en</th>
				<th>Actualizado en</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($clientes as $cliente)
				<tr>
					<td> {{ $cliente->id }} </td>
					<td> {{ $cliente->full_name }} </td>
					<td> {{ $cliente->email }} </td>
					<td> {{ $cliente->phone_number }} </td>
					<td> {{ $cliente->created_at }} </td>
					<td> {{ $cliente->updated_at }} </td>			
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection