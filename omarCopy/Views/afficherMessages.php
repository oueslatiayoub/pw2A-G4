<?php
	include '../Controller/messageC.php';
	$messageC=new messageC();
	$listeMessages=$messageC->affichermessage(); 
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
            <span>Commentaires</span>
            <h1>visiteur forum</h1>
        </div>
        <!--testimonials-box-container------>
        <div class="testimonial-box-container">
        <?php
				foreach($listeMessages as $msg){


                    ////cleannn
                    $string ="azerty pussy fuck fuck";
$curl = curl_init();
$string = $msg['contenue'];
curl_setopt_array($curl, [
	CURLOPT_URL => "https://neutrinoapi-bad-word-filter.p.rapidapi.com/bad-word-filter",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "content=$string&censor-character=*",
	CURLOPT_HTTPHEADER => [
		"content-type: application/x-www-form-urlencoded",
		"x-rapidapi-host: neutrinoapi-bad-word-filter.p.rapidapi.com",
		"x-rapidapi-key: 2ceefd083cmsh9c8f3a7577c9822p10ff24jsncbe1c9883482"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$pieces = explode('"', $response);
 $contenu_clean = $pieces[3];
			?>
            <!--BOX-1-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="images/c-1.jpg" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong><?php echo $msg['name']?></strong>
                            <span><?php echo $msg['email']?></span>
                        </div>
                    </div>
                    <!--reviews------>
                    <a href="modifierMessage.php?idmessage=<?php echo $msg ['id'];?>"><i class="fas fa-edit"></i></a>
                    <a href="supprimerMessage.php?idmessage=<?php echo $msg['id'];?>"><i class="fas fa-trash"></i></a>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                    
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <h3><?php echo $msg['subject'];?></h3>
                    <p><?php echo $contenu_clean;?></p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </section>
</body>
</html>
  
  