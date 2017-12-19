<html>

	<head>

		<title>Surpise Factory | Escapebox</title>

		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<script src="https://code.jquery.com/jquery-latest.js"></script>

	</head>

<body onload="surprisefactory.hint()">

	<img class="logo" src="logo.png">

	<div id="app-kader">

			<div class="content-midden">

				<div class="hint-kader">

					<img id="hint-afb1" class="hint-afb" style="transform: rotate(7deg);">
					<img id="hint-afb2" class="hint-afb" style="transform: rotate(-7deg); display: none;">
					
				</div>

				<div class="antwoord-kader">

					<p class="antwoord-text">UW CODE:</p>

					<form name="antwBox">

						<input type="text" maxlength="1" id="input1" class="krasje" oninput="surprisefactory.check(this, document.antwBox.input2)">		
						<input type="text" maxlength="1" id="input2" class="krasje" oninput="surprisefactory.check(this, document.antwBox.input3)">	
						<input type="text" maxlength="1" id="input3" class="krasje" oninput="surprisefactory.check(this, document.antwBox.input4)">	
						<input type="text" maxlength="1" id="input4" class="krasje" oninput="surprisefactory.check(this, document.antwBox.input5)">	
						<input type="text" maxlength="1" id="input5" class="krasje" oninput="surprisefactory.check(this, document.antwBox.input6)">	
						<input type="text" maxlength="1" id="input6" class="krasje" oninput="surprisefactory.check(this, document.antwBox.input7)">	
						<input type="text" maxlength="1" id="input7" class="krasje" oninput="surprisefactory.check(this, document.antwBox.input8)">		
						<input type="text" maxlength="1" id="input8" class="krasje" oninput="surprisefactory.check(this, document.antwBox.input9)">	
						<input type="text" maxlength="1" id="input9" class="krasje" oninput="surprisefactory.check(this, document.antwBox.input10)">	
						<input type="text" maxlength="1" id="input10" class="krasje" oninput="surprisefactory.check(this, document.antwBox.input11)">	
						<input type="text" maxlength="1" id="input11" class="krasje" oninput="surprisefactory.check(this, document.antwBox.input12)">	
						<input type="text" maxlength="1" id="input12" class="krasje" oninput="surprisefactory.check(this, document.antwBox.input12)">

					</form>

				</div>

			</div>

		<div id="hint-knop1" class="hint" style="opacity: 0.3;"><p><i class="fa fa-lightbulb-o" aria-hidden="true"></i></p></div>
		<div id="hint-knop2" class="hint" onclick="surprisefactory.newhint()" style="opacity: 1; display: none;"><p><i class="fa fa-lightbulb-o" aria-hidden="true"></i></p></div>

	</div>

	<div id="goed" class="melding-kader">

		<div class="content-midden">

			<p id="antwoord-goed" class="antwoord-kop" style="color: green;"></p>
			<p class="antwoord-subkop">IS CORRECT</p>
			<p class="antwoord-knop" style="background-color: green; border-bottom: 2px solid #006600;" onclick="surprisefactory.link()">DOORGAAN</p>

		</div>

	</div>

	<div id="fout" class="melding-kader">

		<div class="content-midden">

			<p id="antwoord-fout" class="antwoord-kop" style="color: red;"></p>
			<p class="antwoord-subkop">IS INCORRECT</p>
			<p class="antwoord-knop" style="background-color: red; border-bottom: 2px solid #CC0000;" onclick="surprisefactory.opnieuw()">PROBEER OPNIEUW</p>

		</div>

	</div>

</body>
</html>

<script src="library.js"></script>