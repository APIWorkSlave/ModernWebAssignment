<?php
//clear all entries in session and destroy it.
	session_start();
	session_unset();
	session_destroy();
	echo "1";
?>