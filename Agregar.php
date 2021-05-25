<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <?php 
   include_once('Conexion.php');
    if(isset($_POST['Data'])){
        if(strlen ($_POST['nombre']) >= 1 &&  strlen($_POST['apellido']) >= 1 &&  strlen($_POST['edad']) >= 1 && strlen($_POST['ciudad']) >= 1 && strlen($_POST['pais']) >= 1){

            $Nombre = $_POST['nombre'];
            $Apellido = $_POST['apellido'];
            $Edad = $_POST['edad'];
            $Pais = $_POST['pais'];
            $Ciudad = $_POST['ciudad'];

            $Agregar = 'INSERT INTO detalles (nombre,apellido,edad,pais,ciudad) value (?,?,?,?,?)';
            $P_Agregar = $pdo-> prepare($Agregar);
            $P_Agregar-> execute(array($Nombre,$Apellido,$Edad,$Pais,$Ciudad));

            if($P_Agregar){
                ?>
                <div class="alert alert-primary" role="alert">
                   <h2> <center>DATOS GUARDADOS CON EXITO</center></h2>
               </div>
                <?php
               
            }else{
                ?>
                <h2>Ocurrio un error</h2>
                <?php
            }
            
         }else{
            ?>
            <div class="alert alert-danger" role="alert">
              <h2> <center>Ingresa los datos correctamente</center></h2>
            </div>
            
            <?php
            
         }
           

        }
    
     

    ?>

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

