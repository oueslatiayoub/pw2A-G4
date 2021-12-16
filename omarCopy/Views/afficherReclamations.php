<?php
	include '../Controller/reclamationC.php';
	$reclamationC=new reclamationC();
	$listeMessages=$reclamationC->afficherReclamation(); 
?>
<!--doctype html-->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>club roban</title>
<!--Stylesheet--------------------------->
<link rel="stylesheet" href="css/style1.css"/>
<!--Fav-icon------------------------------>
<link rel="shortcut icon" href="images/fav-icon.png"/>
<!--poppins-font-family------------------->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!--using-Font-Awesome-------------------->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Testimonials------------------->
    <section id="testimonials">
        <!--heading--->
        <div class="testimonial-heading">
            <span>Reclamations</span>
            <h1>visiteur comments</h1>
        </div>
        <!--testimonials-box-container------>
        <div class="testimonial-box-container">
        <?php
				foreach($listeMessages as $msg){
			?>
            <!--BOX-1-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>id: <?php echo $msg['id']?></strong>
                        </div>
                    </div>
                    <!--reviews------>
                    <a href="modifierReclamation.php?id=<?php echo $msg ['id'];?>"><i class="fas fa-edit"></i></a>
                    <a href="supprimerReclamation.php?id=<?php echo $msg['id'];?>"><i class="fas fa-trash"></i></a>
                   
                    
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p><?php echo $msg['reclamation']?></p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </section>
</body>
</html>
  
  