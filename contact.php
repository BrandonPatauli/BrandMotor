<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<script src="https://kit.fontawesome.com/eab355f51a.js"crossorigin="anonymous"></script>

</head>
<body>
	<nav>  
  <a href="img/logo.png"><img src="img/logo.png" style=" width:70%;height: 70px; border-radius:%;"></a>
  <ul>
    <li><a href="#">Home</a></li>
    <li class="menu-deroulant">
      <a href="Vehicule.php">Vehicule</a>
      <ul class="sous-menu">
        <!-- <li><a href="Vehicule.php">cars</a></li>
        <li><a href="Moto.php">MotoG</a></li>
        <li><a href="Truck.php">Truck</a></li> -->
      </ul>
    </li>
    <li class="menu-deroulant">
      <a href="Pieces.php">Pieces de rechange</a>
      <ul class="sous-menu">
        <!-- <li><a href="pieces.php">Pieces de Rechange</a></li>
        <li><a href="outils.php">Outils Mecanique</a></li> -->
      </ul>
    </li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact-Us</a></li>
  </ul>
</nav>
<br><br><br>
<h2>We are very happy for your visit in our plat-form</h2>
<p>Welcome and let your message will be give you answer next times</p>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Write your preoccupation on:</p>
  </div>
  <div class="row">
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
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
        </ul>
            <p class="copyright" style="font-size: 20px;">BranDtMotors</p>
        </footer>
    </div>
</body>
</html>
  <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
/*
* {
  box-sizing: border-box;
}
*/
/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #eee;
  /*padding: 16px;*/
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

 nav
{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding:26.5px;
  background-color:rgba(255,255,255);
  position: sticky;
  top: 0px;
  /*z-index: 999;
}*/
}
nav > ul {
  display:flex;
  text-align: center;
  box-shadow: 0px 1px 2px 1px rgba(0,0,0,0.3);
  width: 100%;
  height: var(--hauteur-menu);
}
nav ul {
  list-style-type: none;
}
nav > ul > li {
  background-color:grey;
  list-style-type: none;
  position: relative;
  height: 100%;
  flex: 1;
}
nav > ul > li > a {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

li a {
  text-decoration: none;
  color: black;
}
.sous-menu {
  margin-top: var(--hauteur-menu);
  width: 100%;
  text-align: left;
  background-color:#fff;
  border-radius: 2px;
  overflow: hidden;
  max-height: 0;
}

.sous-menu > li > a {
  height: 30px;
  padding-left: 20px;
  list-style-type: none;
  width: 100%;
  align-items: center;
  display: flex;
}

.menu-deroulant > a: after{
  content: '❯';
  font-size: 30px;
  margin-left: 7px;
  display: inline-block;
}
nav > ul > li:hover > a{
  color: #2169EC;
}
.sous-menu > li:hover {
  background-color: rgba(33, 105, 236, 0.3);
}

.sous-menu > li:hover > a {
  color: white;
}

@keyframes rotationFleche {
  0% {
    transform: rotate(10deg);
  }
  100%{
    transform: rotate(90deg);
  }
}
.menu-deroulant:hover > a:after{
  animation: rotationFleche 0.2s linear forwards;
}
@keyframes apparitionSousMenu {
  0% {
    box-shadow: 0px 3px 3px 1px rgba(0,0,0,0);
    border-top: 3px solid #2169EC;
     opacity: 20;
  }
  30% {
    box-shadow: 0px 3px 3px 3px rgba(0,0,0,0.3);
  }
  100% {
    max-height: 50em;
    border-top: 3px solid #2169EC;
    box-shadow: 0px 3px 3px 1px rgba(0,0,0,0.3);
  }
}
.menu-deroulant:hover > .sous-menu {
  animation: apparitionSousMenu 1s forwards;
}
.footer-basic {
  position: absolute;
  top: 1100px;
  width: 100%;
  padding:40px 0;
  background-color:black;
  color:#4b4c4d;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1.6;
  margin-bottom:0;
}
.footer-basic li {
  padding:0 10px;
  display: inline-block;
}
.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
}

.footer-basic .social {
  text-align:center;
  padding-bottom:25px;
}

.footer-basic .social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}
.footer-basic .copyright {
  text-align:center;
  font-size:13px;
  color:#aaa;
  margin-bottom:0;
}
</style>