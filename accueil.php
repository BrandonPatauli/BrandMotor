<?php  
session_start();
if (empty($_SESSION['NOM'])) {
	# code...
	header('location:deconect.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<meta charset="utf-8">
	<meta name="viewprt" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script src="https://kit.fontawesome.com/eab355f51a.js"crossorigin="anonymous"></script>
  </head>
</head>
<body>
	<nav>	
	<a href="img/logo.png"><img src="img/logo.png" style=" width:70%;height: 70px; border-radius:%;"></a>
	<ul>
    <li><a href="#">Home</a></li>
    <li class="menu-deroulant">
      <a href="">Vehicule</a>
      <ul class="sous-menu">
      	<li><a href="Vehicule.php">cars</a></li>
      	<li><a href="Moto.php">MotoG</a></li>
        <li><a href="Truck.php">Truck</a></li>
      </ul>
    </li>
    <li class="menu-deroulant">
      <a href="">Pieces de rechange</a>
      <ul class="sous-menu">
      	<li><a href="pieces.php">Pieces de Rechange</a></li>
        <li><a href="outils.php">Outils Mecanique</a></li>
      </ul>
    </li>
    <li><a href="#">About</a></li>
    <li><a href="contact.php">Contact-Us</a></li>
  </ul>
</nav>
<header>
	<h1 class="animate__animated animate__rollIn">Bonus de fin d'annee acheter vos vehicules avec -20% de Reduction</h1>
	<h1></h1>
</header>

<section class="main">
	<div class="cards">
		<div class="card">
			<img src="img/1.jpeg">
			<div class="card-header">
				<p class="title">SUZUKI N6 nouveau model orange vif</p>
				<p class="price"><strong><del>$3000.0</del></strong></p>
				<p class="price"><strong>$2090.0</strong></p>
			</div>
			<div class="card-body">
				<p></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>

		<div class="card">
			<img src="img/2.jpg">
			<div class="card-header">
				<p class="title">CADILLACG456</p>
				<p class="price"><strong><del>$73000.0</del></strong></p>
				<p class="price"><strong>$72090.0</strong></p>
			</div>
			<div class="card-body">
				<p></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>

		<div class="card">
			<img src="img/3.jpg">
			<div class="card-header">
				<p class="title">HUMMER H3 N675</p>
				<p class="price"><strong><del>$33000.0</del></strong></p>
				<p class="price"><strong>$2900.0</strong></p>
			</div>
			<div class="card-body">
				<p>-<br></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>


		<div class="card">
			<img src="img/4.jpg">
			<div class="card-header">
				<p class="title">MOTEUR RGV5</p>
				<p class="price"><strong><del>$3500.0</del></strong></p>
				<p class="price"><strong>$3490.0</strong>/</p>
			</div>
			<div class="card-body">
				<p></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>

		<div class="card">
			<img src="img/5.jpg">
			<div class="card-header">
				<p class="title">MOTO GXCR T6543</p>
				<p class="price"><strong><del>$2500.0</del></strong></p>
				<p class="price"><strong>$2480.0</strong></p>
			</div>
			<div class="card-body">
				<p><br></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>

		<div class="card">
			<img src="img/mercedes-eqg.jpg">
			<div class="card-header">
				<p class="title">MERCEDES GC T56</p>
				<p class="price"><strong><del>$93000.0</del></strong></p>
				<p class="price"><strong>$9250.0</strong></p>
			</div>
			<div class="card-body">
				<p></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>


		<div class="card">
			<img src="img/6.jpg">
			<div class="card-header">
				<p class="title">PNEUX /25</p>
				<p class="price"><strong><del>$50.0</del></strong></p>
				<p class="price"><strong>$47.8</strong></p>
			</div>
			<div class="card-body">
				<p></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>

		<div class="card">
			<img src="img/7.jpg">
			<div class="card-header">
				<p class="title">PNEUX /15</p>
				<p class="price"><strong><del>$30.0</del></strong></p>
				<p class="price"><strong>$28.0</strong></p>
			</div>
			<div class="card-body">
				<p></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>

		<div class="card">
			<img src="img/8.jpg">
			<div class="card-header">
				<p class="title">CRIQUE ASSEMBLAGE</p>
				<p class="price"><strong><del>$120.0</del></strong></p>
				<p class="price"><strong>$100.0</strong></p>
			</div>
			<div class="card-body">
				<p>-<br></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>

		<div class="card">
			<img src="img/9.jpg">
			<div class="card-header">
				<p class="title">NOAH 2002 FR45</p>
				<p class="price"><strong><del>$5000.0</del></strong></p>
				<p class="price"><strong>$4090.0</strong></p>
			</div>
			<div class="card-body">
				<p><br></p>
				<a href="foule.phpfoule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>
		<div class="card">
			<img src="img/27.jpeg">
			<div class="card-header">
				<p class="title">MERCEDES TRUCK 2005 FR45</p>
				<p class="price"><strong><del>$5000.0</del></strong></p>
				<p class="price"><strong>$4090.0</strong></p>
			</div>
			<div class="card-body">
				<p><br></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>
		<div class="card">
			<img src="img/29.jpg">
			<div class="card-header">
				<p class="title">RAV4 JL5 2012 F45</p>
				<p class="price"><strong><del>$5000.0</del></strong></p>
				<p class="price"><strong>$4090.0</strong></p>
			</div>
			<div class="card-body">
				<p><br></p>
				<a href=""><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>
		<div class="card">
			<img src="img/16.jpg">
			<div class="card-header">
				<p class="title">CRIQUE SIMPLE 345CH</p>
				<p class="price"><strong><del>$5000.0</del></strong></p>
				<p class="price"><strong>$4090.0</strong></p>
			</div>
			<div class="card-body">
				<p><br></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>
		<div class="card">
			<img src="img/19.jpg">
			<div class="card-header">
				<p class="title">HUMMER H4 2014 GHB45</p>
				<p class="price"><strong><del>$5000.0</del></strong></p>
				<p class="price"><strong>$4090.0</strong></p>
			</div>
			<div class="card-body">
				<p><br></p>
				<a href="foule.phpfoule.phpfoule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>
		<div class="card">
			<img src="img/22.jpg">
			<div class="card-header">
				<p class="title">MERCEDES 2016 GCL65</p>
				<p class="price"><strong><del>$50000.0</del></strong></p>
				<p class="price"><strong>$49995.0</strong></p>
			</div>
			<div class="card-body">
				<p><br></p>
				<a href="foule.phpfoule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>
		<div class="card">
			<img src="img/25.jpg">
			<div class="card-header">
				<p class="title">NOAH 1997 45GHB5</p>
				<p class="price"><strong><del>$10000.0</del></strong></p>
				<p class="price"><strong>$9890.0</strong></p>
			</div>
			<div class="card-body">
				<p><br></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>

		<div class="card">
			<img src="img/10.jpg">
			<div class="card-header">
				<p class="title">INFINITY MINI SDF45</p>
				<p class="price"><strong><del>$13500.0</del></strong></p>
				<p class="price"><strong>$1300.0</strong></p>
			</div>
			<div class="card-body">
				<p></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div>

		<div class="card">
			<img src="img/11.jpeg">
			<div class="card-header">
				<p class="title">NOAH 1998 Chocolat</p>
				<p class="price"><strong><del>$3500.0</del></strong></p>
				<p class="price"><strong>$2000.0</strong>/</p>
			</div>
			<div class="card-body">
				<p></p>
				<a href="foule.php"><p class="titre">Faites vos achats
					
				</p></a>
			</div>	
		</div></div>
</section>

</body>
</html>
<div class="footer-basic">
   <footer>
          <div class="social">
          <a href="#"><img src="img/inst.png"></i></a>
          <a href="#"><img src="img/twitter.png"></i></a>
          <a href="https://www.facebook.com"><img src="img/facebook.png"></i></a>
            </div>
        <ul class="list-inline">
             <li class="list-inline-item"><a href="#">Home</a></li>
             <li class="list-inline-item"><a href="Contact.html">Services</a></li>
             <li class="list-inline-item"><a href="#">About</a></li>
             <li class="list-inline-item"><a href="#">Terms</a></li>
              <li class="list-inline-item"><a href="password.php">ChangePassword</a></li>
       <li class="list-inline-item"><a href="deconect.php">LogOut</a></li>
        </ul>
            <p class="copyright" style="font-size: 40px;">BranDtMotors</p>
        </footer>
    </div>