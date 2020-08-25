<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecuesta a clientes</title>
</head>
<body background="https://image.freepik.com/vector-gratis/fondo-plano-persona-sujetando-encuesta_23-2147610349.jpg">

    <form action="\prog4\formulario1\formulario.php" method="POST"> 
        <fieldset>
            <legend>datos cliente</legend>            
        <div class="datosCliente">        
        <label for="nombrecliente">Ingrese el nombre del cliente</label><br>
        <input type="text" id="nombreCliente" name="nombreCliente"><br>
        <label for="edadCliente">Ingrese la edad del cliente</label><br>
        <input type="number" id="edadCliente" name="edadCliente"><br>
        </div><br>

        <div class="cuestionarioRadio">                
        <strong>SELECCIONE SU PRODUCTO FAVORITO</strong><br>
        <input type="radio"  name="producto" value="perro"> 
        <label for="perro">perro</label><br>
        <input type="radio"  name="producto" value="pizza">
        <label for="pizza">pizza</label><br>
        <input type="radio"  name="producto" value="hamburguesa">
        <label for="hamburguesa">hamburguesa</label><br>
        </div><br>
        

        <div class="cuestionarioCheckbox">
            <strong>SELECCIONE SUS ADICIONES FAVORITAS</strong><br>
            <input type="checkbox"  name="adicion1" value="queso">
            <label for="adicion1">QUESO</label><br>
            <input type="checkbox" name="adicion2" value="tocineta">
            <label for="adicion2">TOCINETA</label><br>
            <input type="checkbox" name="adicion3"  value="maiz">
            <label for="adicion3">MAIZ</label><br>
            <input type="checkbox" name="adicion4" value="jalapeños">
            <label for="adicion4">JALAPEÑOS</label><br>          
             
        </div><br>


       

        <div class="cuestionario">
        

        <div class="cuestionarioSelect">
            <strong>SELECCIONE SU BEBIDA FAVORITA</strong><br>
            <label for="bebidas">SELECCIONE BEBIDA</label>
            <select name="bebidas" id="bebidas" >
                <option value="gaseosa">GASEOSA</option>
                <option value="malteada">MALTEADA</option stream_select>
                <option value="limonada">LIMONADA</option>
                <option value="limonadaCoco">LIMONADA DE COCO</option>
                <option value="Ninguna" selected>Ninguna</option>
            </select>
        </div><br>

        <div class="textArea">           
            <strong>RECOMENDACIONES</strong><br> 
        <textarea name="sugerencias" id="sugerencias" cols="30" rows="10"></textarea>
        </div><br>

        <input type="submit" value="ENVIAR ENCUESTA">
        
        </div>
        </fieldset>







    </form>
</body>
</html>