<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>listar</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
</head>
<body>

		<nav  class="navbar navbar-expand-lg navbar-dark bg-primary">
			  <div class="collapse navbar-collapse" >
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			    	<li class="nav-item ">
			        <a class="nav-link" href="index.php?c=Alquileres&a=admin">LISTADO DE ALQUILERES</a>
			      </li>

			      <li class="nav-item ">
			        <a class="nav-link" href="index.php?c=Usuarios&a=admin">LISTADO DE USUARIOS </a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="index.php?c=Alquileres&a=create">LISTADO DE CLIENTES</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link " href="index.php?c=Usuarios&a=create">LISTADO DE VEHICULOS</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0" action="index.php?c=Usuarios&a=view" method="post">
			      <input class="form-control mr-sm-2" type="text" name="nhab"  aria-label="Search" placeholder="Documento">
			      <button class="btn btn-outline-dark" type="submit">Consultar</button>
			    </form>
			  </div>
			</nav>

	<blockquote class="blockquote text-center">
		<label > Listado De Usuarios</label> 
	</blockquote>
	
</form> 
	<table  class="table table-bordered table-dark">            
		<tbody>
			<tr>
				
				<th>Id</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Perfil</th>
				<th>Documento</th>
				<th>Contraseña</th>
				<th>FechaNacimiento</th>
				<th>Acciones</th>
			</tr>
			<?php foreach($Usuarios as $Usuarios){ ?>
			<tr>
				<td><?= $Usuarios->IdUsuarios; ?></td>
				<td><?= $Usuarios->Nombre; ?></td>
				<td><?= $Usuarios->Apellidos; ?></td>
				<td><?= $Usuarios->Perfil; ?></td>
				<td><?= $Usuarios->Documento; ?></td>
				<td><?= $Usuarios->Contrasena; ?></td>
				<td><?= $Usuarios->FechaNacimiento; ?></td>
				<td> 
                    <a href="index.php?c=Usuarios&a=update&Id=<?=$Usuarios->IdUsuarios ?>">Editar</a> 
                    <a href="index.php?c=Usuarios&a=delete&Id=<?=$Usuarios->IdUsuarios ?>">Eliminar</a>

                </td>
			</tr>
			<?php } ?>
		</tbody>
	</table><br><br>          
 <button><a href="index.php?c=Usuarios&a=create">Crear</a></button>
</body>
</html>