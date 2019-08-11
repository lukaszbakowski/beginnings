<!-- COPYRIGHT Lukasz Bakowski all rights reserved www.lukaszbakowski.kwakwak.pl -->
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once("head.php"); ?>
<style>
@keyframes wel {
	from {opacity:0;}
	40% {opacity:1;}
	60% {opacity:1;}
	to {opacity:0;}
}
	#welcome {
		display:flex;
		opacity:0;
		position:absolute;
		justify-content:center;
		align-items:center;
		align-content:center;
		z-index:11;
		left:0;
		top:0;
		width:100%;
		height:100%;
		padding:1rem;
		animation-name: wel;
		animation-duration: 5s;
		margin:0;
		background-color:rgba(33,33,33,0.5);
	}
	.welcome_img {
		display:flex;
		flex-direction:column;
		justify-content:center;
		align-items:center;
		align-content:center;
		background-image:url("img/3.jpg");
		background-repeat:no-repeat;
		background-size:contain, cover;
		background-position:center;
		width:90%;
		height:90%;
		text-shadow:3px 3px 3px black;
	}
	body {
		height:100vh;
	}
@media all and (orientation: portrait) {
	.welcome_img > h1 {
		font-size:2rem;
		margin-top:7rem;
	}
	.welcome_img {
		background-image:url("img/welcome.jpg");
	}
}
@media all and (orientation: landscape) {
	.welcome_img > h1 {
		font-size:3rem;
		margin-top:13rem;
	}
}
</style>
</head>
<body onload="welcome();">
<nav>
	<h1 class="in_nav naglowek" title="Paweł Bąkowski">Pawel Bakowski</h1>
	<div class="open_menu">
	<i class="icon-th-large-outline"></i>
	<div class="mobile">
		<a href="Home">Home</a>
		<a href="Fashion">Fashion</a>
		<a href="Portrait">Portrait</a>
		<a href="Art">Art</a>
		<a href="Videos">Videos</a>
		<a href="About">About</a>
		<a href="Contact">Contact</a>
		<div class="in_nav line">
			<a href="https://www.facebook.com/profile.php?id=100002239309696"><i class="icon-facebook"></i></a>
			<a href="https://www.instagram.com/____pawel/"><i class="icon-instagram"></i></a>
			<div class="share" onclick="share();">Share</div>
			<div id="share" onclick="this.style.display='none';">
				<div class="column">
					<div class="line"><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//pawelbakowski.kwakwak.pl"><i class="icon-facebook"></i>Share to Facebook</a></div>
					<hr>
					<div class="line"><a href="https://twitter.com/home?status=http%3A//pawelbakowski.kwakwak.pl"><i class="icon-twitter"></i>Share to Twitter</a></div>
					<hr>
					<div class="line"><a href="http://www.tumblr.com/share?v=3&u=http%3A%2F%2Fpawelbakowski.kwakwak.pl&t="><i class="icon-tumblr"></i>Share to Tumblr</a></div>
					<hr>
					<div class="line"><a href="https://pinterest.com/pin/create/button/?url=http%3A//pawelbakowski.kwakwak.pl&media=http%3A//pawelbakowski.kwakwak.pl/img/1.jpg&description="><i class="icon-pinterest"></i>Share to Pinterest</a></div>
				</div>
			</div>
		</div>
	</div>
	</div>
</nav>
<main>
	<div class="index_img">&nbsp;</div>
</main>
<footer style="font-size:0.7rem; font-family:Helvetica;">&copy; Copyright <a href="http://lukaszbakowski.kwakwak.pl" style="color:brown; font-size:0.9rem;">looky</a> 2018 all rights reserved</footer>
<div id="welcome" onclick="this.style.display='none';">
	<div class="welcome_img">
		<h1 style="font-variant: small-caps; color:white;">Welcome on My Site.</h1>
		<h2 style="font-variant: small-caps; color:white;">Paweł Bąkowski - Photo Model</h2>
		<p style="color:white;">tap to skip..</p>
	</div>
</div>
<script src="functions.js"></script>
</body>
</html>