<!doctype html>
<html lang="pl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
<title>portfolio Łukasz Bąkowski web developer i programista</title>
<link rel="stylesheet" type="text/css" href="fontello/css/fontello.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>

</style>
</head>
<body>
<section>
<header><h1>Portfolio</h1><p>Łukasz Bąkowski web-developer i programista</p></header>
	<main id="cont">
		<main class="lefttop">
			<div style="background-color:#3095d3;"><a href="o-mnie"><i class="icon-user ico"></i><br>kim jestem</a></div>
			<div style="background-color:#3095d3;"><a href="uslugi"><i class="icon-wrench ico"></i><br>oferta</a></div>
			<div style="background-color:#666666;"><a href="osiagniecia"><i class="icon-graduation-cap ico"></i><br>Curriculum Vitae</a></div>
			<div style="background-color:#93c748;"><a href="#"><i class="icon-phone ico"></i><br>kontakt</a></div>
		</main>
		<main class="righttop">
			<article>
				<h1 style="color:Gainsboro;">Kontakt</h1>
				<ol type="none">
					<li>Dane kontaktowe:
						<ul type="none">
							<li>Łukasz Bąkowski
							<li>Kraj: Polska
							<li>Województwo: Wielkopolskie
							<li>Miejscowość: Poznań
						</ul>
					<li>Wybierz sposób kontaktu:
						<ul type="none">
							<li>Telefon: <output onclick="pokaz(this);" id="numer" style="cursor:pointer">pokaż</output>
							<li>E-mail: <output onclick="pokaz(this);" id="email" style="cursor:pointer">pokaż</output>
						</ul>
				</ol>
				<h5><i>zezwalam na przetwarzanie moich danych osobowych tylko i wyłącznie w celu podjęcia współpracy w zakresie: reklam na moich stronach; w procesie rekrutacji na programistę; pojedyńczych zleceń biznesowych w obrębie zagadnień programistycznych i technicznych IT</i></h5>
			</article>
		</main>
		<main class="leftbot">
			<aside><a href="projekty">prostota jest kluczem do sukcesu<br><b>zobacz moje projekty</b></a></aside>
		</main>
		<main class="rightbot">
			<nav style="background-color:#d94348;"><a href="statement.php"><i class="icon-youtube ico"></i></a></nav>
			<nav style="background-color:#4668b3;"><a href="statement.php"><i class="icon-facebook ico"></i></a></nav>
			<nav style="background-color:#d95333;"><a href="statement.php"><i class="icon-linkedin ico"></i></a></nav>
			<nav style="background-color:#3095d3;"><a href="statement.php"><i class="icon-twitter ico"></i></a></nav>
		</main>
	</main>
<footer>&copy; Copyright Łukasz Bąkowski 2018</footer>
</section>
<script>
function pokaz(check) {
	let numer = document.getElementById('numer');
	let email = document.getElementById('email');
	if(check == numer) {
		numer.innerHTML = "+48 570 006 586";
	} else if(check == email) {
		email.innerHTML = "lukasbakowsky@gmail.com";
	}
}
</script>
</body>
</html>
