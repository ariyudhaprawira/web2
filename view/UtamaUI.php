<?php 

	require_once 'View.php';

	class UtamaUI extends View
	{
		
		public function tampilkanberita();
		{
			include_once 'pages/beranda.php';
			$this->end();
		}
	}



 ?>