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

				<div class="hint-kader">

					<img id="hint-afb1" class="hint-afb2" style="transform: rotate(7deg);" src="zweden.jpg">
					
				</div>


		<h1 class="hoofdie" style="margin-top: -10px;">JIJ GAAT ...</h1>
		<p class="textie">... op een vijfdaagse trip naar Zweden om daar samen met een professioneel team te gaan zalm vissen. </p>
		<p class="antwoord-knop" style="background-color: green; border-bottom: 2px solid #006600;" onclick="link()">PLAN JE CADEAU NU</p><br>
		<p class="textie2" onclick="link()">Of liever toch een andere keer.</p>


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

        window.location.href = "agenda.php";

    }, 1000);	

}


</script>
