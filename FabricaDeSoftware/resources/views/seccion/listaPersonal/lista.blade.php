
<table class="table table-stripped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Foto</th>
				<th>Correo</th>
				<th>Departamento</th>
			</tr>
		</thead>
		<tbody>
			@foreach($usuarios as $usuario)
			<tr>
				<td>{{$usuario->nombre}}</td>
				<td><img src="{{fotoUsuario/$usuario->foto}}" width=50%></td>
				<td>{{$usuario->correo}}</td>
				<td>{{$usuario->departamento}}</td>
			</tr>
		</tbody>
</table>