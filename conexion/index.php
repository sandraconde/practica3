<?php
$sam = new mysqli("localhost","root","","dba");
if ($sam) {
	echo "bien conectado";
} else{
	echo "mal conectado";
	# code...
}
?>