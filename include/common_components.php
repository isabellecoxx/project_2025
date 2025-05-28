<?php
	function echoHeader($pageTitle){ 
			echo "
			    <html>
			        <head>
			            <title>".$pageTitle."</title>
			            <link rel='stylesheet' type='text/css' href='/style.css'
			        </head>
			        <body>		            
			";
	}

//If you want a footer you can add one this is the bare minimum
function echoFooter(){
	echo "
			</body>
		</html>
	";
}