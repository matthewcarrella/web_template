<!-- Chapter 4 Web Template Project Template File -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Template Project</title>
</head>
<body>
	<?php include("inc_header.html");?>
	<div style="width:20%; text-align: center; float: left;">
		<?php include("inc_buttonnav.html"); ?>

	</div>
	<!-- Start of dynamic content section -->
	<?php
		if(isset($_GET["content"])) {
			switch($_GET["content"]) {
				case "About Us":
					include("inc_about.html");
					break;
				case "Contact Us":
					include("inc_contact.html");
					break;
				default:
					include("inc_home.html");
					break;
			} //end of switch
		} else {
			// no button was even clicked if we are here
			include("inc_home.html");
		}
	?>
	<?php
		include("inc_footer.php");
	?>
</body>
</html>