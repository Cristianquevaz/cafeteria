	
<?php 
$nombre =$_POST['nombre'];
include 'conexion.php' ;
$sql = "SELECT id_producto FROM productos WHERE nombre ='$nombre'";
$resultado = mysqli_query($conexion, $sql);
while($fila = mysqli_fetch_assoc($resultado)){
    $id_producto = $fila['id_producto'];
   // $stock = $fila['stock'];
      }
if(isset($_POST['nombre'])){
 //$id_producto= $_REQUEST['$id'];
 $cantidad =$_POST['cantidad'];
 $total = $_POST['total'] ;
 $valor = $cantidad * $total; 
 $num = 0;
 
}
if ($cantidad<$num) {
    echo "<script>alert('numero negativo');</script>";
    echo "<script>window.location.href = 'index_venta.php';</script>";
}


$sql = "SELECT stock FROM productos WHERE id_producto = $id_producto";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);
$stock = $fila['stock'];
if ($stock < $cantidad ){
    echo "<script>alert('no se puede realizar la venta');</script>";
    echo "<script>window.location.href = 'index_venta.php';</script>";
}else{
    
    $insertar = "INSERT INTO  ventas (idproducto,nombre_producto,cantidad,total) values ('".$id_producto."','$_POST[nombre]','$cantidad','".$valor."')";
    $resultado = mysqli_query($conexion,$insertar);
}

$actualizar = "UPDATE productos SET stock = $stock-$cantidad WHERE id_producto = $id_producto";


$resultado = mysqli_query($conexion,$actualizar);
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


 
