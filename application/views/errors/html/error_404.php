<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/x-icon" href="../../assets/images/inven-log3.png"/>
<title>Page Not Found: 404</title>
<style type="text/css">
/* Body */
body {
background-color: #F7F7F7;
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
font-size: 16px;
line-height: 1.5;
color: #333;
margin: 0;
padding: 0;
}

/* Container */
.container {
max-width: 960px;
margin: 0 auto;
margin-top: 50px;
padding: 30px;
text-align: center;
background-color: #fff;
border: 1px solid #f5c6cb;
border-radius: 10px;
max-width: 600px;
}

/* Heading */
.heading {
font-size: 38px;
font-weight: 700;
color: #333;
margin-bottom: 30px;
text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
}

/* Subheading */
.subheading {
font-size: 24px;
font-weight: 700;
color: #333;
margin-bottom: 30px;
text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
}

/* Message */
.message {
font-size: 18px;
color: #666;
margin-bottom: 30px;
}

/* Link */
.link {
color: #007bff;
text-decoration: none;
display: inline-block;
margin-left: 5px;
position: relative;
}

.link::before {
content: '';
position: absolute;
left: 0;
bottom: -2px;
height: 2px;
width: 0;
background-color: #007bff;
transition: width 0.3s ease-in-out;
}

.link:hover::before {
width: 100%;
}
</style>
</head>
<body>
	<div class="container">
		<h1 class="heading">Oops - Aw, Snap!</h1>
		 <hr style="width: 50%; margin: 0 auto;">
		<h2 class="subheading">404 - Page Not Found</h2>
		<p class="message">We're sorry, but the page you requested could not be found.</p>
		<p>Please check the URL and try again, or visit our<a class="link" href="/">homepage</a> to start over.</p>
	</div>
</body>
</html>