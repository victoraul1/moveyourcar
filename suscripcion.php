<?php
require("class.phpmailer.php");
$id = $_POST['id'];
$correo = 'victorgalindo475@gmail.com';
$servername = "victoraul.netfirmsmysql.com";
$username = "jesus";
$password = "123456";
$dbname = "dbalertas";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select * from usuarios where id = '$id'";
$res = $conn->query($sql);
$row = mysqli_num_rows($res);
if($row == 0){
	$msj = "ID no encontrado";
}else{
	while($dato = mysqli_fetch_array($res)){
		$email = $dato["email"];
        $sql2 = "select * from mensajes where id = '1'";
        $res2 = $conn->query($sql2);
		$fila = mysqli_fetch_array($res2);
		$mensaje = $fila[1];
		$subject = "Anonimo";			
		$msg = "ID: "  .$id    ."<br>\n";
		$msg .= "Mensaje: "  .$mensaje."<br>\n";
			//$from = 'contacto@pestalozzicusco.edu.pe';
		$from = $correo;
		$mail = new PHPMailer();
		$mail->Host = "localhost";
		$mail->From = $from;
		$mail->FromName = $nombre;
		$mail->Subject = $subject;
		$mail->AddAddress($email);
		$body = "<strong>Mensaje</strong><br><br>";
		$body.= $msg."<br>";
		$mail->Body = $body;
		$mail->IsHTML(true);
		$mail->Send();
		$msj = "Gracias por enviar su mensaje, tal vez quieras subscribirte tu tambien";	     	}	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Alertas - Suscripcion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilos.css">       
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
</style>
</head>
<body onLoad="initialize()">                         
        <div id="uno" >                                                      
            <form id="contact-form" class="clearfix" action="registro.php" method="post"> 
                <div id="dos" class="letrasubscrita">
                    <p  class="colorblanco">Thank you! Let some else to be as nice. Subscribe</p>
                    </div>                     
                            <div id="tres" class="subscribeTop cuadro">
                                <div id="cuatro">
                            <label class="required" for="id"></label>
                            <input class="valid" type="text" name="id" id="id" value="" placeholder="Enter Plate Number">
                            <div class="input-block clearfix">
                            <label class="required" for="id"></label>
                            <input class="valid" type="text" name="email" id="email" value="" placeholder="Enter Email">
                                </div>
                            <div id="elboton">                    
                                <input type="submit" id="submit-contact" value="Subscribe">
                            </div>
                    </div>                           
                </div>                        
            </form>                                                        
        </div>                           
</body> 
</html>







