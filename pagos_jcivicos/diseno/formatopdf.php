<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row"><div class="col-md"><h1>bootstrap</h1></div></div>
        <form method="post" action="/devsolutions.com.mx/pagos_jcivicos/diseno/informepdf.php" >       
            <div class="row">
                <div class="col-6 mt-3">
                    <label for="id_email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="id_email" name="email" placeholder="email@email.com">
                </div>

                <div class="col-6 mt-3">
                    <label for="id_password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="id_password" name="password" placeholder="Introduce tu contraseña">
                </div>

                <div class="col-6 mt-3">
                    <label for="id_addres" class="form-label">Dirección:</label>
                    <input type="text" class="form-control" id="id_address" name="address"
                    placeholder="Introduce tu direccion">
                </div>

                <div class="col-6 mt-3">
                    <label for="id_addres" class="form-label">Dirección #2:</label>
                    <input type="text" class="form-control" id="id_address2" name="address2"
                    placeholder="Introduce tu direccion secundaria">
                </div>

                <div class="col-6 mt-3">
                    <label for="id_ciudad" class="form-label">Ciudad: </label>
                    <input type="text" class="form-control" id="id_city" name="city"
                    placeholder="Itroduce tu ciudad">
                </div>

                <div class="col-6 mt-3">
                    <label for="id_pais" class="form-label">Pais: </label>
                    <input type="text" class="form-control" id="id_country" name="country"
                    placeholder="Itroduce tu Pais">
                </div>

                <div class="col-6 mt-3">
                   <!--  <button type="button" class="btn btn-primary" id="btn-ver" onClick="verDatos()">Ver reporte</button> -->

                    <input type="submit" value="Ver reporte" name="registrar" id="id_registrar" class="btn btn-primary">

                </div>
            
            
            </div>
        </form> 
        
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/main.js"></script>
</body>
</html>