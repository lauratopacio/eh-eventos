<?php 
$destinatario = "lauratopaciovaldez@gmail.com"; 
//farahcreativovisual
$asunto="Solicitud de información";

$tipo=$_POST['tipo'];
$salon=$_POST['salon'];
$num_invitados = $_POST['num_invitados'];
$fecha_evento=$_POST['fecha_evento']; 
$correo=$_POST['correo'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];
$nombre=$_POST['nombre'];

$cuerpo = ' 
<html> 
<head> 
   <title>Solicitud de información</title> 
</head> 
<body> 
<h3>Tipo de evento: '.$tipó.' <br>
Salón de preferencia: '.$salon.' <br>
Número de invitados: '.$num_invitados.' <br>
Fecha del evento: '.$fecha_evento.' <br>
Nombre: '.$nombre.' <br>
Teléfono: '.$telefono.' <br>
Correo: '.$correo.' <br>
Mensaje: '.$mensaje.'</h3> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From:".$nombre."<".$correo.">\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);

echo "<html>
    <head>
    </head>
    <body>
         <meta http-equiv= 'REFRESH' content= '0 ; url=index.php'>
         <script>
             alert('Se ha enviado su solicitud con éxito');
         </script> 
    </body>
    </html>";   

?>