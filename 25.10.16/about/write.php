<?php
	$nic = $_POST['nic'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];

	$fh = fopen('about.txt', "a+");
	fwrite($fh, $nic."\n");
	fwrite($fh, $email."\n");
	fwrite($fh, $comment."\n");
	fclose($fh);
?>