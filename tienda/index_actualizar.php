
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	
</script>


</head>

<body>
<?php 


 	$id_producto =$_GET['id_producto'];
        include_once 'conexion.php' ;
     $sql= "SELECT * FROM productos WHERE id_producto ='$id_producto'";
   $resultado = mysqli_query($conexion,$sql);
  while ($fila = mysqli_fetch_assoc($resultado)) {     
   


 

?>

<form style="background-color:" action="actualizar_pro.php?id_producto=<?php echo $fila ["id_producto"];?>" method="POST"> 

     
  <div  style="background-color:#EB235F" align="center" class="container">

    
    <div  style="background-color:#3B363B"class="container">
      <!--<iframe src="C:\xampp\htdocs\proyectocrud\img"></iframe>-->
    
    <h3 style="color:#FEFAFA">ACTUALIZAR PRODUCTO</h3> </br>
    
    </div>
      
   
    <div class="col-md-4 mb-3">
      <label style="color:#FEFAFA" for="validationServer02">nombre</label>
     <input type="text" class="form-control is-invalid" name="nombre" id="validationServer02" placeholder="" value="<?php  echo $fila['nombre']; ?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    
    <div class="col-md-4 mb-3">
      <label style="color:#FEFAFA" for="validationServer02">Referencia</label>
     <input type="text" class="form-control is-invalid" name="referencia" id="validationServer02" placeholder="" value="<?php  echo $fila['referencia']; ?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4 mb-3">
      <label style="color:#FEFAFA" for="validationServer02">precio</label>
      <input type="text" class="form-control is-invalid" name="precio" id="validationServer02" placeholder="" value=" <?php  echo  $fila['precio']; ?>" required >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label style="color:#FEFAFA" for="validationServer02">Peso</label>
      <input type="text" class="form-control is-invalid" name="peso" id="validationServer02" placeholder="" value=" <?php  echo  $fila['peso']; ?>" required >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>


    <div class="col-md-4 mb-3">
      <label style="color:#FEFAFA" for="validationServer05">Categoria</label>
      <input type="text" class="form-control is-invalid" name="categoria" id="validationServer05" placeholder="" value="<?php  echo  $fila['categoria']; ?>" required>
      <div class="invalid-feedback">
        

      <div class="col-md-4 mb-3">
      <label style="color:#FEFAFA" for="validationServer02">Stock</label>
      <input type="text" class="form-control is-invalid" name="stock" id="validationServer02" placeholder="" value=" <?php  echo  $fila['stock']; ?>" required >
      <div class="valid-feedback">
      </div>
    </div>
        
      </div>
    </div>
  <?php  } mysqli_free_result($resultado);?>

 <input type="submit"  class="btn btn-success" name="actualizar" value="ACTUALIZAR" >
  <a href="index.php" class="btn btn-primary" role="button"> volver al inicio </a>


  
  </div>

</form>
</body>
</html>