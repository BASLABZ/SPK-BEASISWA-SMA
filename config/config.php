<?php 
	 mysql_connect("localhost","root","") or die('disconnect');
	 mysql_select_db("db_spk_beasiswa") or die('database nout found');
	 
	 // FUNGSI DATE CONVERT
	function jin_date_sql($date){
		$exp = explode('/',$date);
		if(count($exp) == 3) {
			$date = $exp[2].'-'.$exp[1].'-'.$exp[0];
		}
		return $date;
	}
	function jin_date_str($date){
		$exp = explode('-',$date);
		if(count($exp) == 3) {
			$date = $exp[2].'/'.$exp[1].'/'.$exp[0];
		}
		return $date;
	}
 ?>
 