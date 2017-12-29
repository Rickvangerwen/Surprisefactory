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

		<h1 class="hoofdie">BINNENKORT BESCHIKBAAR</h1>


		</div>

	</div>



</body>
</html>
<script type="text/javascript">

function show() {

     $("#hh").fadeIn(700);

}

function link() {

     $("#hh").fadeOut(700);

    setTimeout(function() {

        window.location.href = "index.php";

    }, 1000);	

}


</script>
