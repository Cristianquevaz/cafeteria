<!DOCTYPE html>
<html>
<head >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

</head>
<body style="background-color:#C6C4C6">
	<form  method="POST">


<div style="background-color:#F2EFFB" class="container">
	<center style="background-color:#3B363B"> 
			<head  style="background-color:#3B363B" >
		<h3 style="color:#FEFAFA" >PRODUCTOS
    
    </h3>
		</head>
		<head>
	
	<!-- <a href="buscar.php" class="btn btn-danger btn-lg active">  .buscar. </a>-->
	</head>
</center>
<?php 


echo " <center style='color:#EB235F'> </center>";


 ?>
<div ALIGN="center" class="col-md-4 mb-3">
      <label for="validationServer02">  </label>
   <!--  <input  type="text" class="form-control is-invalid" name="ida" id="validationServer02" placeholder="" value="" required>-->
	  <!--<input href="index_venta.php" type="submit" class="btn btn-warning" name="buscar" value="Vender">-->
	  <a href="index_venta.php" class="btn btn-warning">Vender produto</a>
	  <a href="index.php" class="btn btn-primary" role="button"> Registra Producto </a>

      <div class="valid-feedback">
        Looks good!
      </div>

    </div>

	
		
		

<table class="table table-bordered table table-striped">
	<thead class="thead-danger">
		<tr style="background-color:#EB235F"> 
			<th style="color:#FEFAFA">id producto</th>
			<th style="color:#FEFAFA">Nombre</th>
			<th style="color:#FEFAFA">Referencia</th>
			<th style="color:#FEFAFA">Precio</th>
			<th style="color:#FEFAFA">Peso</th>
			<th style="color:#FEFAFA">Categoria</th>
			<th style="color:#FEFAFA">Stock</th>
			<th style="color:#FEFAFA">Fecha</th>
            <th style="color:#FEFAFA">Actualizar</th>
			<th style="color:#FEFAFA">Eliminar</th>
			


		</tr>
	</thead>
	<tbody>
		<?php 
		
	include_once("conexion.php");
	
	    $sql = "SELECT * FROM productos";
        $resultado = mysqli_query($conexion, $sql);
        while($fila = mysqli_fetch_assoc($resultado)){
	  /* $resultado = mysqli_query($conexion,$producto);
        while($row = mysqli_fetch_assoc($resultado))*/
	    	echo "<tr>";
	    	echo '<td>'.$fila ['id_producto'].'</td>';
	    	echo '<td>'.$fila ['nombre'].'</td>';
			echo '<td>'.$fila ['referencia'].'</td>';
	    	echo '<td>'.$fila ['precio'].'</td>';
			echo '<td>'.$fila ['peso'].'</td>';
			echo '<td>'.$fila ['categoria'].'</td>';
	    	echo '<td>'.$fila ['stock'].'</td>';
	    	echo '<td> '.$fila ['fecha'].'</td>';
	    	echo '<td with=250.px>';
	    	echo '<a class="btn btn-success" href="index_actualizar.php?id_producto='.$fila ['id_producto'].'"> actualizar </a>';
	    	echo   "<td> <a href='eliminar_pro.php?id_producto=".$fila ['id_producto']."''><button type='button' class='btn btn-outline-danger'>eliminar</button></a></td>";

	    	echo '</tr>';
        }
          
		 ?>
		
	</tbody>
</table>
</div>
</form>
</body>
</html>
