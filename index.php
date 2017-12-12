<html>
<head>
	<title>Quiz</title>
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
<div id="hint">
<img id="imgg" src="b.jpg">
<img id="imgg2" src="b.jpg">
</div>

<div id="answer">
<form name="formName" action="account.html">
		<input type="text" maxlength="6" id="input6" name="input6" oninput="check(this)">		
</form>
</div>

<div id="koek"><p>HINT</p></div>
<div id="koek2" onclick="achmed()"><p>HINT</p></div>

</div>

<div id="groen">
<p class="p1">ZWEDEN</p>
<p class="p2">IS CORRECT</p>
<br>
<p class="p2">DOORGAAN</p>
</div>

</body>
</html>
<script type="text/javascript">

function check(field) {
 



  var jan = field.value;
 console.log(jan);


if (jan.length == 6) {

if (jan == "zweden" || jan == "Zweden" || jan == "ZWEDEN") {
	document.getElementById("input6").style.color = "green";
	document.activeElement.blur();
	$("#groen").fadeIn(1000);
} else {
	document.getElementById("input6").style.borderBottom = "2px solid red";
	document.getElementById("input6").style.color = "red";
	document.getElementById("doorgaan").style.display = "none";
}

} else {
	document.getElementById("input6").style.color = "black";
	document.getElementById("input6").style.borderBottom = "2px solid black";
	document.getElementById("doorgaan").style.display = "none";
}


}

function achmed() {
	$("#imgg2").fadeIn(1000);
	document.getElementById("koek2").style.display = "none";

}

$(document).ready(function() {
  setTimeout(function() {
    document.getElementById("koek2").style.display = "block";
  }, 5000);
});



</script>