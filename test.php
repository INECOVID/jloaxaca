
<!DOCTYPE html>
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
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
             <img src="images/a.jpg" alt="IMG">
        </div>

        <form action="buscar.php" method="post" class="login100-form validate-form">
          <span class="login100-form-title">
            Test Covid-19
          </span>

<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            
          <?php 

if (isset($_POST["preg1"]) ){
$preg1 = $_POST["preg1"]; 
}else{
$preg1 = 0;
}

if (isset($_POST["preg2"]) ){
$preg2 = $_POST["preg2"]; 
}else{
$preg2 = 0;
}

if (isset($_POST["preg3"]) ){
$preg3 = $_POST["preg3"]; 
}else{
$preg3 = 0;
}

if (isset($_POST["preg4"]) ){
$preg4 = $_POST["preg4"]; 
}else{
$preg4 = 0;
}

if (isset($_POST["preg5"]) ){
$preg5 = $_POST["preg5"]; 
}else{
$preg5 = 0;
}

if (isset($_POST["preg6"]) ){
$preg6 = $_POST["preg6"]; 
}else{
$preg6 = 0;
}

if (isset($_POST["preg7"]) ){
$preg7 = $_POST["preg7"]; 
}else{
$preg7 = 0;
}

if (isset($_POST["preg8"]) ){
$preg8 = $_POST["preg8"]; 
}else{
$preg8 = 0;
}


if (isset($_POST["preg9"]) ){
$preg9 = $_POST["preg9"]; 
}else{
$preg9 = 0;
}


if (isset($_POST["preg10"]) ){
$preg10 = $_POST["preg10"]; 
}else{
$preg10 = 0;
}


if (isset($_POST["preg11"]) ){
$preg11 = $_POST["preg11"]; 
}else{
$preg11 = 0;
}







$suma=$preg1+$preg2+$preg3+$preg4+$preg5+$preg6+$preg7+$preg8+$preg9+$preg10+$preg11;

echo "Tu triaje de puntuación es ".$suma."<br>";

if ($suma <10) { 
  echo "Puedes ingresar al centro de trabajo";
}
elseif ($suma >= 11 && $suma <= 29) {
  echo "Mandar a servicio médico para valorar ";
}

elseif ($suma >= 30) {

  echo "Direccionar a unidad de medicina familiar";
}



?>



            
            
            
          </div>

          
          
          

          <div class="text-center p-t-12">
            
            
          </div>

          <div class="text-center p-t-136">
            <a class="txt2" href="#">
              
              
            </a>
          </div>
        </form>
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
          