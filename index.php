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
</body>
</html>
<script type="text/javascript">

function check(field) {
 

  console.log(field.value);
}

</script>