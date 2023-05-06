	
<?php 

include 'conexion.php' ;

 $id_producto= $_REQUEST['id_producto'];
 

 $nombre =$_POST['nombre'];
 $referencia =$_POST['referencia'];
 $precio =$_POST['precio'];
 $peso =$_POST['peso'];
 $categoria =$_POST['categoria'];
 $stock =$_POST['stock'];
 
 

 $insertar = "UPDATE productos SET  nombre='$nombre',referencia = '$referencia' ,precio = '$precio' ,peso ='$peso', categoria='$categoria',stock='$stock'  WHERE id_producto = '$id_producto'";
 $resultado = mysqli_query($conexion,$insertar);

       if (!$resultado){
echo"error al actualizar producto";

 }
else{
   // header("location: index.php");
   ?>
    <script type="text/javascript"> 
      	alert("actualizacion exitosa");
        window.location.href='index.php';
        </script>
<?php
}
mysqli_close($conexion);
 ?>

