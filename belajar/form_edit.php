<?php 

	$id = $_GET ['id'];
	echo $id;

 ?>

  <?php
	$host 		= 'localhost';
	$dbname 	= 'ari_sisfonews';
	$username 	= 'root';
	$password 	= 'master2016';
	$db = '';
	try {
		    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
		    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $exception){
		    die("Connection error: " . $exception->getMessage());
		}
		try {
			$stmt = $db->prepare("SELECT * FROM berita WHERE id_berita=:id");
			$stmt->bindparam(":id",$id);
			$stmt->execute(); //eksekusi
			$data = $stmt->fetch(); //ubah ke arayy, penampungnya data
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
	}
	try {
			$stmt2 = $db->prepare("SELECT * FROM kategori");
			$stmt2->execute(); //eksekusi
			$data2 = $stmt2->fetchAll(); //ubah ke arayy, penampungnya data
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 
	}

	?>

 <form action="ubah_berita.php?id=1" method="POST">

 	<label for="Judul">Judul</label><br>
	<input type="text" name="judul" value="<?php echo $data ['judul'] ?>"><br><br>

	<label for="isi">Isi</label><br>
	<textarea name="isi" id="isi" cols="30"	rows="10" value='1'> <?php echo $data ['isi']; ?> </textarea><br><br>
	 
	<label for="kategori">Kategori</label><br>
	<select name="kategori" id="kategori">

		<?php foreach ($data2 as $kat): ?>
			<option value="<?php echo $kat ['id_kategori'] ?>" 
				<?php 
				if ($kat ['id_kategori']==$data['id_kategori']) echo "selected";
	 			?>
			><?php echo $kat ['nama_kategori'] ?></option>
		<?php endforeach ?>

	</select><br><br>

	<input type="submit" name="simpan" value="Simpan"><br>
 	

 </form>

