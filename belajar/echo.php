	<?php 
		$resep=array (
					array ("buah"=>"pepaya","banyak"=>"1","tambahan"=>"kecap"),
					array ("buah"=>"mangge","banyak"=>"2","tambahan"=>"susu"),
					array ("buah"=>"apel","banyak"=>"4","tambahan"=>"coklat")
					);

	?>

<!DOCTYPE html>
<html>
<head>
	<title>Belajar Echo</title>
</head>
<body>

	<?php 
		foreach ($resep as $r) { ?>
	 
	<h1>Cara membuat Jus <?php echo $r ['buah'] ?> </h1>

	<p><b>Campurkan buah <?php echo $r ['buah'] ?> sebanyak <?php echo $r ['banyak'] ?> buah, ditambahkan dengan <?php echo $r ['tambahan'] ?> untuk memberi rasa lebih nikmat.</b>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

	<?php } ?>

</body>
</html>