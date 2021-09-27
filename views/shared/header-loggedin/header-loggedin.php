<!--Esta view es con el sólo fin de que se vea el maquetado completo. 
Se quitará al agregar funcionalidad al header para que muestre botones segun este activa la sesión o no-->

<!-- Sidebar -->
<div class="sidebar" style="display: none" id="mySidebar">
	<ul>
<button id="sidebarCloseBtn" class="btn closeBtn">&times;</button>
	<li><a href="#">Administrar niveles</a></li>
  <li><a href="#">Administrar  noticias</a></li>
  <li><a href="#">Administrar cuestionarios</a></li>
  <li><a href="#">Administrar centros de reciclaje</a></li>
	<li><a href="#">Administrar cupones</a></li>
  <li><input type="submit" class="btn w-100" id="btnCerrarSesion" value="Cerrar sesión"/></li>	
	</ul>
</div>
<!--HEADER-->
	<header>
		<nav class="navbar ">
			<div class="container-fluid">
				<a href="/glow-app/"><img width="70px" heigth="70px" src="../../assets/eco-friendly.png" alt="logo" class="logo" ></a>
  			<button class="btn " id="sidebarMenuBtn" >☰</button>
			</div>
		</nav>
	</header>

<script>
	window.onload = ()=> {
	document.getElementById("btnCerrarSesion").addEventListener("click", ()=>{
		console.log("click")
		window.location.replace("../../index.php");
	})
	document.getElementById("sidebarMenuBtn").addEventListener("click", w3_open);
	document.getElementById("sidebarCloseBtn").addEventListener("click", w3_close);

	function w3_open() {
		document.getElementById("mySidebar").style.width = "100%";
		document.getElementById("mySidebar").style.display = "block";
	}

	function w3_close() {
		document.getElementById("mySidebar").style.display = "none";
	}
}
</script>