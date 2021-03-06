<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>create</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/zx.css">

</head>
<body background="iconos/ferrari.png">

	<nav   class="navbar navbar-expand-lg navbar-dark" style="background-color:#000000;">
			  <div class="collapse navbar-collapse" class="align-self-center mr-3" >
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			    	<li class="nav-item ">
			        <a class="nav-link" href="index.php?c=Home">HOME</a>
			      </li>
			    	<li class="nav-item ">
			        <a class="nav-link" href="index.php?c=Alquileres&a=admin">LISTADO DE ALQUILERES</a>
			      </li>

			      <li class="nav-item ">
			        <a class="nav-link" href="index.php?c=Usuarios&a=admin">LISTADO DE USUARIOS </a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="index.php?c=Clientes&a=admin">LISTADO DE CLIENTES</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link " href="index.php?c=Vehiculos&a=admin">LISTADO DE VEHICULOS</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0" action="index.php?c=Alquileres&a=view" method="post">
			      <input class="form-control mr-sm-2" type="text" name="nhab"  aria-label="Search" placeholder="Ciudad">
			      <button class="btn btn-outline-dark" type="submit">
			      	<img src="iconos/buscar.png" alt="bus"">
			      </button>
			    </form>
			  </div>
			</nav>

			<blockquote class="blockquote text-center">
		<h1 class="display-5">Registrar Alquileres</h1>
	</blockquote>

	<div id="centro" >
	<center><form action="" method="post" >
		
		
		<label style="color:#F90000;">Ciudad:</label>
		
		<input class="form-control" type="text"   name="Alquileres[Ciudad]"  maxlength="45" value="" required="" /><br><br>		
		

		
		<label style="color:#F90000;">ValorDia:</label>
		
				<input type="number" name="Alquileres[ValorDia]" value="" required="" class="form-control"
		/><br><br>
		
		<label style="color:#F90000;">FechaRecogida:</label>
		<input type="datetime-local" name="Alquileres[FechaRecogida]"  value="" required="" class="form-control"/><br><br>

		<label style="color:#F90000;">FechaEntrega:</label>
		<input type="datetime-local" name="Alquileres[FechaEntrega]" value="" required="" class="form-control"/><br><br>

		<label style="color:#F90000;">OficinaDeRetiro:</label>
		<input   type="text"   name="Alquileres[OficinaDeRetiro]"  maxlength="45" value="" required="" class="form-control"/><br><br>	

		<label style="color:#F90000;">OficinaDeDevolucion:</label>
		<input   type="text"   name="Alquileres[OficinaDeDevolucion]"  maxlength="45" value="" required="" class="form-control"/><br><br>			

		<label style="color:#F90000;">Estado:</label>
		<select name="Alquileres[Estado]" value="" required="" class="custom-select">
			<option value="">Seleccione un Estado</option>
			<option value="Activo">Activo</option>
			<option value="Inactivo">Inactivo</option>
		</select><br><br>	

		<label style="color:#F90000;">FormaDePago:</label>
		<select name="Alquileres[FormaDePago]" value="" required="" class="custom-select">
			<option value="">Seleccione una Forma De Pago</option>
			<option value="TarjetaDeCredito">TarjetaDeCredito</option>
			<option value="Efectivo">Efectivo</option>
		</select><br><br>			

		<label style="color:#F90000;">Clientes_IdClientes:</label>
		<select name="Alquileres[Clientes_IdClientes]"  required="" class="custom-select">
			<option value="">--seleccionar--</option>
			<?php foreach ($misClientes as $cliente ) { ?>
				<option value="<?php echo $cliente->IdClientes ?>"><?php echo $cliente->Nombre ?></option>
			<?php }	?>
			
		</select><br><br>	

		<label style="color:#F90000;">Vehiculos_IdVehiculos:</label>
		<select name="Alquileres[Vehiculos_IdVehiculos]"  required="" class="custom-select">
			<option value="">--seleccionar--</option>	
			<?php foreach ($misVehiculos as $Vehiculo ) { ?>
				<option value="<?php echo $Vehiculo->IdVehiculos ?>"><?php echo $Vehiculo->Placa ?></option>
			<?php }	?>		
		</select><br><br>	

		<label style="color:#F90000;">Usuarios_IdUsuarios:</label>
		<select name="Alquileres[Usuarios_IdUsuarios]"  required="" class="custom-select">
			<option value="">--seleccionar--</option>	
			<?php foreach ($misUsuarios as $Usuario ) { ?>
				<option value="<?php echo $Usuario->IdUsuarios ?>"><?php echo $Usuario->Documento ?></option>
			<?php }	?>			
		</select><br><br>

		</div>
		<div id="boton" >
		<button type="submit"  class="btn btn-info">Crear Usuarios</button>
		</div>
	</form></center><br>

	<center><a href="index.php?c=Alquileres&a=admin" class="btn btn-outline-danger">volver</a> </center>
</body>
</html>