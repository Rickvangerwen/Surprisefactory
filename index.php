<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">

		function autotab(current,to)
			{
			    if (current.getAttribute && current.value.length==current.getAttribute("maxlength")) 
			    {
			        to.focus() 
			    }
			}

	</script>
</head>
<body>

<div id="app">

	<img class="logo" src="loho.png">

<div class="content-melding">
<div id="hint">

<img id="imgg" src="b.jpg">
<img id="imgg2" src="b.jpg">
</div>


<div id="answer">

<form name="formName">
		<input type="text" maxlength="1" id="input1" oninput="check(this, document.formName.input2)">		
		<input type="text" maxlength="1" id="input2" oninput="check(this, document.formName.input3)">	
		<input type="text" maxlength="1" id="input3" oninput="check(this, document.formName.input4)">	
		<input type="text" maxlength="1" id="input4" oninput="check(this, document.formName.input5)">	
		<input type="text" maxlength="1" id="input5" oninput="check(this, document.formName.input6)">	
		<input type="text" maxlength="1" id="input6" oninput="check(this, document.formName.input6)">		
</form>
</div>
</div>

<div id="koek"><p><i class="fa fa-lightbulb-o" aria-hidden="true"></i></p></div>
<div id="koek2" onclick="achmed()"><p><i class="fa fa-lightbulb-o" aria-hidden="true"></i></p></div>

</div>

<div id="groen">
	<div class="content-melding">
		<p id="p4"></p>
		<p class="p2">IS CORRECT</p>
		<p class="p2 knop" onclick="...">DOORGAAN</p>
	</div>
</div>

<div id="rood">
	<div class="content-melding">
		<p id="p42"></p>
		<p class="p2">IS INCORRECT</p>
		<p class="p2 knop" onclick="opnieuw()">PROBEER OPNIEUW</p>
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


  var jan = input1.value + input2.value + input3.value + input4.value + input5.value + input6.value;
 console.log(jan);

 var piet = jan.toUpperCase();


if (jan.length == 6) {

if (piet == "ZWEDEN") {
	document.getElementById("p4").innerHTML = piet;
	document.activeElement.blur();
	$("#groen").fadeIn(1000);
} else {

	document.activeElement.blur();
	$("#rood").fadeIn(1000);
	document.getElementById("p42").innerHTML = piet;
	document.getElementById("input1").style.color = "red";
	document.getElementById("input2").style.color = "red";
	document.getElementById("input3").style.color = "red";
	document.getElementById("input4").style.color = "red";
	document.getElementById("input5").style.color = "red";
	document.getElementById("input6").style.color = "red";
}

}


}

function achmed() {
	$("#imgg2").fadeIn(1000);
	document.getElementById("koek2").style.display = "none";

}

$(document).ready(function() {
  setTimeout(function() {
    $("#koek2").fadeIn(1000);
  }, 60000);
});

function opnieuw() {
	$("#rood").fadeOut(1000);

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