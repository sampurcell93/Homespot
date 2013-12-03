<?php
	if (isset($_POST['Submitted'])) {
		$body = "";
		if ($_POST['name'] !== '') {
			$body .= "From: " . $_POST['name'] . "\n";
		}
		$body .= "Message: " . $_POST['message'] . "\n";
		mail("spurcell93@gmail.com", $_POST['subject'], $body);
		header("Location: /");
	}
	else {
		header("Location: /");
	}