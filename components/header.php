<?php
// header.php - Page Header

// Page Header
	echo "<!doctype html>
			<html>
				<head>
					<title>$sitename - $title</title>
					<link rel='icon' href='$pixdir/browser_icon.png' type='image/x-icon'>
					<link rel='stylesheet' href='styles/website.css'>
					<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
					<script src='functions/functions.js'></script>
				</head>
				<body style='$body'>
					<div class='container'>
						<table width='$width' align='center' cellpadding='0' cellspacing='0' style='border:1px solid black; border-radius: 10px 10px 0px 0px;'>
							<tr>
								<td style='width:50%;$hdr_style'>
									<img src='$pixdir/$logo' style='$logo_style'>$desc_short
								</td>
								<td style='width:50%;$hdr_style2'>
									Signed in as: $sname
								</td>
							</tr>
						</table>";
