<html>

	<head>

		<title>Surpise Factory | Escapebox</title>

		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<script src="https://code.jquery.com/jquery-latest.js"></script>

	</head>

<body onload="show()">

	<img class="logo" src="logo.png">

	<div id="hh">

		<div class="content-midden">

		<h1>WELKOM ...</h1>
		<p class="textie">De eerste test heb je doorstaan, vanaf nu gaat het echt beginnen.
		Voor jou is een cadeau uitgekozen, maar om te achterhalen wat dit inhoudt, zal je er zelf achter moeten komen.
		</p>
		<p class="antwoord-knop" style="background-color: green; border-bottom: 2px solid #006600;" onclick="link()">START HIER</p>

		</div>

	</div>



</body>
</html>
<script type="text/javascript">

function show() {

     window.location.href = "index.php";

}

function link() {

     $("#hh").fadeOut(700);

    setTimeout(function() {

        window.location.href = "next1.php";

    }, 1000);	

}


</script>
