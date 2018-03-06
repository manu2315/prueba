

<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
</head>
<body>



	<form method="POST" action="{{ route('usuarios.store') }}" >
		{!! csrf_field() !!}
		<legend>Form title</legend>
	
		<div class="form-group">
			
			Nombre<input type="text" class="form-control" name="us_nombre" placeholder="Input field">
		
			Descripcion<input type="text" class="form-control" name="us_descripcion" placeholder="Input field">
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>

