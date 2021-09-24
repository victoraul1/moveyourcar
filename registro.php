<?php
require("class.phpmailer.php");

$id = $_POST['id'];
$email = $_POST['email'];

$id = $_POST['id'];
$correo = 'victorgalindo475@gmail.com';


$servername = "victoraul.netfirmsmysql.com";
$username = "jesus";
$password = "123456";
$dbname = "dbalertas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



//mysqli_select_db("dbalertas", $link);

$sql = "select id, email from usuarios where id = '$id'";
$resultado = $conn->query($sql);

//$resultado =  mysqli_query("select id, email from usuarios where id = '$id' ",$link);



$fila = mysqli_fetch_array($resultado);
$rows = mysqli_num_rows($resultado);










if($rows>0){
	if($rows<=5){	


		$sql2 = "insert into usuarios(id,email) values('$id','$email')";
		$res = $conn->query($sql2);

		//$res =  mysqli_query("insert into usuarios(id,email) values('$id','$email')  ",$link);


		$msj = '<font color="#fff">Registered</font>';

			$sql3 = "select * from mensajes where id = '1'";
			$res2 = $conn->query($sql3);

			//$res2 =  mysqli_query("select * from mensajes where id = '1'",$link);



			$fila = mysqli_fetch_array($res2);
			$mensaje = $fila[1];
			$subject = "Anonimo";
			$correo = 'victorgalindo475@gmail.com';			
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
			echo "<META HTTP-EQUIV = REFRESH CONTENT='2;URL=https://www.moveyourcar.org'>";
	}else{
			$msj =  'Ha excedido el número de correos para este ID';
			echo "<META HTTP-EQUIV = REFRESH CONTENT='2;URL=https://www.moveyourcar.org/suscripcion.php'>";
		}
	
}else{


	$sql4 = "insert into usuarios(id,email) values('$id','$email')  ";
	$res = $conn->query($sql4);

	//$res =  mysqli_query("insert into usuarios(id,email) values('$id','$email')  ",$link);



	$msj = '<font color="#fff">Registered</font>';
			


			$sql5 = "select * from mensajes where id = '1'";
			$res2 = $conn->query($sql5);

			//$res2 =  mysqli_query("select * from mensajes where id = '1'",$link);



			$fila = mysqli_fetch_array($res2);
			$mensaje = $fila[1];
			$subject = "Move Your Car";
			$correo = 'victorgalindo475@gmail.com';			
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
	echo "<META HTTP-EQUIV = REFRESH CONTENT='2;URL=https://www.moveyourcar.org/'>";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
<title>Registering</title>
<meta name="description" content="">

<meta name="author" content="FelixpPlus">

<link rel="stylesheet" href="css/bootstrap.css">
    
<link rel="stylesheet" href="css/icoMoon.css" media="all">
    
<link rel="stylesheet" href="css/flexslider.css" media="all">
	
<link rel="stylesheet" href="css/drop-down.css" media="all">
    
<link rel="stylesheet" href="css/colorbox.css" media="all">
	
<link rel="stylesheet" href="css/camera.css" media="all">
    
<link rel="stylesheet" href="style.css">
    
<link rel="stylesheet" href="css/bootstrap-responsive.css" media="all">
    
<link rel="stylesheet" href="css/responsive.css" media="all">
    
<link rel="stylesheet" href="css/theme-options.css" media="all">
    
    
<!-- Style
	================================================== -->
    

<link rel="stylesheet" href="css/skins/cyan.css" type="text/css" id="colors" />
    
<link rel="stylesheet" href="css/skins/cyan.css" type="text/css" id="templates" />
    
    
<script src="js/modernizr.custom.js"></script>
    
	<!--[if lt IE 9]>
		
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
       
    
    <!-- Font  -->
        
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    
	
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-color: #02609f;
}
-->
</style></head>
<body onLoad="initialize()">

      
        <!--Contact-->
        
        <div id="contact">    
    
            <div class="contact-bg"></div>
            
          <div class="typo1">
                
                
            <div class="wrapper clearfix"><!--end:section-title-->
                    
                    <section class="cbp-so-section">
                    <div class="row-fluid">
                        
                            <div class="span12 clearfix"><!--end:contact-left-->
                                
                                <div id="contact-right" class="cbp-so-side cbp-so-side-right">
                                
                                    
<div id="contact-box">
                                       
 <form id="contact-form" class="clearfix" action="registro.php" method="post">
                                            
<p class="input-block clearfix">
                                       <?php echo $msj; ?>
                                            </p>
                                            <div class="clear"></div>                        
                                        </form>
                                        <div id="response"></div>
                                    </div><!--contact-box-->
                                
                              </div><!--end:contact-right-->
                            
                      </div><!--end:span12-->
                        
                      </div><!--end:row-fluid-->
              </section><!--end:cbp-so-section-->
                
              </div><!--end:wrapper--><!--end:flx-google-map-->
                
            </div><!--end:typo1-->
            
</div>
        
        <!--end:Contact Section-->
        
  

<!-- javascript-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/retina.js"></script>
    
<script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    
<script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
<script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.localscroll-1.2.7-min.js"></script>
    
<script src="js/jquery.scrollTo-1.4.2-min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    
<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>    
    <script src="js/toucheffects.js"></script>
    
<script src="js/jquery.prettyPhoto.js"></script>    
    <script src="js/jquery.validate.min.js"></script>
   
 <script src="js/jquery.form.js"></script>
    <script src="js/tweetable.jquery.js"></script>
	
<script src="js/jquery.timeago.js"></script>
    <script src="js/jquery.colorbox.js"></script>
    
<script src="js/jquery.flexslider-min.js"></script>
    <script src="js/classie.js"></script>
    
<script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/cbpScroller.js"></script>
	
<script src="js/jquery.mobile.customized.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script> 
    
<script src="js/camera.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/custom.js"></script>
    
<script src="js/styleswitch.js"></script>

  	
    <script>
		new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
	</script>
    

</body>	


</html>