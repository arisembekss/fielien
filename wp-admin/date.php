<?php
require 'connect_db.php';
$date = date('y-m-d');
		$time = date('H:i:sa');
		$last_update = $date." ".$time;
			echo $last_update;
			
			?>