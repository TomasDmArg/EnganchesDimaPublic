    <?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "no-reply@enganchesdima.tk";
    $to = "davidslater627@gmail.com";
    $subject = "Presupuesto para enganche Audi A3 - Enganches DIMA";
    $message = "No hacemos la parte eléctrica, el enganche colocado te saldría $18000 se requiere sacar turno con tres días de anticipación llamando al taller: (223) 4814151  y se necesitará el auto 7 hrs ya que el enganche es a medida 
    
    Enganches DIMA
    El cano 7982 Mar del Plata
    (223) 481-4151
    
    No responder a este mail, para consultas adicionales enviar a: enganchesdima@outlook.com
    ";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent. to:". $to;
    ?>