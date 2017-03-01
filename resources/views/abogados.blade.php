<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Abogados</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<table class="table table-striped table-hover" style="width: 60%; margin: 2em">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Correo Electronico</th>
				<th>Telefono</th>
				<th>Creado en</th>
				<th>Actualizado en</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($lawyers as $lawyer)
				<tr>
					<td> {{ $lawyer->id }} </td>
					<td> {{ $lawyer->full_name }} </td>
					<td> {{ $lawyer->email }} </td>
					<td> {{ $lawyer->phone_number }} </td>
					<td> {{ $lawyer->created_at }} </td>
					<td> {{ $lawyer->updated_at }} </td>			
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>