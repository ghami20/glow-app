<link rel="stylesheet" href="styles.css">
<!--HEADER-->
	<header>
		<nav class="navbar ">
			<div class="container-fluid">
				<a href="/glow-app/"><img width="70px" heigth="70px" src="../../assets/eco-friendly.png" alt="logo" class="logo" ></a>
				<input type="submit" class="btn btn-danger" id="btnCerrarSesion" value="Cerrar sesión"/>
			</div>
		</nav>
	</header>

<script>
	window.onload = ()=> {
	document.getElementById("btnCerrarSesion").addEventListener("click", ()=>{
		console.log("click")
		window.location.replace("../../index.php");
	})
}
</script>