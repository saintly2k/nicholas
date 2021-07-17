<!doctype HTML>
<html>
<head>
	<title><?= $title; ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="<?= $description; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?= get_theme_directory_url(); ?>/assets/normalize.min.css" type="text/css">	
	<link rel="stylesheet" href="<?= get_theme_directory_url(); ?>/assets/style.css" type="text/css">
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Special+Elite&display=swap');

* {
	box-sizing: border-box;
}

:root { 
	font-family: 'Special Elite', cursive;
	font-size: 20px;
	color: #2f2f2f;
	background-color: #f4f7ba;
}

body {
	border-radius: 10px;
	padding: 30px;
	max-width: 1440px;
	margin: auto;
}

p, ul, ol, blockquote {
	line-height: 1.7;
}

article img {
	width: 100%;
	border-radius: 6px;
}

pre {
	overflow-x: scroll;
	background: #2f2f2f;
	color: #fff;
	padding: 30px;
	border-radius: 3px;
}

.site-header {
	font-weight: bold;
	margin-bottom: 50px;
}

.site-header .logo {
	background-image: src('https://slexyt.cs/blog/themes/simplicissimus/assets/logo.jpg');
	/*
	background: #6a3093;
  	background: linear-gradient(to right, #6a3093, #a044ff);
  	padding: 25px 0;
  	text-transform: uppercase;
  	font-weight: bold;
  	color: #fff;
  	line-height: 0;
  	font-size: 18px;
  	width: 50px;
  	text-align: center;
  	vertical-align: middle;
  	display: inline-block;
  	border-radius: 50%;
  	margin-right: 10px;
	*/
}

.site-footer {
	margin-top: 100px;
	display: flex;
	justify-content: space-between;
	font-size: 80%;
}

.site-footer p {
	margin: 0;
}

.site-footer nav a {
	margin-right: 10px;
}

.container {
	max-width: 800px;
	width: 100%;
	margin: auto;
}

.blog-preview {
	margin-bottom: 50px;
}

.blog-preview h2 {
	margin: 0;
}

p.small, .footnotes {
	font-size: 80%;
	color: #7c7c7c;
}

a {
	text-decoration: none;
	color: #0a708a;
	text-shadow: 2px 2px #6fd8f2;
	font-weight: bold;
	transition: 0.2s;
}

a:hover {
	color: #cc7897;
	letter-spacing: 2px;
	text-shadow: 3px 3px black;
	transition: 0.2s;
}

hr {
	border-top: solid 1px #cccccc;
	border-bottom: 0;
}

.pagination {
	display: flex;
	justify-content: space-between;
}

table {
  padding: 0; width: 100%;  
}

table tr {
	border-top: 1px solid #cccccc;
	background-color: white;
	margin: 0;
	padding: 0; 
}

table tr th {
	font-weight: bold;
	border: 1px solid #cccccc;
	text-align: left;
	margin: 0;
	padding: 6px 13px; 
}

table tr td {
	border: 1px solid #cccccc;
	text-align: left;
	margin: 0;
	padding: 6px 13px; 
}

table tr th :first-child, table tr td :first-child {
	margin-top: 0; 
}

table tr th :last-child, table tr td :last-child {
	margin-bottom: 0; 
}

#logo-img {
  	padding: 25px 0;
  	line-height: 0;
  	font-size: 18px;
  	width: 50px;
  	text-align: center;
  	vertical-align: middle;
  	display: inline-block;
  	border-radius: 50%;
  	margin-right: 10px;
}
</style>
</head>
<body>
	<header class="site-header">
		<a href="<?= $config['base_url'] ?>/">
			<img id="logo-img" src="<?= get_theme_directory_url(); ?>/assets/logo.jpg"> <!-- <div class="logo"> <?= substr($config['blog_name'], 0, 1) ?> </div> --> <?= $config['blog_name'] ?>
			<!--
			<img id="logo-img" src="<?= get_theme_directory_url(); ?>/assets/logo.jpg"> <?= $config['blog_name'] ?>
			-->
		</a>
<hr>
	</header>
	
	<div class="container">
