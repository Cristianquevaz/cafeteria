	
<?php 
$nombre =$_POST['nombre'];
include 'conexion.php' ;
$sql = "SELECT id_producto FROM productos WHERE nombre ='$nombre'";
$resultado = mysqli_query($conexion, $sql);
while($fila = mysqli_fetch_assoc($resultado)){
    $id_producto = $fila['id_producto'];

}
if(isset($_POST['nombre'])){
 //$id_producto= $_REQUEST['$id'];
 $cantidad =$_POST['cantidad'];
 $total = $_POST['total'] ;
 $valor = $cantidad * $total; 
 
 
}

$sql = "SELECT nombre FROM productos";
  $resultado = mysqli_query($conexion, $sql);
  while($fila = mysqli_fetch_assoc($resultado)){
      $stock = $fila['stock'];
      if ($stock < $cantidad){
        echo "<script>alert('El valor de $stock es menor que el valor de $cantidad');</script>";
        echo "<script>window.location.href = 'index_venta.php.;</script>";
        
      }
      
      
    }
    $insertar = "INSERT INTO  ventas (idproducto,nombre_producto,cantidad,total) values ('".$id_producto."','$_POST[nombre]','$cantidad','".$valor."')";
 $resultado = mysqli_query($conexion,$insertar);

       if (!$resultado){
echo"error al guardar producto";

 }
else{
   // header("location: index.php");
   ?>
    <script type="text/javascript"> 
      	alert("venta exitosa");
        window.location.href='index_venta.php';
        </script>
<?php
}
mysqli_close($conexion);
 ?>


 
