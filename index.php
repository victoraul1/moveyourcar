<?php 

$servername = "victoraul.netfirmsmysql.com";
$username = "jesus";
$password = "123456";
$dbname = "dbalertas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "select * from mensajes where id = '1'";
$res = $conn->query($sql);



$dato = mysqli_fetch_array($res); 

?> 




<!DOCTYPE html> 
<html lang="en">
     <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
        <title>Move Your Car, Avoid A Ticket</title>
         <link rel="stylesheet" href="css/bootstrap.css"> 
         <link rel="stylesheet" href="estilos.css"> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head> 
    <body onLoad="initialize()"> 
        <div id="uno">      
            <form id="contact-form" class="clearfix" action="suscripcion.php" method="post"> 
            <div id="dos">
                <div id="tres">
                    <label>
                        <span class="colorblanco"></span>
                    </label> 
                    <input class="valid centrado" type="text" name="id" id="id" value="" placeholder="Enter Plate Number"> 
                    <div id="elboton"> 
                        <input type="submit" id="submit-contact" value="<?php echo $dato[1]; ?>"> 
                    </div> 
                </div>    
            </div>                
            </form> 
            <div id="subscrito">
                <a href="suscripcion.php"><span class="colorblanco">Subscribe to receive alerts</span></a>
            </div>                
        </div>     
    </body>       
</html>