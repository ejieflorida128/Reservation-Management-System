<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        /* Revealing 3D Menu CSS */
body
{
	font-family: sans-serif;
	font-size: 100%;
	padding: 0;
	margin: 0;
	color: #333;
	background-color: #222;
}

nav{
    width: 260px;
}

/* main page */
article
{
	position: fixed;
	width: 100%;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	padding: 30px 15%;
	background-color: #fff;
	overflow: auto;
	z-index: 0;
	-webkit-transform-origin: 0 50%;
	-moz-transform-origin: 0 50%;
	-ms-transform-origin: 0 50%;
	-o-transform-origin: 0 50%;
	transform-origin: 0 50%;
}


article:after
{
	position: absolute;
	content: ' ';
	left: 100%;
	top: 0;
	right: 0;
	bottom: 0;
/*	background-image: -webkit-linear-gradient(right, rgba(0,0,0,0.2) 0%, transparent 100%);
	background-image: -moz-linear-gradient(right, rgba(0,0,0,0.2) 0%, transparent 100%);
	background-image: -ms-linear-gradient(right, rgba(0,0,0,0.2) 0%, transparent 100%);
	background-image: -o-linear-gradient(right, rgba(0,0,0,0.2) 0%, transparent 100%);
	background-image: linear-gradient(right, rgba(0,0,0,0.2) 0%, transparent 100%);
	pointer-events: none;*/
}

/* navigation */
nav
{
	position: fixed;
	left: -16em;
	top: 0;
	bottom: 0;
	background-color: grey;
	border-right: 50px solid grey;
	//box-shadow: 4px 0 5px rgba(0,0,0,0.2);
	z-index: 1;
	cursor: pointer;
}

nav:after
{
	position: absolute;
	content: ' ';
	width: 0;
	height: 0;
	right: -70px;
	top: 50%;
	border-width: 15px 10px;
	border-style: solid;
	border-color: transparent transparent transparent #bada55;
}

nav ul
{
	width: 14em;
	list-style-type: none;
	margin: 0;
	padding: 1em;
}

nav a:link, nav a:visited
{
	display: block;
	width: 100%;
	font-weight: bold;
	line-height: 2.5em;
	text-indent: 10px;
	text-decoration: none;
	color: #fff;
	border-radius: 4px;
	outline: 0 none;
}

nav a:hover, nav a:focus
{
	color: #fff;
	background-color: darken(#bada55, 20%);
	text-shadow: 0 0 4px #fff;
	box-shadow: inset 0 2px 2px rgba(0,0,0,0.2);
}

/* hovering */
article, article:after, nav, nav *
{
	-webkit-transition: all 600ms ease;
	-moz-transition: all 600ms ease;
	-ms-transition: all 600ms ease;
	-o-transition: all 600ms ease;
	transition: all 600ms ease;
}

nav:hover
{
	left: 0;
}

nav:hover ~ article
{
	-webkit-transform: translateX(16em) perspective(600px) rotateY(10deg);
	-moz-transform: translateX(16em) perspective(600px) rotateY(10deg);
	-ms-transform: translateX(16em) perspective(600px) rotateY(10deg);
	-o-transform: translateX(16em) perspective(600px) rotateY(10deg);
	transform: translateX(16em) perspective(600px) rotateY(10deg);
	
}

nav:hover ~ article:after
{
	left: 60%;
}

/* typography */
footer
{
	margin-top: 2em;
	border-top: 1px dotted #999;
}

h1
{
	font-size: 2.5em;
	font-weight: normal;
	margin: 0 0 0.2em 0;
}

p
{
	line-height: 1.3em;
	margin: 0 0 1.5m 0;
}

.lead {
  font-weight:100;
  font-size:21px;
}

picture {
  width:100%;
  height:auto;
  display:block;
} 

#menu{
   margin-top: 30px;
}

#logout{
    margin-top: 130px;
}

    </style>
</head>
<body>

    <!-- menu -->
    <nav>
        
        <ul>
            <li><a href="profile.php" id = "menu" class = "btn btn-success">Profile</a></li>
			<li><a href="dashboard.php" id = "menu" class = "btn btn-success">Dashboard	</a></li>
            <li><a href="#" id = "menu" class = "btn btn-success">Ship Reservation</a></li>
          <li><a href="#" id = "menu" class = "btn btn-success">My Reservation</a></li>
          <li><a href="about.php" id = "menu" class = "btn btn-success">About Us</a></li>



          <li><a href="../index.php" id = "logout" class = "btn btn-danger" style = "box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);">Logout User</a></li>
        </ul>
    </nav>
 
   
    
</body>
</html>