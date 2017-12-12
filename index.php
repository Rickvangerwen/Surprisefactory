<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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

<div id="hint">
<p id="error"></p>
</div>

<div id="answer">
		<form name="formName" action="account.html">
		<input type="text" maxlength="6" id="input6" name="input6" oninput="check(this)">		
</form>
</div>

<div id="doorgaan">Doorgaan</div>

<div id="groen"></div>
<div id="red"></div>
</body>
</html>
<script type="text/javascript">

function check(field) {
 



  var jan = field.value;
 console.log(jan);

if (jan.length == 6) {

if (jan == "zweden") {
	document.getElementById("input6").style.color = "green";
	document.getElementById("doorgaan").style.display = "block";
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



</script>