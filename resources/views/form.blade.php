<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
		<h1>formulario ejemplo</h1>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
	
		<form method="POST" action="{{ url('usuarios') }}">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Nombre:</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Pedro Perez" value="">
			</div>

			<div class="form-group">
				<label for="email">Correo electrónico:</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="pedro@example.com" value="">
			</div>

			<div class="form-group">
				<label for="password">Contraseña:</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Mayor a 6 caracteres">
			</div>

			<button type="submit" class="btn btn-primary">Crear usuario</button>
        </form>
	
    </body>
</html>
