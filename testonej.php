<!DOCTYPE html>
<html>
<head>
	<title>jQuery Example</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			// Selectors example
			$("p").click(function() {
				$(this).hide();
			});

			// Events example
			$("button").click(function() {
				$("p").toggle();
			});
		});
	</script>
</head>
<body>

	<!-- HTML elements -->
	<button>Toggle paragraphs</button>
	<p>This is paragraph 1.</p>
	<p>This is paragraph 2.</p>
	<p>This is paragraph 3.</p>

</body>
</html>
