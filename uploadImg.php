<?php 


	$sourcePath = $_FILES['file']['tmp_name']; // tempat source path, jangan diubah
	$targetPath = "photo/".$_FILES['file']['name']; //  path foto yang default ke /photo, jangan diubah
	move_uploaded_file($sourcePath,$targetPath) ; // path buat upload foto, jangan diubah

	echo "<img id='image_preview' class=' ' src='photo/" . $_FILES["file"]["name"] . "' width='133px' style='margin: auto;padding-top: 6px'>";

 ?>