<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Esto es el formulario principal</h1>
        </div>
    </div>

    <div class="row">
        
            <div class="col-6">
            <form method="post" action="../controllers/crearegistro.php">
            <label for="id_nombre" class="form-label">Nombre: </label>
            <input type="text" name="nombre" id="id_nombre" class="form-control" placeholder="Introduce tu nombre"  required>
             
             
            <label for="id_email" class="form-label">Correo electronico: </label>
            <input type="email" name="email" id="id_email" class="form-control" placeholder="Introduce tu correo electronico" required>
    
            <label for="id_tel" class="form-label">Telefono (ej: 452-113-5117): </label>
            <input type="text"  name="tel" id="id_tel" class="form-control" placeholder="Introduce tu numero a 10   digitos ej: 452-113-5117" min="1" max="10" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
            
            <input type="submit" value="Enviar" name="registrar" id="id_registrar" class="form-control mt-3">

            </form>
           </div>
        
     </div>
    
    

</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>