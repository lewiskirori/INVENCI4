<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Whoops!Something went wrong: 500</title>
    <link rel="icon" type="image/x-icon" href="../../assets/images/inven-log3.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<style type="text/css">
    		body {
    			background-color:  #f7f7f7;
    			font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    			font-size: 16px;
    			line-height: 1.6;
    			margin: 0;
    			padding: 0;
    		}
    
    		#container {
    			background-color: #fff;
    			border: 1px solid #f5c6cb;
    			border-radius: 10px;
    			margin: 50px auto;
    			max-width: 600px;
    			padding: 30px;
    			text-align: center;
    		}
    		
    		a {
            color: #337ab7;
            text-decoration: none;
            }
    
            a:hover {
                color: #23527c;
            }
    
    		h1 {
    			font-size: 25px;
                margin: 0 0 20px;
                text-align: center;
                color: #333;
                margin-bottom: 30px;
                text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
    		}
    
    		p {
    			font-size: 15px;
    			margin: 0 0 20px;
    		}
    
    		#error {
    			font-size: 15px;
    			font-weight: bold;
    			margin: 20px 0;
    		}
    
    		#reload {
    			background-color: #222D32;
    			border: none;
    			border-radius: 5px;
    			color: #fff;
    			cursor: pointer;
    			font-size: 16px;
    			padding: 10px 20px;
    			transition: background-color 0.2s ease-in-out;
    			position: relative;
    			overflow: hidden;
    		}
    
    		#reload:hover {
    			background-color: rgba(34, 45, 50, 1.0);
    		}
        </style>
</head>
<body>
      <div id="container">
        <h1>Hang tight! Let's try that again.</h1>
        <hr style="width: 50%; margin: 0 auto;">
        <p id="error">We're sorry, an error occurred while processing your request...</p>
        <p>Please, stand by in <strong><span id="countdown" class="countdown-numbers">30</span> seconds</strong> or <a href="#" id="reload" onclick="location.reload();">Try again</a>.</p>
        </div>
        <script>
            var countdown = 30;
            var timer = setInterval(function() {
              countdown--;
              if (countdown <= 0) {
                clearInterval(timer);
                location.reload();
              } else {
                document.getElementById("countdown").innerHTML = countdown;
              }
            }, 1000);
      </script>
</body>
</html>
