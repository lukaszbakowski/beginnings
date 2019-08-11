	<?php


	if(isset($_GET['images'])) {
		$actual_length = filter_var($_GET['images'], FILTER_SANITIZE_NUMBER_INT);
		$location = $_GET['location'];
		$dir = 'img/'.$location.'/original/';
		$files = array_slice(scandir($dir), 2); //lista plikow z pominieciem dwoch pustych (dot) array
		$ilosc =  count($files);
		if($ilosc == 0) {
			echo '<p>Sorry, there is no photos add yet. <a href="Contact">Contact</a> to website owner for more information.</p>';
		}
//	$sites_number = ceil($ilosc / 6);
//	print_r($files);
//	echo $sites_number.'<br>';
//	echo $ilosc;
		
		if($actual_length >= $ilosc) {
			exit;
		}
		
//		echo $actual_length;
		for($i = $actual_length; $i < $actual_length+6; $i++) {
			if(isset($files[$i])) {
				echo '<img alt="img'.$i.'" src="'.$dir.$files[$i].'"><br>';
			}
		}
	}
