<?php

// Correo al que se le enviara el mensaje

$destinatario = 'btimoteo@outlook.com';


//

 $Nombre = $_POST  ['nombre'];
 $Apellido = $_POST  ['apellido'];
 $Email = $_POST ['email'];
 $Consulta = $_POST ['consulta'];


 $header = "Enviado desde TborWeb " ; 
 $mensaje_Completo = $mensaje . "/nAtentamente : " . $nombre ;

    mail($destinatario, $Consulta, $mensaje_Completo, $header);
    echo "<script>    alert("Enviado con éxito") </script>";


?>
