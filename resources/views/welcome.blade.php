<!DOCTYPE html>
<html>
<head>
	<title>My Housing and Land Website</title>
	<link rel="stylesheet" type="text/css" href="app.css">
    <style>
        body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

header {
	background-color: #333;
	color: #fff;
	padding: 20px;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

nav li {
	display: inline-block;
	margin-right: 20px;
}

nav li:last-child {
	margin-right: 0;
}

nav a {
	color: #fff;
	text-decoration: none;
}

main {
	margin: 20px;
}

section {
	margin-bottom: 40px;
}

section h2 {
	font-size: 28px;
	margin-bottom: 20px;
}

.property {
	border: 1px solid #ccc;
	padding: 20px;
	margin-bottom: 20px;
}
        </style>
</head>
<body>
	<header>
		<h1>My Housing and Land Website</h1>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Properties</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class="featured">
			<h2>Featured Properties</h2>
			<div class="property">
				<img src="property1.jpg" alt="Property 1">
				<h3>Property 1</h3>
				<p>Description of property 1.</p>
				<a href="#">Learn More</a>
			</div>
			<div class="property">
				<img src="property2.jpg" alt="Property 2">
				<h3>Property 2</h3>
				<p>Description of property 2.</p>
				<a href="#">Learn More</a>
			</div>
			<div class="property">
				<img src="property3.jpg" alt="Property 3">
				<h3>Property 3</h3>
				<p>Description of property 3.</p>
				<a href="#">Learn More</a>
			</div>
		</section>
		<section class="properties">
			<h2>All Properties</h2>
			<div class="property">
				<img src="property4.jpg" alt="Property 4">
				<h3>Property 4</h3>
				<p>Description of property 4.</p>
				<a href="#">Learn More</a>
			</div>
			<div class="property">
				<img src="property5.jpg" alt="Property 5">
				<h3>Property 5</h3>
				<p>Description of property 5.</p>
				<a href="#">Learn More</a>
			</div>
			<div class="property">
				<img src="property6.jpg" alt="Property 6">
				<h3>Property 6</h3>
				<p>Description of property 6.</p>
				<a href="#">Learn More</a>
			</div>
		</section>
	</main>
	<footer>
		<p>&copy; 2023 My Housing and Land Website</p>
	</footer>
</body>
</html>