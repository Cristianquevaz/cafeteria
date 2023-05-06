	
<?php 

include 'conexion.php' ;

$id_producto= $_REQUEST['id_producto'];

 

 

 $eliminar = "DELETE FROM productos WHERE id_producto = '$id_producto'";
 $resultado = mysqli_query($conexion,$eliminar);

       if (!$resultado){
echo"error al guardar producto";

 }
else{
   // header("location: index.php");
   ?>
    <script type="text/javascript"> 
      	alert("producto eliminado");
        window.location.href='tablapro.php';
        </script>
<?php
}
mysqli_close($conexion);
 ?>

