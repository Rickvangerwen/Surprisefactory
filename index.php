<html>

	<head>

		<title>Surpise Factory | Escapebox</title>

		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<script src="https://code.jquery.com/jquery-latest.js"></script>

	</head>

<body>

	<div id="app-kader">

		<img class="logo" src="logo.png">

			<div class="content-midden">

				<div class="hint-kader">

					<img id="hint-afb1" class="hint-afb" style="transform: rotate(7deg);" src="b.jpg">
					<img id="hint-afb2" class="hint-afb" style="transform: rotate(-7deg); display: none;" src="b.jpg">
					
				</div>

				<div class="antwoord-kader">

					<p class="antwoord-text">UW CODE:</p>

					<form name="antwBox">

						<input type="text" maxlength="1" id="input1" oninput="check(this, document.antwBox.input2)">		
						<input type="text" maxlength="1" id="input2" oninput="check(this, document.antwBox.input3)">	
						<input type="text" maxlength="1" id="input3" oninput="check(this, document.antwBox.input4)">	
						<input type="text" maxlength="1" id="input4" oninput="check(this, document.antwBox.input5)">	
						<input type="text" maxlength="1" id="input5" oninput="check(this, document.antwBox.input6)">	
						<input type="text" maxlength="1" id="input6" oninput="check(this, document.antwBox.input6)">	

					</form>

				</div>

			</div>

		<div id="hint-knop1" class="hint" style="opacity: 0.3;"><p><i class="fa fa-lightbulb-o" aria-hidden="true"></i></p></div>
		<div id="hint-knop2" class="hint" onclick="newhint()" style="opacity: 1; display: none;"><p><i class="fa fa-lightbulb-o" aria-hidden="true"></i></p></div>

	</div>

	<div id="goed" class="melding-kader">

		<div class="content-midden">

			<p id="antwoord-goed" class="antwoord-kop" style="color: green;"></p>
			<p class="antwoord-subkop">IS CORRECT</p>
			<p class="antwoord-knop" style="background-color: green; border-bottom: 2px solid #006600;" onclick="...">DOORGAAN</p>

		</div>

	</div>

	<div id="fout" class="melding-kader">

		<div class="content-midden">

			<p id="antwoord-fout" class="antwoord-kop" style="color: red;"></p>
			<p class="antwoord-subkop">IS INCORRECT</p>
			<p class="antwoord-knop" style="background-color: red; border-bottom: 2px solid #CC0000;" onclick="opnieuw()">PROBEER OPNIEUW</p>

		</div>

	</div>

</body>
</html>

<script type="text/javascript">



function check(field, to) {
 
 	if (field.getAttribute && field.value.length==field.getAttribute("maxlength")) 
		{
			to.focus() 
		}

	var antwoordFirst = input1.value + input2.value + input3.value + input4.value + input5.value + input6.value;

	var antwoordFinal = antwoordFirst.toUpperCase();

	if (antwoordFinal.length == 6) {

		if (antwoordFinal == "ZWEDEN") {

			$("#goed").fadeIn(1000);
			document.activeElement.blur();

			document.getElementById("antwoord-goed").innerHTML = antwoordFinal;
			
		} else {

			$("#fout").fadeIn(1000);
			document.activeElement.blur();
		
			document.getElementById("antwoord-fout").innerHTML = antwoordFinal;
			document.getElementById("input1").style.color = "red";
			document.getElementById("input2").style.color = "red";
			document.getElementById("input3").style.color = "red";
			document.getElementById("input4").style.color = "red";
			document.getElementById("input5").style.color = "red";
			document.getElementById("input6").style.color = "red";

		}

	}


}



	$(document).ready(function() {

	  setTimeout(function() {

	    $("#hint-knop2").fadeIn(1000);

	  }, 60000);

	});

	function newhint() {

		$("#hint-afb2").fadeIn(1000);
		document.getElementById("hint-knop2").style.display = "none";

	}

	function opnieuw() {

		$("#fout").fadeOut(1000);

		document.getElementById("input1").style.color = "black";
		document.getElementById("input2").style.color = "black";
		document.getElementById("input3").style.color = "black";
		document.getElementById("input4").style.color = "black";
		document.getElementById("input5").style.color = "black";
		document.getElementById("input6").style.color = "black";

		document.getElementById("input1").value = "";
		document.getElementById("input2").value = "";
		document.getElementById("input3").value = "";
		document.getElementById("input4").value = "";
		document.getElementById("input5").value = "";
		document.getElementById("input6").value = "";

	}

</script>