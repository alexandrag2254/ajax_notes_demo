<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Ajax Notes</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){


			$(document).on("submit", "form", function(){
				$.post($(this).attr('action'), $(this).serialize(), function(response){
					$("#notes").html(response);
				})
				return false;
			})

			$(document).on("change", ".update", function(){
				$.post($(this).attr('action'), $(this).serialize(), function(response){
					$("#notes").html(response);
				})
					return false;
			})

		});	


	</script>
</head>
<body>
<div id="container">
	<h2>Welcome to Ajax Notes</h2>
	<div id="notes"></div>
	<form action="/notes/create" method="post">
		<input type="text" name="title">
		<input type="submit" value="Add Note">
	</form>
</div>
</body>
</html>