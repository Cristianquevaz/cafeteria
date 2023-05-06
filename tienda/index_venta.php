<!DOCTYPE html>
<html lang="es">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>



<form action="vender.php" method="post"> 
    
<div align="center" style="background-color:#EB235F;height:600px;"  class="container">

<div  style="background-color:#3B363B"class="container">
    
    <h3 style="color:#FEFAFA">VENDER PRODUCTOS</h3> </br>
    
    </div>

    
    
    <div  class="form-group col-md-4">
      <label style="color:#FEFAFA" for="inputState">Selecione Produto</label>
      <select id="inputState" class="form-control" name="nombre">
        <option selected>Escoger...</option>
          <?php

       require 'conexion.php';    
  $sql = "SELECT nombre FROM productos";
  $resultado = mysqli_query($conexion, $sql);
  while($fila = mysqli_fetch_assoc($resultado)){
   echo '<option value="'.$fila['nombre'].'">'.$fila['nombre'].'</option>';
   
 
  }

?>
      </select>
    </div>

    
    <div class="col-md-4 mb-3">
      <label style="color:#FEFAFA" for="validationServer02">Cantidad</label>
      <input type="number" class="form-control" name="cantidad" id="validationServer02" placeholder="" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
    

      <label style="color:#FEFAFA" for="validationServer02">Valor</label>
      <input type="number" class="form-control" name="total" id="validationServer01" placeholder="" value="" >
      <div class="valid-feedback">
        Looks good!
      </div>
      
    </div>
    
    
    <?php
   /* if(isset($_POST['multiply'])) {
  $num1 = $_POST['cantidad'];
  $num2 = $_POST['total'];
  $result = $num1 * $num2;
echo ' <div class="col-md-4 mb-3">
<label style="color:#FEFAFA" for="validationServer02">Total</label>
<input type="text" class="form-control" name"total" readonly value="' . $result . '">
</div>';
}*/
?>
    

   <!-- <button type="submit" name="multiply">Multiplicar</button>-->
    <br>
   
      <br>
      <input type="submit" class="btn btn-success" name="registrar" id="vender" value="Vender">
      <a href="tablapro.php" class="btn btn-primary" role="button"> Ver productos </a>
    <?php 

    include_once 'conexion.php' ;
 $sql= "SELECT * FROM ventas";
$resultado = mysqli_query($conexion,$sql);
while ($fila = mysqli_fetch_assoc($resultado)) { 
    ?>
    <?php  } mysqli_free_result($resultado);?>

    <div style="background-color:#F2EFFB" class="container">
    
<table class="table table-bordered table table-striped">
	<thead class="thead-danger">
		<tr style="background-color:#EB235F"> 
			<th style="color:#FEFAFA">id venta</th>
      <th style="color:#FEFAFA">id producto</th>
			<th style="color:#FEFAFA">Nombre</th>
			<th style="color:#FEFAFA">fecha venta</th>
			<th style="color:#FEFAFA">Cantidad</th>
			<th style="color:#FEFAFA">Total</th>
			
			
		
			


		</tr>
	</thead>
	<tbody>
		<?php 
		
	include_once("conexion.php");
	
	    $sql = "SELECT * FROM ventas";
        $resultado = mysqli_query($conexion, $sql);
        while($fila = mysqli_fetch_assoc($resultado)){
	  /* $resultado = mysqli_query($conexion,$producto);
        while($row = mysqli_fetch_assoc($resultado))*/
	    	echo "<tr>";
	    	echo '<td>'.$fila ['id_venta'].'</td>';
        echo '<td>'.$fila ['idproducto'].'</td>';
	    	echo '<td>'.$fila ['nombre_producto'].'</td>';
	    	echo '<td>'.$fila ['fecha_venta'].'</td>';
			echo '<td>'.$fila ['cantidad'].'</td>';
			//echo '<td>'.$fila ['categoria'].'</td>';
	    	echo '<td>'.$fila ['total'].'</td>';
	    	// '<td> '.$fila ['fecha'].'</td>';
	    	echo '<td with=250.px>';
	    	//echo '<a class="btn btn-primary" href="index_actualizar.php?id_venta='.$fila ['id_venta'].'"> Vender </a>';
	    	//echo   "<td> <a href='eliminar_pro.php?id_producto=".$fila ['id_producto']."''><button type='button' class='btn btn-outline-danger'>eliminar</button></a></td>";

	    	echo '</tr>';
        }
          
		 ?>
		
	</tbody>
</table>
    </div>
  <br>
</div>
</form>


<!--<script type ="text/javascript" src="venta.js"></script>-->
</body>
</html>