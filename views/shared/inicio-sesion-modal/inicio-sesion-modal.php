<style>
<?php include "style.css" ?>
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Inicia sesión con tu cuenta</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" method="POST" class="form">
					<input type="email" class="input-form" name="email" id="email" placeholder="email">
					<span id="emailError" class="error"></span>
					<input type="password" class="input-form" name="password" id="password" placeholder="contraseña">
					<span id="passError" class="error"></span>
					<input type="submit" class="btn" value="Iniciar sesión" id="iniciar-sesion-btn" name="submitBtn">
				</form>
			</div>
			<div class="modal-footer d-flex justify-content-center">
				<a>
					<img style="margin-left: 5px;" width="35px" height="35px" src="./assets/gogle-icon.png" alt="google"> 
					<span>Google</span>
				</a>
			</div>
		</div>
	</div>
</div>

	<?php include "script.php" ?>