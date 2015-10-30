<html>
	<head>
		<tilte>MultiUpload</title>
	</head>
	<body>
		<?php
		 
			  foreach ($_FILES['image']['name'] as $key => $value) {
				  # code...
				  move_uploaded_file($_FILES['image']['tmp_name'][$key],"C:\/xampp\/htdocs\/experiment\/album\/upload\/".$_FILES['image']['name'][$key]);
					 
			  }

		?>
		<form action="index.php" method="post" enctype="multipart/form-data">
			<label>File</label>
			<input type="file" name="image[]" multiple>
			<input type="submit" value="Upload">
		</form>
		
	</body>
</html>