 
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/util12.css">
  <link rel="stylesheet" type="text/css" href="css/main12.css">
<!--===============================================================================================-->
</head>


<body>
	
      
             

<div class="limiter">
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100">
          <table>
            <thead>
              <tr class="table100-head">
                <th class="column1"><div align="center">Nombre</th>
                <th class="column2"><div align="center">Apellido Materno ID</th>
                <th class="column3"><div align="center">Apellido Paterno</th>
                <th class="column4"><div align="center">Correo</th>
                <th class="column5"><div align="center">Puesto</th>
                
              </tr>
              <?php
$conexion=mysqli_connect('localhost', 'root', '12345678', 'INE') or die(mysqli_error());
$buscar = $_POST["palabra"];
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo like '%$buscar%' ");
while($datos = mysqli_fetch_array($resultado))
{
?>

            </thead>
            <tbody>
               <tr>
<td class="column1"><div align="center"><?php echo $datos['nombre'] ?></div></td>
<td class="column2"><div align="center"><?php echo $datos['materno'] ?></div></td>
<td class="column3"><div align="center"><?php echo $datos['paterno'] ?></div></td>
<td class="column4"><div align="center"><?php echo $datos['correo'] ?></div></td>
<td class="column5"><div align="center"><?php echo $datos['puesto'] ?></div></td>
</tr>
                
                <?php   
}
?>

<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $oficio= $_POST['oficio'];
            $asunto= $_POST['asunto'];
             $dirigido= $_POST['dirigido'];
              $atencion= $_POST['atencion'];
               $observaciones= $_POST['observaciones'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO financieros (oficio, asunto, dirigido, atencion, observaciones, nombre_archivo) VALUES('$oficio','$asunto','$dirigido','$atencion','$observaciones','$nombre')";
            $query = $db->execute($sql);
            if($query){
    
    $aviso = "El registro se ha actuaizado satisfactoriamente.";
    echo "<script>alert('$aviso')</script>";
   
    }
  else{
  
    $aviso = "Problemas.";
    echo "<script>alert('$aviso.$sentencia')</script>";
   
  }
  header("location:consultas.php");
}
}
}
?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

        


<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-pic js-tilt" data-tilt>
			<img src="images/a.jpg" alt="IMG">
			</div>
			<form action="test.php" method="post" class="login100-form validate-form">
			<span class="login100-form-title">
			Test Covid-19
			</span>

						 



  <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
  <div class="pregunta">1. ¿Temperatura mayor a 38°?
  </div>
  <div class="respuestas">
  <div>  <input type="radio" name="preg1" value="5" required="" /> Sí<br /></div>
  <input type="radio" name="preg1" value="0" required=""/> No<br />
  </div>
  </div>

  <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">2. ¿Tienes tos?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg2" value="5" required="" /> Sí<br />
  <input type="radio" name="preg2" value="0" required="" /> No<br />
  </div>
  </div>

  <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">3. ¿Tienes dolor de cabeza?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg3" value="5" required=""/> Sí<br />
  <input type="radio" name="preg3" value="0" required=""/> No<br />
  </div>
  </div>

  <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">4. ¿Tienes malestar general?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg4" value="1" required=""/> Sí<br />
  <input type="radio" name="preg4" value="0" required=""/> No<br />
  </div>
  </div>

   <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">5. ¿Dificultad respiratoria oximetría de pulso?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg5" value="15" required=""/> Sí<br />
  <input type="radio" name="preg5" value="0" required=""/> No<br />
  </div>
  </div>

   <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">6. ¿Dolor articular?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg6" value="1" required=""/> Sí<br />
  <input type="radio" name="preg6" value="0" required=""/> No<br />
  </div>
  </div>

   <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">7. ¿Dolor muscular?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg7" value="1" required=""/> Sí<br />
  <input type="radio" name="preg7" value="0" required=""/> No<br />
  </div>
  </div>

   <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">8. ¿Dolor al tragar?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg8" value="1" required=""/> Sí<br />
  <input type="radio" name="preg8" value="0" required=""/> No<br />
  </div>
  </div>

   <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">9. ¿Escurrimiento nasal?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg9" value="1" required=""/> Sí<br />
  <input type="radio" name="preg9" value="0" required=""/> No<br />
  </div>
  </div>


 <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">10. ¿Dolor torácico?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg10" value="1" required=""/> Sí<br />
  <input type="radio" name="preg10" value="0" required=""/> No<br />
  </div>
  </div>

   <div class="wrap-input100 validate-input" data-validate = "Password is required">
  <div class="pregunta">11. ¿Ojos rojos?
  </div>
  <div class="respuestas">
  <input type="radio" name="preg11" value="1" required=""/> Sí<br />
  <input type="radio" name="preg11" value="0" required=""/> No<br />
  </div>
  </div>



<div class="container-login100-form-btn">
<input  class="login100-form-btn" type="submit" name="submit" value="Ingresar"/>
</button>
</div>


         

         

<div class="text-center p-t-136">
<a class="txt2"><!--<a class= "txt2" href="#">-->
Operación de sistemas - INE 
</a>
</div> 
       
</form>




	</div>		
	</div>
	</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>