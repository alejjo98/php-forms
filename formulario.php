<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO ENCUESTA</title>
</head>
<body background="https://thumbs.dreamstime.com/z/resultados-llave-en-un-fondo-blanco-83670605.jpg">
    <?php
    $nombre = $_REQUEST["nombreCliente"];
    if($_REQUEST["edadCliente"]<0){
       
    ?> <span>no se puede agregarr un valor negativo en la edad</span>
    <?php 
    
    exit(0);
   
    

    }
    $edad = $_REQUEST["edadCliente"];
    $bebida = $_REQUEST["bebidas"];
    $recomendaciones = $_REQUEST["sugerencias"];
    ?>
    <?php     
    if($_REQUEST["producto"]=="perro"){
        $comida= "PERRO";
        $imagenProducto = "https://d1kxxrc2vqy8oa.cloudfront.net/wp-content/uploads/2019/04/05085017/RFB-2603-4-perroscalientes.jpg";
    }
    if($_REQUEST["producto"]=="pizza"){
        $comida= "PIZZA";
        $imagenProducto = "https://placeralplato.com/files/2016/01/Pizza-con-pepperoni.jpg";
    }
    if($_REQUEST["producto"]=="hamburguesa"){
        $comida= "HAMBURGUESA";
        $imagenProducto = "https://saboryestilo.com.mx/wp-content/uploads/2019/07/como-preparar-carne-para-hamburguesa-1-800x400.jpg";
    } ?>

    <div>      

    ENCUESTA <br>

    <div class="infoCliente">
    Nombre Cliente = <?php echo $nombre ?> <br>
    Edad= <?php echo $edad ?><br>
    </div>

    <div id="productoCliente">
    Producto = <?php echo $comida ?><br>
    <img src= <?php echo $imagenProducto ?> height="400" width="600">
    </div>

    <div id="adicionesCliente">   
      Adiciones = 
    <?php 
    if(isset($_REQUEST["adicion1"])){
        $entrada= true;
        $adicion1= $_POST["adicion1"];
        echo $adicion1;
        
    }?>
    <br>
    <?php
    if(isset($_REQUEST["adicion2"])){
        $entrada= true;
        $adicion2= $_POST["adicion2"];
        echo $adicion2;
               
    }
    ?>
    <br>
    <?php
    if(isset($_REQUEST["adicion3"])){
        $entrada= true;
        $adicion3= $_POST["adicion3"];
        echo $adicion3;
   }
    ?>
    <br>
    <?php
    if(isset($_REQUEST["adicion4"])){
        $entrada= true;
        $adicion4= $_POST["adicion4"];
        echo $adicion4;

    }
    ?> <br>

    </div>
    <div class="bebidaCliente">        
    Bebida Favorita = <?php echo $bebida ?> <br>
    </div>


    Sugerencias = <?php echo $recomendaciones ?><br>
    </div>


</body>
</html>