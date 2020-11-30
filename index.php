<!DOCTYPE html>
<html>
<head>
	<title>Sea Camel- Contact us</title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="img/png" href="images/fevicon.png">
</head>
<body>
<header>
<?php
include("header.php");
?>

<div class="container-fluid">
<div class="row">
<img class="page-banner" src="slider\fef.png">
</div>
</div>
</header>
<!-- start of contCt form-->
<section>
<div class="container-fluid py-5" style="background-image:url(images/contactbg.jpg); background-attachment:fixed;   background-repeat: no-repeat;  background-size: cover;">
	<div class="container contact-form mt-5 mb-5 " style="">
		<h3 class='text-center text-dark mt-5 mb-3 pt-4'>Contact us</h3>
		<hr class='w-25'>
		<div class='row'>
			<div class='col-12 col-md-6 col-lg-6 mt-3'>
				<form action="#" method="POST">
				<div class='input-group mb-3'>
					<input type='text' class='form-control text-primary' placeholder='First Name' id='usrfnme' name="userfirstname">
					<input type='text' class='form-control text-primary' placeholder='Last Name' id='usrlnme' name="userlastname">
				</div>
				<div class='input-group mb-3'>
					<input type='email' class='form-control text-primary' placeholder='Email' id='usremail' name="useremail">
				</div>
				<div class='input-group mb-3'>
					<input type='phone' class='form-control text-primary' maxlength="10" placeholder='Phone No.' id='usrphone' name="userphone">
				</div>
				<div class='form-group'>
				     <textarea class='form-control text-primary' style="resize:none;"placeholder='Message' rows='5' id='comment' name="message"></textarea>
				</div>
				<button type='submit' name="submit" class='btn btn-success mb-3'>Submit</button>
				<?php
					
					
					if (isset($_POST['submit']))
					{
						//include_once('connectdb.php');
						$userfirstname=$_POST['userfirstname'];
						$userlastname=$_POST['userlastname'];
						$useremail=$_POST['useremail'];
						$userphone=$_POST['userphone'];
						$message=$_POST['message'];
						$headers="mail from: ".$useremail;
						$subject="Enquiry email";
						$to="desiboy1140@gmail.com";	

						require_once('PHPMailer\PHPMailerAutoload.php');
						$mail= new PHPMailer();
						$mail->isSMTP();
						$mail->SMTPAuth = true;
						$mail->SMTPSecure='ssl';
						$mail->Host='smtp.gmail.com';
						$mail->Port='465';
						$mail->isHTML();
						$mail->Username='harshsharma3877@gmail.com';
						$mail->Password='sharma38777';
						
						$mail->Subject='Mailed from SeaCamels contact form: '.$userfirstname." ".$userlastname;
						$mail->Body=$useremail." > ".$message;
						$mail->AddAddress('desiboy1140@gmail.com');

						
						if ($mail->Send())
						{	
							echo"<div class='alert alert-success' name='shake'>
								<strong>Mail Successfully Sent</strong></a>.
								</div>";
						}else
						{
							echo"<div class='alert alert-warning' name='shake'>
								<strong>Mail not Sent</strong></a>.
								</div>
								<script>
								
								alert('Mail not sent!');
								</script>";
						}   
						
											
					}

					?>
				</form>
			</div>
			<div class='col-12 col-md-6 col-lg-6 mb-3 text-center'>
				<div class='contact-image'>
					<!--img class='bottomimage' animated bounce infinite src='images/contact1.png' width='100%'-->
					<img class='' src='images/contact.png' width='100%'>
				</div>
				</div>
			</div>
	</div>
</div>
</section>
<!-- end of contCt form-->
<!--Whatsapp portal started-->
<section>
<div class="container-fluid" style="background:#00E676;">
	<div class="container">
		<div class="row px-5 py-5 ">
			<div class="  col-sm-6 col-md-9 col-lg-9" >
				<h1 data-aos="fade-right" class="text-dark px-5" style="font-family:HighlightText;">Contact Us on Whatsapp</h1>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3 ">
				<button class="text-light bg-success btn mt-2 px-5" type="button" onclick="window.open('https://wa.me/919665654326?text=Hi!, I am sending this message from Sea Camels Website.','newwindow','width=800,height=450');return false;"><span class="fa fa-whatsapp text-light fa-lg " aria-hidden="true"></span></button>
				
			</div>
		</div>
	</div>
</div>
<!--Whatsapp portal started-->

</section>



<?php
//include("calltoaction.php");
//include_once("testi.php");
include("footer.php");
?>


<!--   <dsgdghth>    -->
<script>
	$(function(){
	  var aname='animated shake ';
	  var aend='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	  $('button.loginbtn').on('click',function(){
		  $('div[name=shake]').addClass(aname).one(aend,function(){
			  $(this).removeClass(aname);
		  });
	  });
  });
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
</body>
</html>
