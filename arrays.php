<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $persona = [
        "nombre" => "Jon",
        "apellido" => "Snow",
        "edad" => 27,
        "hobbies" => ["Netflix", "Fútbol", "Programar"]
      ];
      $persona["edad"]=25;
      $persona["direccion"]="winterfell";
      $persona["hobbies"][]="Pasear a Ghost";
      var_dump($persona);
    ?>
  </body>
</html>
