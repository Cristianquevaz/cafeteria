	
<?php 

include 'conexion.php' ;

if(isset($_POST['nombre'])){
 $nombre =$_POST['nombre'];
 $referencia =$_POST['referencia'];
 $precio =$_POST['precio'];
 $peso =$_POST['peso'];
// $categoria =$_POST['categoria'];
 $stock =$_POST['stock'];
}

 

 $insertar = "INSERT INTO  productos (nombre,referencia,precio,peso,categoria,stock) values ('$nombre','$referencia','$precio','$peso','$_POST[categoria]','$stock')";
 $resultado = mysqli_query($conexion,$insertar);

       if (!$resultado){
echo"error al guardar producto";

 }
else{
   // header("location: index.php");
   ?>
    <script type="text/javascript"> 
      	alert("guardado exitosamente");
        window.location.href='index.php';
        </script>
<?php
}
mysqli_close($conexion);
 ?>

