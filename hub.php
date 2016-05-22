<?php
// koneksi
class pDB extends SQLITE3 {
	var $dbname;

	function __construct($dbname){
		$this->open($dbname);
	}
}

$parti = new pDB("event.parti");
if(!$parti){
	echo $parti->lastErrorMsg();
}

?>