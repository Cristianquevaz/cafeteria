<!DOCTYPE html>
<html lang="es">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  onsubmit="return validarFormulario()"  action="registra_pro.php" method="post"> 
    
<div align="center" style="background-color:#EB235F;height:600px;"  class="container">

<div  style="background-color:#3B363B"class="container">
    
    <h3 style="color:#FEFAFA">INGRESAR PRODUCTOS</h3> </br>
    
    </div>

    

   
    <div class="col-md-4 mb-3">
      <label style="color:#FEFAFA" for="validationServer02">Nombre del producto </label>
     <input type="text" class="form-control" name="nombre" id="validationServer02" placeholder="" value="" pattern="[A-Za-z]+"required>
      <div class="valid-feedback">
        Looks good!
      </div>
      
    </div>

    
    <div class="col-md-4 mb-3">
      <label style="color:#FEFAFA" for="validationServer02">Referencia</label>
      <input type="text" class="form-control" name="referencia" id="validationServer02" placeholder="" value="" required >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
 

    <div class="col-md-4 mb-3">
      <label style="color:#FEFAFA" for="validationServer02">Precio</label>
      <input type="text" class="form-control" name="precio" id="validationServer02" placeholder="" value="" required >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    
    <div class="col-md-4 mb-3">
      <label style="color:#FEFAFA" for="validationServer02">Peso</label>
      <input type="text" class="form-control" name="peso" id="validationServer02" placeholder="" value="" required >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div  class="form-group col-md-4">
      <label style="color:#FEFAFA" for="inputState">categoria</label>
      <select id="inputState" class="form-control" name="categoria" required>
        <option selected>Escoger...</option>
        <option value="lacteos ">  lacteos </option>
        <option value="Comidas congeladas">  Comidas congeladas </option>
        <option value="Bebidas">  Bebidas</option>
        <option value="Macro snarcks">  dulces </option>
        <option value="Comidas rapidas">  Comidas rapidas</option>
        
      </select>
    </div>



    <div class="col-md-4 mb-3">
      <label style="color:#FEFAFA" for="validationServer05">Stock</label>
      <input type="text" class="form-control" name="stock" id="validationServer05" placeholder="" required>
      <div class="invalid-feedback">
       
      </div>
    </div>


    <input type="submit" class="btn btn-success" name="registrar" value="REGISTRAR">
  <a href="tablapro.php" class="btn btn-primary" role="button"> Ver productos </a>
  <br>
</div>

<script>
function validarFormulario() {
  var stock = document.getElementById("stock").value;
  if (cantidad < 0) {
    alert("La cantidad debe ser mayor o igual a cero");
    return false; // Evitar que se envíe el formulario
  }
  return true; // Permitir que se envíe el formulario
}
</script>

<script>
function validarFormulario() {
  var peso = document.getElementById("peso").value;
  if (cantidad < 0) {
    alert("La cantidad debe ser mayor o igual a cero");
    return false; // Evitar que se envíe el formulario
  }
  return true; // Permitir que se envíe el formulario
}
</script>

<script>
function validarFormulario() {
  var precio = document.getElementById("precio").value;
  if (cantidad < 0) {
    alert("La cantidad debe ser mayor o igual a cero");
    return false; // Evitar que se envíe el formulario
  }
  return true; // Permitir que se envíe el formulario
}
</script>
<script>
function validarFormulario() {
  var referncia = document.getElementById("referencia").value;
  if (cantidad < 0) {
    alert("La cantidad debe ser mayor o igual a cero");
    return false; // Evitar que se envíe el formulario
  }
  return true; // Permitir que se envíe el formulario
}

</script>

<script>
function validarFormulario() {
  var nombre = document.getElementById("nombre").value;
  if (/\d/.test(nombre)) {
    alert("El nombre no debe contener números");
    return false; // Evitar que se envíe el formulario
  }
  return true; // Permitir que se envíe el formulario
}
</script>
</form>


    
</body>
</html>