<?php 
error_reporting(E_ALL ^ E_NOTICE);

$enlace = mysqli_connect("localhost", "root", "", "dbhotel2");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

mysqli_close($enlace);


//recuperar las variables
    $fechade_ingreso=$_POST['fechade_ingreso'];
      $fecha_salida=$_POST['fechade_salida'];
      $cantidad_personas=$_POST['cantidad_personas'];
      $tipo_habitacion=$_POST['tipo_habitacion'];
  //hacemos la sentencia de sql
      $sql="insert into datos VALUES('fechade_ingreso','fechade_salida','cantidad_personas','tipo_habitacion')";

      //ejecutar la sentencia sql
      $ejecutar = mysqli_query($dbhotel2,$query) or die (mysqli_error($dbhotel2));
      //verificar la ejecucion
      if (!$ejecutar) {
        echo "hubo algun error";
      }else{
        echo "datos guardados correctamete <br><a href='index.html'>Volver</a>";
      }



/*conectomos con el servidor
$conectar =mysqli_connect('localhost','root','','dbhotel2');

/*verificamons la coneccion
if (!$conectar) {
  echo "no se puede conectar con el servidor";
}else{
  $base =mysqli_select_db('dbhotel2');
  if (!$base) {
    echo "no se encontro la db";
}
}
    //recuperar las variables
    $fechade_ingreso=$_POST['fechade_ingreso'];
      $fecha_salida=$_POST['fechade_salida'];
      $cantidad_personas=$_POST['cantidad_personas'];
      $tipo_habitacion=$_POST['tipo_habitacion'];
  //hacemos la sentencia de sql
      $sql="insert into datos VALUES('fechade_ingreso','fechade_salida','cantidad_personas','tipo_habitacion')";

      //ejecutar la sentencia sql
      $ejecutar=mysqli_query($sql);
      //verificar la ejecucion
      if (!$ejecutar) {
        echo "hubo algun error";
      }else{
        echo "datos guardados correctamete <br><a href='index.html'>Volver</a>";
      }*/
  
   
  






 ?>

 