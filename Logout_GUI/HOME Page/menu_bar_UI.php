<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sliding Hamburger Navigation Example</title>
	<link rel="stylesheet" href="css/style_menu_ui.css">
	<style>
		.menu-nav
		{
			font-family: sans-serif;
			font-size: 20px;
		}
		.menu-nav a
		{
			text-decoration: none;
		}
		.menu-nav a:hover
		{
			color: white;
		}
	</style>
</head>

<body>

	<div class="section">

		<div class="menu-block">
			<nav class="menu-nav">
				<a class="menu-nav__link" href="#">Home</a>
				<a class="menu-nav__link" href="#">Portfolio</a>
				<a class="menu-nav__link" href="#">About</a>
				<a class="menu-nav__link" href="#">Contacts</a>
				<a class="menu-nav__link" href="#">Home</a>
				<a class="menu-nav__link" href="#">Portfolio</a>
				<a class="menu-nav__link" href="#">About</a>
				<a class="menu-nav__link" href="#">Contacts</a>
				<a class="menu-nav__link" href="#">Home</a>
				<a class="menu-nav__link" href="#">Portfolio</a>
				<a class="menu-nav__link" href="#">About</a>
				<a class="menu-nav__link" href="#">Contacts</a>
				
			</nav>
			<a href="#" class="menu-btn">
				<span></span>
			</a>
		</div>
	</div>

<!--  -->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<!--  -->
<script src="js/script_menu_ui.js"></script>
<!--  -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--  -->
</body>
</html>
