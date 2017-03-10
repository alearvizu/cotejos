<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clientes</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<table class="table table-striped table-hover" style="width: 60%; margin: 2em">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Correo Electronico</th>}
				<th>Telefono Celular</th>
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
					<td> {{ $cliente->cel_phone }} </td>
					<td> {{ $cliente->phone_number }} </td>
					<td> {{ $cliente->created_at }} </td>
					<td> {{ $cliente->updated_at }} </td>			
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>