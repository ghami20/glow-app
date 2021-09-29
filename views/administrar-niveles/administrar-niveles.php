<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="../shared/header-loggedin/styles.css">

<?php include "../shared/header-loggedin/header-loggedin.php" ?>
<div class="container">
	<div class="table-container">
		<h1>Niveles</h1>
		<button class="btn btnCrear">
			Crear nivel 
			<span class="material-icons-outlined" style="font-size:14px;">add_circle_outline</span>
		</button>
		<table class="table table-borderless" >
		<tbody>
			<tr>
				<td>Principiante</td>
				<td>
					<span class="material-icons-outlined icon" style="font-size:24px;">edit</span> 
					<span class="material-icons-outlined icon">delete_outline</span>
				</td>
			</tr>
				<tr>
				<td>Intermedio</td>
				<td>
					<span class="material-icons-outlined icon" style="font-size:24px;">edit</span> 
					<span class="material-icons-outlined icon">delete_outline</span>
				</td>
			</tr>
			<tr>
				<td>Avanzado</td>
				<td>
					<span class="material-icons-outlined icon" style="font-size:24px;">edit</span> 
					<span class="material-icons-outlined icon">delete_outline</span>
				</td>
			</tr>
		</tbody>
		</table>
	</div>
</div>
