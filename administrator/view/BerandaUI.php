<?php 

require_once 'View.php';

class BerandaUI extends View
{
	
	public function tampilberita()
	{
		include_once 'pages/beranda.php';
		$this->end();
	}
}



 ?>