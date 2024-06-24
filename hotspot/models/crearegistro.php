<?php
require('connect.php');

// Si tanto nombre como email estan escritos, se escriben en la base de datos
//if (isset($_POST['username']) && isset($_POST['email'])){
//$username = $_POST['username'];
//$email = $_POST['email'];
$query = "INSERT INTO `user` (username, email) VALUES ('$username', '$email')";
$result = mysqli_query($connection, $query);
if($result){
   header('Location: http://10.5.50.1/login?username=admin2&password=admin2');
   die();
   }
else{
   $fmsg ="Hubo un error al conectarse, por favor intentelo de nuevo";
   }
   //}
?>
<html>
<head>
<title>Restaurante La Casona del Nonno</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.min.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-theme.min.css" >
<link rel="stylesheet" href="styles.css" >
<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<form class="form-signin" method="POST">
<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
<center>
<img src="Captura.PNG" border=0>
</center>
<h2 class="form-signin-heading">Bienvenido a la Casona del Nonno. Por favor, ingrese su mail para disfrutar de nuestro Wifi</h2>
<input type="text" name="username" class="form-control" placeholder="Nombre" required>
<label for="inputEmail" class="sr-only">Email address</label>
<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
<button class="btn btn-lg btn-primary btn-block" type="submit">Conectarse</button>
</form>
</div>
</body>
</html