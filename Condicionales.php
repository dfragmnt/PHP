<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // 1.
      $num1 = 7;
      $num2 = 9;
      $mayor = $num1 > $num2 ? $num1 : $num2;
      echo "El número mayor es $mayor"."<br>";
      $rand = rand(1,5);
      //=====================================================
    // 2.
      if($rand == 3 || $rand == 5){
        echo $rand . "<br>";
      }
      //=====================================================
    // 3.
      if ($rand != 3){
        echo "El número NO es 3" . "<br>";
      }
      //=====================================================
    // 4.
      $aleatorio = rand(1,100);
      if ($aleatorio > 50){
        echo "El número es mayor a 50 ($aleatorio)"."<br>";
      }
      else {
        echo "El número es menor a 50 ($aleatorio)"."<br>";
      }
    // 4.1 . Si el número el 50 NO cumple la condicion del IF
    // y entra directamente al ELSE.
      //=====================================================
    // 5. a
      $nombreDeUsuario = "admin";
      $ContraseniaDeUsuario = 1234;
      if ($nombreDeUsuario == "admin" && $ContraseniaDeUsuario == 1234)
      {
        echo "Bienvenido!"."<br>";
      }
      else if ($nombreDeUsuario != "admin" && $nombreDeUsuario != NULL)
      {
        echo "Nombre de usuario no válido"."<br>";
      }
      else if ($ContraseniaDeUsuario != 1234 && $ContraseniaDeUsuario != NULL)
      {
        echo "Contraseña incorrecta!"."<br>";
      }
      else
      {
        echo "Por favor completa todos los campos!"."<br>";
      }
      //=====================================================
    // 6. a
      $edad = 16;
      $casado = false;
      $sexo = "Otro";
      if ($edad >= 18 && $casado == false || $sexo == "Otro"){
        echo "Bienvenido!"."<br>";
      }
      //=====================================================
    // 7.
      $cantidadDeAlumnos = 28;
      if ($cantidadDeAlumnos){
        echo "true"."<br>";
      }
      else {
        echo "false"."<br>";
      }
    /*
      a. Imprime true. Ya que en PHP 0,"",NULL,[],"0" = FALSE.
                       y todo lo demas = TRUE
      b. Solo da false con $cantidadDeAlumnos = 0;
    */
      //=====================================================
    // 8.
      $numero = 20;
      $check = $numero % 2 == 0 ? true : false;
      if($check)
      {
        echo "El número es par"."<br>";
      }
      else { echo "El número es impar"."<br>";}
      //=====================================================
    // 9.
      $nota = "potato";
//      if (filter_var($nota, FILTER_VALIDATE_INT)){
      switch ($nota) {
//        case ( ! filter_var($nota, FILTER_VALIDATE_INT)):
//          echo "Valor no valido!"."<br>";
//          break;
        case ($nota < 0):
          echo "Número no valido!... por ahora."."<br>";
          break;
        case ($nota < 4 && $nota > 0):
          echo "Desaprobado"."<br>";
          break;
        case ($nota == 4 || $nota == 5):
          echo "Zafamos"."<br>";
          break;
        case ($nota > 5 && $nota < 9):
          echo "Bien!!!"."<br>";
          break;
        case ($nota == 9):
          echo "MUY bien!!"."<br>";
          break;
        case ($nota == 10):
          echo "Excelente!!!!!"."<br>";
          break;
    // 10.
        default:
          echo "El número no es válido"."<br>";
          break;
      }
//    }
//    else { echo "Valor no valido!"."<br>"; }
    ?>
  </body>
</html>
